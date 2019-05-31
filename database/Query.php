<?php
require_once "database/DatabaseConnector.php";

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
                where :author = author";
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

    public function getSchool($school_id)
    {
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
}

$query = new Query((new DatabaseConnector())->connect());
