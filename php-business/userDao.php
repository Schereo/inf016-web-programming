<?php

interface userDao
{
    //Register new User
    static function register($user);

    //Get all Users
    static function getAll();

    //Get user by Mail
    static function getByMail($mail);

    //Get UserPassword
    static function getPassword($user);

    //Update user Credentials
    static function update($user);

    //Delete User
    static function delete($id);
}