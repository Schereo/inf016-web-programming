<?php

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

    public function newSchool($school)
    {
        $sql = "INSERT INTO School
                (creator, name, school_type, description, principal, students, phone_number, house_number, zip_code, district, city, street, email, students, homepage_url)
        VALUES (:creator, :name, :school_type, :description, :principal, :students, :phone_number, :house_number, :zip_code, :district, :city, :street, :email, :students, :homepage_url)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':name' => $school['name'],
                ':school_type' => $school['schoolType'],
                ':description' => $school['description'],
                ':principal' => $school['principal'],
                ':phone_number' => $school['phoneNumber'],
                ':house_number' => $school['address']['number'],
                ':district' => $school['address']['district'],
                ':city' => $school['address']['city'],
                ':zip_code' => $school['address']['zip_code'],
                ':street' => $school['address']['street'],
                ':email' => $school['mail'],
                ':students' => $school['students'],
                ':homepage_url' => $school['homepageURL'],
                ':creator' => $school['creator']
            ]);
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
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->pdo->prepare($sql);
            $this->pdo->beginTransaction();
            $stmt->execute([
                ':name' => $name,
                ':size' => $size,
                ':mime' => $mime,
                ':data' => $data,
                ':school_id' => $schoolId
            ]);
            $this->pdo->commit();
        } catch (Exception $ex) {
            $this->pdo->rollBack();
            error_log("Insert->newImage() Error: " . $ex->getMessage());
        }
    }

    public function newRating($canteen, $learnenvironment, $teacher, $activitydiversity, $user_id, $school_id)
    {
        $sql = "INSERT INTO Rating (canteen, learnenvironment, teacher, activitydiversity, user_id, school_id) 
                VALUES (:canteen, :learnenvironment, :teacher, :activitydiversity, :user_id, :school_id)";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':canteen' => $canteen,
                ':learnenvironment' => $learnenvironment,
                ':teacher' => $teacher,
                ':activitydiversity' => $activitydiversity,
                ':user_id' => $user_id,
                ':school_id' => $school_id
            ]);
        } catch (Exception $ex) {
            error_log("Insert->newRating() Error: " . $ex->getMessage());
        }
    }
}

$insert = new Insert((new DatabaseConnector())->connect());
