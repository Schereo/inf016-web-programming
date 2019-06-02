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

    public function newSchool($school)
    {
        // die sessions hab ich auskommentiert, weil der sonst erst gar nicht in die If schleife reingeht..
        if ( /*isset ($_SESSION['firstName']) isset($_SESSION['userID'])&&*/ isset($_POST['schoolname'])
            && isset($_POST['schooltype']) && isset($_POST['description']) && isset($_POST['principal'])
            && isset($_POST['phonenumber']) && isset($_POST['mail']) && isset($_POST['homepage'])
            && isset($_POST['street']) && isset($_POST['number']) && isset($_POST['district'])) {

            $sql = "INSERT INTO School
                (creator, name, school_type, description, principal, phone_number, house_number, zip_code, district, city, street, email, students, homepage_url)
        VALUES (:creator, :name, :school_type, :description, :principal, :phone_number, :house_number, :zip_code, :district, :city, :street, :email, :students, :homepage_url)";

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
                    ':zip_code' => ['address']['street'],
                    ':street' => ['address']['street'],
                    ':email' => $school['mail'],
                    ':students' => 1000,
                    ':homepage_url' => $school['homepageURL'],
                    ':creator' => $school['creator']
                ]);
                $update = new Update((new DatabaseConnector())->connect());
                $row = $stmt->fetch();
                $schoolId = $row['school_id'];
                $update->imageSchoolID($schoolId);
            } catch (Exception $ex) {
                error_log("Insert->newUser() Error: " . $ex->getMessage());
            }
        }
    }

    public function newImage($name, $size, $mime, $data)
    {
        $sql = "INSERT INTO Image(name, size, mime, data)
                        VALUES (:name, :size, :mime, :data)";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':size' => $size,
                ':mime' => $mime,
                ':data' => $data
            ]);
        } catch (Exception $ex) {
            error_log("Insert->newImage() Error: " . $ex->getMessage());
        }
    }
}
$insert = new Insert((new DatabaseConnector())->connect());
