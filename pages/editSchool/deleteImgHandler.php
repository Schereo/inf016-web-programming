<?php
require_once "../../database/Delete.php";

$delete = new Delete((new DatabaseConnector())->connect());
$delete->image($_POST['delete_img']);
header("Location: ../../index.php#anlegen");