<?php
require_once '../../database/Query.php';

$district = $_POST['district'];
$schoolType = $_POST['schoolType'];

$query = (new Query((new DatabaseConnector())->connect()));
$schoolsForFilter = $query->GetSchoolsForFilter($district, $schoolType);
print json_encode($schoolsForFilter, JSON_PRETTY_PRINT);
?>