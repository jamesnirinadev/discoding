<?php

require_once('common.php');

/*************************************
 * ----- INIT DATABASE CONNECTION -----
 *************************************/

function init_db()
{
    try {

        $host = $_ENV['DISCODING_DB_HOST'] ?? 'localhost';
        //$host = $_ENV['DISCODING_DB_HOST'] ?? 'localhost/jameslatra-Discoding/';
        $dbname = $_ENV['DISCODING_DB_NAME'] ?? 'discoding2';
        $charset = $_ENV['DISCODING_DB_CHARSET'] ?? 'utf8';
        $user = $_ENV['DISCODING_DB_USER'] ?? 'discoding2';
        $password = $_ENV['DISCODING_DB_PASSWORD'] ?? 'discoding2';

        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset",
            $user,
            $password,
            []);

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $db;
}
