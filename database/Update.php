<?php
require_once "DatabaseConnector.php";
require_once "Query.php";
require_once "Insert.php";
session_start();

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
            SET   name = :name, 
                school_type = :school_type,
                description = :description,
                principal = :principal,
                phone_number = :phone_number,
                house_number = :house_number,
                zip_code = :zip_code, 
                district = :district,
                city = :city, 
                street = :street,
                email = :email,
                students = :students,
                homepage_url = :homepage_url, 
                creator = :creator
        WHERE school_id = :id and creator = :creator";


        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':name' => $school['name'],
            ':school_type' => $school['schoolType'],
            ':description' => $school['description'],
            ':principal' => $school['principal'],
            ':phone_number' => $school['phoneNumber'],
            ':house_number' => $school['address']['number'],
            ':zip_code' => $school['address']['zip_code'],
            ':district' => $school['address']['district'],
            ':city' => 'Oldenburg',
            ':street' => $school['address']['street'],
            ':email' => $school['mail'],
            ':students' => $school['students'],
            ':homepage_url' => $school['homepageURL'],
            ':creator' => $school['creator'],
            ':id' => $school['school_id']
        ]);
        $update = new Update((new DatabaseConnector())->connect());
        $update->imageSchoolID($school['school_id'], $school['creator']);
        $row = $stmt->fetch();
        $_SESSION['Schule erfolgreich geändert'];
        return $row['school_id'];
    }

    public function imageSchoolID($schoolId, $user_id){
        $sql = "UPDATE Image SET school_id = :school_id Where school_id = :user_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':user_id' => $user_id,
            ':school_id' => $schoolId
        ]);
    }

}
