<?php
class School implements schoolDao {

    static function getAll() {
        $schools = file_get_contents("database.json");
        $schoolsArray = json_decode($schools, true);
        return $schoolsArray;
    }

    static function getById($id)
    {
        // TODO: Implement getById() method.
    }

    static function getByName($name)
    {
        // TODO: Implement getByName() method.
    }

    static function getByDistrict($district)
    {
        // TODO: Implement getByDistrict() method.
    }

    static function getByType($schoolType)
    {
        // TODO: Implement getByType() method.
    }

    static function update($id)
    {
        // TODO: Implement update() method.
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }

    static function create($school)
    {
        // TODO: Implement create() method.
    }


}