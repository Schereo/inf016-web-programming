<?php
require_once "./DatabaseConnector.php";

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
            $stmt->execute(['id' => $id]);
        } catch (Exception $ex) {
            error_log("Delete->user() Error: " . $ex->getMessage());
            echo("Delete->user() Error: " . $ex->getMessage());

        }
        return $stmt->rowCount();
    }
}
