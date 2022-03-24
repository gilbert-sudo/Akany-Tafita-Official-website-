<?php
class Database{
    private static $instance = null;
    public static function getPdo():PDO{
            if(self::$instance === null)
            {
                self::$instance = new PDO('mysql:host = 127.0.01;dbname=akany;charset=utf8','root','',[[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]]);
            }
          }    
    }
}
?>