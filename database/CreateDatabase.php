<?php
require_once "DatabaseConnector.php";

function createDatabase() {
    $pdo = (new DatabaseConnector())->connect();
    $commandos = [
        '
        CREATE TABLE IF NOT EXISTS User(
          user_id INTEGER PRIMARY KEY AUTOINCREMENT,
          first_name VARCHAR(40) NOT NULL,
          last_name VARCHAR(40) NOT NULL,
          email TEXT NOT NULL UNIQUE,
          password VARCHAR(100) NOT NULL 
        );
        CREATE TABLE IF NOT EXISTS Rating(
          rating_id INTEGER PRIMARY KEY AUTOINCREMENT,
          rating_type VARCHAR(40) NOT NULL,
          date_of_creation INTEGER NOT NULL DEFAULT (strftime("now")),
          FOREIGN KEY (user_id) REFERENCES User(user_id) ON UPDATE CASCADE,
          FOREIGN KEY (school_id) REFERENCES School(school_id) ON DELETE CASCADE ON UPDATE CASCADE      
        );
        CREATE TABLE IF NOT EXISTS School(
          school_id INTEGER PRIMARY KEY AUTOINCREMENT,
          name VARCHAR(255) NOT NULL,
          school_type VARCHAR(40) NOT NULL,
          description VARCHAR(255),
          principal VARCHAR(100),
          phone_number VARCHAR(40),
          house_number INTEGER,
          zip_code INTEGER(4),
          disctrict VARCHAR(40) NOT NULL,
          city VARCHAR(40),
          street VARCHAR(100),
          email VARCHAR(40),
          students INTEGER,
          homeage_url VARCHAR(100),
          FOREIGN KEY (creator) REFERENCES User(user_id)                   
        );
        CREATE TABLE IF NOT EXISTS Image(
          image_id INTEGER PRIMARY KEY AUTOINCREMENT,
          name VARCHAR(100) NOT NULL,
          size INTEGER,
          mime VARCHAR(100) NOT NULL,
          data BLOB NOT NULL,
          FOREIGN KEY (school_id) REFERENCES School(school_id) ON DELETE CASCADE ON UPDATE CASCADE
        );

        '
    ];

    foreach ($commandos as $commando) {
        $pdo->exec($commando);
    }
}

createDatabase();