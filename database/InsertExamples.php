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
    $insert->newUser("Anonym", "test1234", "Anonym", "");
    $insert->newUser("tim.sigl@uol.de", "test1234", "Tim", "Sigl");
    $insert->newUser("jens.schulte@uol.de", "test1234", "Jens", "Schulte");
    $insert->newUser("nelly.klassen@uol.de", "test1234", "Nelly", "Klassen");
    $insert->newUser("cedric.schomaker@uol.de", "test1234", "Cedric", "Schomaker");
    $school = [
        "creator" => 1,
        "name" => "Helene-Lange-Schule",
        "schoolType" => "Integrierte Gesamtschule",
        "description" => "Die Helene-Lange-Schule ist als nahe der Innenstadt gelegene Integrierte Gesamtschule mit gymnasialer Oberstufe eine Schule für alle Kinder und Jugendliche. Wir verstehen uns als Schule mit besonderem päagogischem Engagement, die gleichzeitig Wert auf eine hohe fachliche Qualität legt. Eigenverantwortliches Lernen und Teamfähigkeit sind für uns Grundlage einer umfassenden Persönlichkeitsentwicklung.",
        "principal" => "Claudia Steffen",
        "phoneNumber" => "04419501611",
        "mail" => "info@hls-ol.de",
        "homepageURL" => "https://www.hls-ol.de",
        "numberOfStudents" => 1000,
        'address' => [
            "street" => "Marschweg",
            "number" => 38,
            "district" => "Eversten",
            "zip_code" => 26122,
            "city" => "Oldenburg"
        ]];
    $insert->newSchool($school, 1);
    $insert->newRating(2,3, 1,4, 1, 1);
    $insert->newRating(3,2, 4,4, 2, 1);
    $insert->newRating(4,5, 5,4, 3, 1);
    $insert->newRating(1,1, 0,4, 4, 1);
    $insert->newImage("hls1", 10000, "image/jpg", file_get_contents('../assets/images/hls1.jpg'), 1);
    $insert->newImage("hls2", 10000, "image/jpg", file_get_contents('../assets/images/hls2.jpg'), 1);
    $insert->newImage("hls3", 10000, "image/jpg", file_get_contents('../assets/images/hls3.jpg'), 1);
    $insert->newImage("hls4", 10000, "image/jpg", file_get_contents('../assets/images/hls4.jpg'), 1);
    $school = [
        "creator" => 2,
        "name" => "Cäcilienschule",
        "schoolType" => "Gymnasium",
        "description" => "„Cäcilienschule Oldenburg (genannt: ,Cäci‘), Gymnasium, gegründet 1867 Öffentliches Gymnasium für Jungen und Mädchen, Lage: Innenstadt",
        "principal" => "Franz Held",
        "phoneNumber" => " 04417779974",
        "mail" => "sekretariat@caeci.de",
        "homepageURL" => "https://www.caeci.de/",
        "numberOfStudents" => 970,
        'address' => [
            "street" => "Haarenufer",
            "number" => 11,
            "district" => "Innenstadt",
            "zip_code" => 26122,
            "city" => "Oldenburg"
        ]];
    $insert->newSchool($school, 2);
    $insert->newRating(1,3, 1,4, 2, 2);
    $insert->newRating(1,3, 4,4, 6, 2);
    $insert->newRating(1,5, 5,4, 5, 2);
    $insert->newRating(1,1, 0,4, 4, 2);
    $insert->newImage("cäci1", 10000, "image/jpg", file_get_contents('../assets/images/caeci1.jpg'), 2);
    $insert->newImage("cäci2", 10000, "image/jpg", file_get_contents('../assets/images/caeci2.jpg'), 2);
    $insert->newImage("cäci3", 10000, "image/jpg", file_get_contents('../assets/images/caeci3.jpg'), 2);
    $school = [
        "creator" => 2,
        "name" => "Graf-Anton-Günther-Schule",
        "schoolType" => "Gymnasium",
        "description" => "Die Graf-Anton-Günther-Schule wird zur Zeit von circa 1.300 Schülerinnen und Schülern besucht, in den Klassen 5-10 vorwiegend aus den Landkreisgemeinden Hatten, Hude und Wardenburg. Sie ist Mitglied der Oldenburger Sek.II-Kooperation, aber auch in anderen Netzwerken aktiv (unter anderem Europaschule, MINT-EC-Schule, Referenzschule Filmbildung, sportfreundliche Schule). Da wir für alle unsere Schüler einen Abschluss wollen, heißt GAG täglich für uns: Gemeinsam Alternativen Gestalten.",
        "principal" => "Wolfgang Schoedel",
        "phoneNumber" => " 0441 218520",
        "mail" => "Verwaltung@gymnasium-gag.de",
        "homepageURL" => "https://gymnasium-gag.de/",
        "numberOfStudents" => 1140,
        'address' => [
            "street" => "Schleusenstraße",
            "number" => 4,
            "district" => "Innenstadt",
            "zip_code" => 26135,
            "city" => "Oldenburg"
        ]];
    $insert->newSchool($school, 3);
    $insert->newRating(1,3, 1,3, 3, 3);
    $insert->newRating(1,3, 4,4, 5, 3);
    $insert->newRating(1,5, 3,2, 2, 3);
    $insert->newRating(1,1, 5,1, 1, 3);
    $insert->newImage("gag1", 10000, "image/jpg", file_get_contents('../assets/images/gag1.jpg'), 3);
    $insert->newImage("gag2", 10000, "image/jpg", file_get_contents('../assets/images/gag2.jpg'), 3);
    $insert->newImage("gag3", 10000, "image/jpg", file_get_contents('../assets/images/gag3.jpg'), 3);
    $school = [
        "creator" => 2,
        "name" => "Gymnasium Eversten",
        "schoolType" => "Gymnasium",
        "description" => "Das GEO ist ein verlässliches Ganztagsgymnasium (offene Form) mit einem umfassenden Nachmittagsangebot, aus dem die Schülerinnen und Schüler die für sie geeignete Arbeitsgemeinschaft auswählen können. Hierzu zählen insbesondere Musik, Sport, Informatik und Theater, aber auch vielfältige weitere Möglichkeiten den individuellen Neigungen nachzugehen. Selbst- und Mitbestimmung sowie die Übernahme von Verantwortung sind pädagogische Leitgedanken.",
        "principal" => "Andreas Jacob",
        "phoneNumber" => "0441 5050270",
        "mail" => "sekretariat@gymnasium-eversten.de",
        "homepageURL" => "https://gymnasium-eversten.de/",
        "numberOfStudents" => 895,
        'address' => [
            "street" => "Theodor-Heuss-Straße",
            "number" => 7,
            "district" => "Eversten",
            "zip_code" => 26129,
            "city" => "Oldenburg"
        ]];
    $insert->newSchool($school, 5);
    $insert->newRating(2,3, 1,3, 3, 4);
    $insert->newRating(1,3, 4,4, 5, 4);
    $insert->newRating(4,1, 2,5, 2, 4);
    $insert->newRating(2,1, 5,1, 1, 4);
    $insert->newImage("geo1", 10000, "image/jpg", file_get_contents('../assets/images/geo1.jpg'), 4);
    $insert->newImage("geo2", 10000, "image/jpg", file_get_contents('../assets/images/geo2.jpg'), 4);
    $insert->newImage("geo3", 10000, "image/jpg", file_get_contents('../assets/images/geo3.jpg'), 4);
    $school = [
        "creator" => 6,
        "name" => "Herbartgymnasium",
        "schoolType" => "Gymnasium",
        "description" => "Das Herbartgymnasium, 1844 gegründet, liegt zentral in der Stadt und ist von überall gut mit Fahrrad oder Bus zu erreichen. Das HGO vereint Tradition und Modernität, bietet einen zeitgemäßen sprachlichen und naturwissenschaftlichen Unterricht und ergänzt musisch-künstlerische Unterrichtsangebote durch eine Vielzahl von Arbeitsgemeinschaften. Nehmen Sie Kontakt zu uns auf. Sie sind herzlich willkommen!",
        "principal" => "Günter Tillmann",
        "phoneNumber" => "0441 408360",
        "mail" => "sekretariat@herbartgymnasium.de",
        "homepageURL" => "http://www.herbartgymnasium.de/",
        "numberOfStudents" => 870,
        'address' => [
            "street" => "Herbartstraße",
            "number" => 4,
            "district" => "Innenstadt",
            "zip_code" => 26122,
            "city" => "Oldenburg"
        ]];
    $insert->newSchool($school, 6);
    $insert->newRating(2,3, 3,3, 1, 5);
    $insert->newRating(1,3, 4,4, 4, 5);
    $insert->newRating(4,2, 2,2, 6, 5);
    $insert->newRating(2,1, 0,1, 1, 5);
    $insert->newImage("hgo1", 10000, "image/jpg", file_get_contents('../assets/images/hgo1.jpg'), 5);
    $insert->newImage("hgo2", 10000, "image/jpg", file_get_contents('../assets/images/hgo2.jpg'), 5);
    $insert->newImage("hgo3", 10000, "image/jpg", file_get_contents('../assets/images/hgo3.jpg'), 5);
    $school = [
        "creator" => 5,
        "name" => "Liebfrauenschule",
        "schoolType" => "Gymnasium",
        "description" => "Leitgedanke der Schule: Begabung entfalten, Christsein leben, Zukunft gestalten; circa 60 Angebote zum Fordern und Fördern im Rahmen außerunterrichtlicher Aktivitäten (Bereiche Musik, Kunst, Sport, Naturwissenschaften, Schulpastoral, Sprachen, ausländische Partnerschulen, soziales Lernen, Praktika, Berufsberatung, Klassentage in 5 und 6, spezielle Beratungskonzepte etc.), Klassenfahrten",
        "principal" => "Norbert Steinkamp",
        "phoneNumber" => "0441 219860",
        "mail" => "sekretariat@liebfrauenschule.de",
        "homepageURL" => "http://www.liebfrauenschule.de/start/",
        "numberOfStudents" => 755,
        'address' => [
            "street" => "Auguststraße",
            "number" => 31,
            "district" => "Ziegelhofviertel",
            "zip_code" => 26121,
            "city" => "Oldenburg"
        ]];
    $insert->newSchool($school, 3);
    $insert->newRating(1,3, 3,3, 1, 6);
    $insert->newRating(5,3, 4,3, 4, 6);
    $insert->newRating(4,2, 2,2, 6, 6);
    $insert->newRating(2,1, 2,1, 1, 6);
    $insert->newImage("lfs1", 10000, "image/jpg", file_get_contents('../assets/images/lfs1.jpg'), 6);
    $insert->newImage("lfs2", 10000, "image/jpg", file_get_contents('../assets/images/lfs2.jpg'), 6);
    $insert->newImage("lfs3", 10000, "image/jpg", file_get_contents('../assets/images/lfs3.jpg'), 6);
    $school = [
        "creator" => 5,
        "name" => "Freie Waldorfschule Oldenburg",
        "schoolType" => "Integrierte Gesamtschule",
        "description" => "Die Freie Waldorfschule Oldenburg in Osternburg ist die erste Schule der ehemaligen Residenzstadt des Großherzogtums Oldenburg und heutigen niedersächsischen Universitätsstadt Oldenburg, die nicht in kirchlicher oder öffentlicher Trägerschaft geführt wird.",
        "principal" => "Leitungsteam",
        "phoneNumber" => "0441 3616180",
        "mail" => "info@fws-oldenburg.de",
        "homepageURL" => "http://waldorf-oldenburg.de/",
        "numberOfStudents" => 480,
        'address' => [
            "street" => "Blumenhof",
            "number" => 9,
            "district" => "Osternburng",
            "zip_code" => 26135,
            "city" => "Oldenburg"
        ]];
    $insert->newSchool($school, 1);
    $insert->newRating(2,3, 3,3, 1, 7);
    $insert->newRating(5,3, 5,3, 2, 7);
    $insert->newRating(4,2, 2,2, 6, 7);
    $insert->newRating(2,3, 2,1, 1, 7);
    $insert->newImage("waldorf1", 10000, "image/jpg", file_get_contents('../assets/images/waldorf1.jpg'), 7);
    $insert->newImage("waldorf2", 10000, "image/jpg", file_get_contents('../assets/images/waldorf2.jpg'), 7);
    $insert->newImage("waldorf3", 10000, "image/jpg", file_get_contents('../assets/images/waldorf3.jpg'), 7);
}

insertData();