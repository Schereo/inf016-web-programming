<?php
require_once "database/DatabaseConnector.php";
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
        $sql = "INSERT into School
                (name, school_type, description, principal, phone_number, house_number, zip_code, district, city, street, email, students, homepage_url, creator)
        VALUES (:name, :school_type, :description, :principal, :phone_number, :house_number, :zip_code, :district, :city, :street, :email, :students, :homeage_url, :creator);";


        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'name' => $school['name'],
            'school_type' => $school['schoolType'],
            'description' => $school['description'],
            'principal' => $school['principal'],
            'phone_number' => $school['phoneNumber'],
            'house_number' => $school['address']['number'],
            'zip_code' => $school['address']['zipCode'],
            'district' => $school['district']['name'],
            'city' => oldenburg,
            'street' => $school['address']['street'],
            'email' => $school['mail'],
            'students' => $school['students'],
            'homepage_url' => $school['homepageURL'],
            'creator' => $school['userID'],

        ]);
        $row = $stmt->fetch();
        return $row['school_id'];
    }
}
$insert = new Insert((new DatabaseConnector())->connect());
