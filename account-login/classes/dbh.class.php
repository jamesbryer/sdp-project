<?php

class Dbh
{
    protected function connect()
    {
        // Connect to the MySQL database using PDO
        $host = 'localhost';
        $port = '8888';
        $dbname = 'routes';
        $username = 'root';
        $password = 'root';

        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $dbh = new PDO($dsn, $username, $password, $options);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
