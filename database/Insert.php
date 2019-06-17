<?php
session_start();
require_once "DatabaseConnector.php";
require_once "Update.php";

class Insert
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;

    }

    public function newUser($email, $password, $first_name, $last_name)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT into User (first_name, last_name, email, password)
                VALUES (:first_name, :last_name, :email, :password);";
        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute([
                ':first_name' => $first_name,
                ':last_name' => $last_name,
                ':email' => $email,
                ':password' => $password,
            ]);
        } catch (Exception $ex) {
            error_log("Insert->newUser() Error: " . $ex->getMessage());
        }
    }

    public function newSchool($school, $user_id)
    {
        $sql = "INSERT INTO School
                (creator, name, school_type, description, principal, students, phone_number, house_number, zip_code, district, city, street, email, students, homepage_url)
        VALUES (:creator, :name, :school_type, :description, :principal, :students, :phone_number, :house_number, :zip_code, :district, :city, :street, :email, :students, :homepage_url)";

        try {
            $stmt = $this->pdo->prepare($sql);
            // einzelne Werte gibt es gar nicht im Formular, deswegen hardgecodet drin.
            $stmt->execute([
                ':name' => $school['name'],
                ':school_type' => $school['schoolType'],
                ':description' => $school['description'],
                ':principal' => $school['principal'],
                ':phone_number' => $school['phoneNumber'],
                ':house_number' => $school['address']['number'],
                ':district' => $school['address']['district'],
                ':city' => 'oldenburg',
                ':zip_code' => $school['address']['zip_code'],
                ':street' => $school['address']['street'],
                ':email' => $school['mail'],
                ':students' => $school['numberOfStudents'],
                ':homepage_url' => $school['homepageURL'],
                ':creator' => $school['creator']
            ]);
            $update = new Update((new DatabaseConnector())->connect());
            $schoolId = $this->pdo->lastInsertID();
            $update->imageSchoolID($schoolId, $user_id);
        } catch (Exception $ex) {
            error_log("Insert->newSchool() Error: " . $ex->getMessage());
        }
        $_SESSION['error'] = "Neue Schule erfolgreich angelegt";
    }

    public function newImage($name, $size, $mime, $data, $schoolId)
    {
        $sql = "INSERT INTO Image(name, size, mime, data, school_id)
                        VALUES (:name, :size, :mime, :data, :school_id)";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':size' => $size,
                ':mime' => $mime,
                ':data' => $data,
                ':school_id' => $schoolId
            ]);
        } catch (Exception $ex) {
            error_log("Insert->newImage() Error: " . $ex->getMessage());
        }
    }
}

$insert = new Insert((new DatabaseConnector())->connect());
