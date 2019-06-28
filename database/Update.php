<?php
require_once "DatabaseConnector.php";
require_once "Query.php";
require_once "Insert.php";
/*
    session_start();
*/

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

    public function imageSchoolID($user_id)
    {
        $sql = "UPDATE Image SET school_id = :school_id Where school_id = :user_id";
        $schoolId = $this->getLastSchoolInsert();
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':user_id' => $user_id,
            ':school_id' => $schoolId
        ]);
    }

    public function getLastSchoolInsert() {
        $sql="SELECT * FROM School ORDER BY school_id DESC LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        try {
            $stmt->execute();
        }
        catch (Exception $ex) {
            error_log("Query->getLastSchoolInsert Error: " . $ex->getMessage());
        }
        $schoolId = $stmt->fetch();
        return $schoolId['school_id'];
    }

    public function updateRatings($canteen, $learnEnvironment, $teacher, $activity, $user_id,$school_id)
    {
        $sql = "UPDATE Rating
            SET  canteen = :canteen, 
                learnenvironment = :learnEnvironment,
                teacher = :teacher, 
                activitydiversity = :activity,
                school_id = :school_id,
                user_id = :user_id
        WHERE school_id = :school_id and user_id = :user_id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':canteen' => $canteen,
            ':learnEnvironment' => $learnEnvironment,
            ':teacher' => $teacher,
            ':activity' => $activity,
            ':school_id' => $school_id,
            ':user_id' => $user_id
        ]);
    }
}
