<?php

class User implements userDao
{
    static function getAll()
    {
        return self::readJson()->users;
    }

    static function getUserByMail()
    {
        foreach (self::readJson()->users as $user) {
            if ($_SESSION['userName'] == $user->mail) {
                return $user;
            }
        }
        return null;
    }

    static function createUser($vn, $nn, $mail, $pw)
    {
        return array('vorname' => $vn, 'nachname' => $nn, 'mail' => $mail, 'password' => $pw, 'userID' => count(self::readJson()->users) + 1);
    }

    static function update($id)
    {
        // TODO: Implement update() method.
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }

    static function register($newUser)
    {
        self::writeJson($newUser);
    }

    static function readJson()
    {
        if (file_exists("creds.json") && is_readable("creds.json")) {
            $user = file_get_contents("creds.json");
            $userArray = json_decode($user);
            return $userArray;
        }
        return null;
    }

    static function writeJson($array)
    {
        if (file_exists("creds.json") && is_writable("creds.json")) {
            $bufferArray = self::readJson();
            $bufferArray->users[] = $array;
            file_put_contents("creds.json", json_encode($bufferArray));
        }
    }

    static function getByMail($mail)
    {
        foreach (User::readJson()->users as $user) {
            if ($user->mail == $mail) {
                return $user->mail;
                break;
            }
        }
        return null;
    }

    static function getPassword($mail)
    {
        foreach (User::readJson()->users as $user) {
            if ($user->mail == $mail) {
                return $user->password;
                break;
            }
        }
        return null;
    }
}