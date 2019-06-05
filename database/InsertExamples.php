<?php
/**
 * Created by PhpStorm.
 * User: timsi
 * Date: 01.06.2019
 * Time: 16:13
 */

require_once "DatabaseConnector.php";
require_once "Insert.php";

function insertData()
{

        $insert = new Insert((new DatabaseConnector())->connect());
        $insert->newUser("admin@support.com", "test1234", "Admin", "Web");

        $school = [
            "creator" => 1,
            "name" => "Helene-Lange-Schule 4",
            "schoolType" => "Integrierte Gesamtschule",
            "description" => "Die Helene-Lange-Schule ist als nahe der Innenstadt gelegene Integrierte Gesamtschule mit gymnasialer Oberstufe eine Schule f\u00fcr alle Kinder und Jugendliche. Wir verstehen uns als Schule mit besonderem p\u00e4dagogischem Engagement, die gleichzeitig Wert auf eine hohe fachliche Qualit\u00e4t legt. Eigenverantwortliches Lernen und Teamf\u00e4higkeit sind f\u00fcr uns Grundlage einer umfassenden Pers\u00f6nlichkeitsentwicklung.",
            "principal" => "Claudia Steffen",
            "phoneNumber" => null,
            "mail" => "info@hls-ol.de",
            "homepageURL" => "https://www.hls-ol.de",
            'address' => [
                "street" => "Marschweg",
                "number" => 38,
                "district" => "Eversten",
        ]];
        $insert->newSchool($school, 1);
        $insert->newRating("CanteenRating", 3, 1, 1);
        $insert->newRating("LearnEnvironmentRating", 4, 1,1);
        //$insert->newImage("hls4", 10000, "image/jpg;base64", base64_encode(file_get_contents('../assets/images/hls2.jpg')), 5);

}

insertData();