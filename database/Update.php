<?php
require_once "DatabaseConnector.php";
require_once "Query.php";
require_once "Insert.php";

class Update
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function editSchool($school)
    {
        $sql = "UPDATE School
            SET   name = :name, school_type = :school_type, description = :description, principal = :principal, phone_number = :phone_number,
                house_number = :house_number, zip_code = :zip_code, district = :district, city = :city, street = :street, email = :email, students = :students, homepage_url = :homepage_url, creator = :creator
        WHERE school_id = :id and creator = :creator";


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
            'city' => 'Oldenburg',
            'street' => $school['address']['street'],
            'email' => $school['mail'],
            'students' => $school['students'],
            'homepage_url' => $school['homepageURL'],
            'creator' => $_SESSION['user_ID']

        ]);
        $row = $stmt->fetch();
        return $row['school_id'];
    }

    public function imageSchoolID($schoolId){
        $sql = "UPDATE Image SET school_id = :school_id Where school_id ISNULL";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':school_id' => $schoolId
        ]);
    }
}
