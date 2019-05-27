<?php

interface SchoolDao
{

    //Get all schools
    static function getAll();

    //Get school by id
    static function getById($id);

    //Get school by name
    static function getByName($name);

    //Get school by district
    static function getByDistrict($district);

    //Get school by type
    static function getByType($schoolType);

    //Update school
    static function update($id);

    //Delete school
    static function delete($id);

}