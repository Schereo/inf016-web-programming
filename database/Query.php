<?php
require_once "DatabaseConnector.php";

class Query
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;

    }

    public function getUserRow($user_id)
    {
        $sql = "Select *
                From User
                where user_id = :id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':id', $user_id);
            $stmt->execute();
        } catch (Exception $ex) {
            error_log("Query->getUserRow Error: " . $ex->getMessage());
        }
        $row = $stmt->fetch();
        return $row;
    }

    public function getSchoolsFromAuthor($user_id)
    {
        $sql = "Select *
                From School, User
                where creator = :author";
        $stmt = $this->pdo->prepare($sql);
        try {
            $stmt->execute([
                ':author' => $user_id,
            ]);
        } catch (Exception $ex) {
            error_log("Query->getUserRow Error: " . $ex->getMessage());
        }
        $row = $stmt->fetchAll();
        return $row;
    }

    public function isCreatorOfSchool($creator)
    {
        $sql = "Select school_ID
                From School
                where creator = :creator";
        $stmt = $this->pdo->prepare($sql);
        try {
            $stmt->execute([
                ':creator' => $creator,
            ]);
        } catch (Exception $ex) {
            error_log("Query->isCreatorOfSchool Error: " . $ex->getMessage());
        }
        $row = $stmt->fetchAll();
        return $row['school_ID'];
    }

    public function getSchool($school_id)
    {
        $sql = "Select *
                From School
                where school_id = :school_ID";
        $stmt = $this->pdo->prepare($sql);
        try {
            $stmt->execute([
                ':school_ID' => $school_id,
            ]);
        } catch (Exception $ex) {
            error_log("Query->getSchool Error: " . $ex->getMessage());
        }
        $row = $stmt->fetch();
        return $row;
    }

    public function getUserId($email)
    {
        $sql = "Select user_id From User
                where email = :email";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(
                [
                    ':email' => $email
                ]
            );
        } catch (Exception $ex) {
            error_log("Query->getUserRow Error: " . $ex->getMessage());
        }
        $row = $stmt->fetch();
        return $row['user_id'];
    }

    public function getPassword($email)
    {
        $sql = "Select password
                From User
                where email = :email";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':email', $email);
            $stmt->execute();
        } catch (Exception $ex) {
            error_log("Query->getUserRow Error: " . $ex->getMessage());
        }
        $row = $stmt->fetch();
        return $row['password'];
    }

    public function getSchoolsByType($school_type)
    {
        $sql = "Select *
                From School
                where school_type = :school_type";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':school_type' => $school_type
            ]);
        } catch (Exception $ex) {
            error_log("Query->getUserRow Error: " . $ex->getMessage());
        }
        $row = $stmt->fetchAll();
        print_r('Type_________________________________');
        print_r($row['school_id']);
        return $row;
    }

    public function getSchoolsByDistrict($district)
    {
        $sql = "Select *
                From School
                where district = :district";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':district' => $district
            ]);
        } catch (Exception $ex) {
            error_log("Query->getSchoolsByDistrict Error: " . $ex->getMessage());
        }
        $row = $stmt->fetchAll();
        print_r('District_________________________________');
        print_r($row['school_id']);
        return $row;
    }

    public function getSchoolsByName($name)
    {
        $sql = "Select *
                From School
                where name LIKE '%' ||:name ||'%'";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':name' => $name
            ]);
        } catch (Exception $ex) {
            error_log("Query->getSchoolsByDistrict Error: " . $ex->getMessage());
        }
        $row = $stmt->fetchAll();
        print_r('Name_________________________________');
        print_r($row[0]['school_id']);
        return $row;
    }

    function getUploadedImages(){
        $sql = "SELECT * FROM Image WHERE school_id ISNULL";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (Exception $ex) {
            error_log("Query->getUploadedImages Error: " . $ex->getMessage());
        }
        $row = $stmt->fetch();
        return $row;
    }
}

$query = new Query((new DatabaseConnector())->connect());