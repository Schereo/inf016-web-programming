<?php

interface userDao
{
    //Register new User
    static function register($user);

    //Get UserPassword
    public function getPassword($email);

    //Update user Credentials
    static function update($user);

    //Delete User
    static function delete($id);

    //Get corresponding ID of a User
    public function getUserId($email);
}