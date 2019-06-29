<?php
require_once '../../database/Query.php';

$schoolsForFilter = [];

function($district, $schoolType){
    $query = (new Query((new DatabaseConnector())->connect()));
    if($schoolsForFilter = $query->GetSchoolsForFilter($district, $schoolType)){
        echo "success";
    }
    else{
        die(header("HTTP/1.0 404 NOT FOUND"));
    }
}
?>