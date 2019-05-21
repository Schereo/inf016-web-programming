<?php
class School implements schoolDao {

    static function getAll()
    {
        return School::readJson()->schools;
    }

    static function getById($id)
    {
        foreach (School::readJson()["schools"] as $school) {
            if ($school["id"] == $id){
                return $school;
            }
        }
    }

    static function getByName($name)
    {
        if ($name == "") {
            return School::getAll();
        } else {
            $schools[] = [];
            foreach (School::readJson()->schools as $school) {
                if (stripos ($school->name, $name) == false){
                    array_push($schools, $school);
                }
            }
            return $schools;
        }
    }

    static function getByDistrict($district)
    {
        $schools[] = [];
        foreach (School::readJson()["schools"] as $school) {
            if ($school["address"]["district"] == $district){
                array_push($schools, $school);
            }
        }
        return $schools;
    }

    static function getByType($schoolType)
    {
        $schools[] = [];
        foreach (School::readJson()->school as $school) {
            if ($school["schoolType"] == $schoolType){
                array_push($schools, $school);
            }
        }
        return $schools;
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

    static function readJson() {
        if (file_exists("database.json") && is_readable("database.json")) {
            $schools = file_get_contents("database.json");
            $schoolsArray = json_decode($schools);
            return $schoolsArray;
        }
        return null;
    }

    // Funktioniert noch nicht.
    static function writeJson($array) {
        if (file_exists("database.json") && is_writable("database.json")) {
            $jsondata = json_encode(School::readJson(), JSON_PRETTY_PRINT);
            file_put_contents("database.json", $jsondata);
        }
    }


}