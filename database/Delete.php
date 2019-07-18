<?php
require_once $depth . "DatabaseConnector.php";

class Delete
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function user($id)
    {
        $sql = "DELETE From User
                where user_id = :id";
        $stmt = $this->pdo->prepare($sql);
        try {
            $stmt->execute([':id' => $id]);
        } catch (Exception $ex) {
            error_log("Delete->user() Error: " . $ex->getMessage());
            echo("Delete->user() Error: " . $ex->getMessage());

        }
        return $stmt->rowCount();
    }

    public function school($school_id)
    {
        $sql = "DELETE FROM School WHERE school_id = :id";
        $stmt = $this->pdo->prepare($sql);
        try {
            $stmt->execute([':id' => $school_id]);
        } catch (Exception $ex) {
            error_log("Delete->image() Error: " . $ex->getMessage());

        }
    }
    public function image($id)
    {
        $sql = "DELETE FROM Image WHERE image_id = :id";
        $stmt = $this->pdo->prepare($sql);
        try {
            $stmt->execute([':id' => $id]);
        } catch (Exception $ex) {
            error_log("Delete->image() Error: " . $ex->getMessage());
            echo("Delete->user() Error: " . $ex->getMessage());
        }
    }
}
