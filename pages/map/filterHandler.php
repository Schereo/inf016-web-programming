<?php
require_once '../../database/Query.php';

$district = $_POST['district'];
$schoolType = $_POST['schoolType'];

$query = (new Query((new DatabaseConnector())->connect()));
if ($schoolType != null && $district != 'Alle') {
    $schoolsForFilter = $query->GetSchoolsForFilter($district, $schoolType);
    print json_encode($schoolsForFilter, JSON_PRETTY_PRINT);
}
elseif ($district = 'Alle'){
    $schoolsForFilter = $query->GetSchoolsByType($schoolType);
    print json_encode($schoolsForFilter, JSON_PRETTY_PRINT);
} else {
    $schoolsForFilter = $query->getSchoolsByDistrict($district);
    print json_encode($schoolsForFilter, JSON_PRETTY_PRINT);
}
?>