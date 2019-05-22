<?php

class School implements schoolDao
{
    static function getAll()
    {
        if (is_array(School::readJson()->schools)) {
            return School::readJson()->schools;
        }
        return null;
    }

    static function getById($id)
    {
        if (is_array(School::readJson()->schools)) {
            foreach (School::readJson()->schools as $school) {
                if ($school->id == $id) {
                    return $school;
                }
            }
        }
        return null;
    }

    static function getByName($name)
    {
        if ($name == "") {
            return School::getAll();
        } else {
            $schools = [];
            foreach (School::readJson()->schools as $school) {
                if (stripos($school->name, $name) !== false) {
                    array_push($schools, $school);
                }
            }
            return $schools;
        }
    }

    static function getByDistrict($district)
    {
        $schools = [];
        foreach (School::readJson()->schools as $school) {
            if ($school->address->district == $district) {
                array_push($schools, $school);
            }
        }
        return $schools;
    }

    static function getByType($schoolTyp)
    {
        $schools = [];
        foreach (School::readJson()->schools as $school) {
            if ($school->schoolTyp == $schoolTyp) {
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

    static function readJson()
    {
        if (file_exists("database.json") && is_readable("database.json")) {
            $schools = file_get_contents("database.json");
            $schoolsArray = json_decode($schools);
            return $schoolsArray;
        }
        return null;
    }

    static function writeJson($array)
    {
        $newData = self::readJson();
        $newData->schools[] = $array;
        file_put_contents('../database.json', json_encode($newData, JSON_PRETTY_PRINT));
    }
}