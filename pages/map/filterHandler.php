<?php
require_once 'database/Query.php';

$schoolsForFilter = [];

function($district, $schoolType){
    $query = (new Query((new DatabaseConnector())->connect()));
    $schoolsForFilter = $query->GetSchoolsForFilter($district, $schoolType);
}