<?php
interface SchoolDao {

    //Create new School
    function create($school);

    //Get school by id
    function getById($id);
 
    //Get school by name
    function getByName($name);

    //Get school by disctrict
    function getByDistrict($district);

    //Get school by type
    function getByType($schoolType);

    //Update school
    function update($id);

    //Delete school
    function delete($id);
}
?>