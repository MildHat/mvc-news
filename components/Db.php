<?php

class Db
{
    public static function getDbConnect()
    {
        try {
            # MySQL через PDO_MYSQL
            $DBH = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PSWD);
            $DBH->exec("set names utf8");
            return $DBH;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}