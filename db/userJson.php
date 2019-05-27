<?php

class User implements userDao
{
    static function getAll()
    {
        return self::readJson()->users;
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
        if (file_exists(__DIR__."/creds.json") && is_readable(__DIR__."/creds.json")) {
            $user = file_get_contents(__DIR__."/creds.json");
            $userArray = json_decode($user);
            return $userArray;
        }
        return null;
    }

    static function writeJson($array)
    {
        if (file_exists(__DIR__."/creds.json") && is_writable(__DIR__."/creds.json")) {
            $bufferArray = self::readJson();
            $bufferArray->users[] = $array;
            file_put_contents(__DIR__."/creds.json", json_encode($bufferArray));
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