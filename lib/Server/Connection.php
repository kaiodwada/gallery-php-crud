<?php

namespace Lib\Server;

abstract class Connection
{
    private static $conn;

    public static function connDb()
    {
        try {
            if(!self::$conn){
                self::$conn = new \PDO('mysql:host=localhost; dbname=galeriadb;', 'kaio', 'rCMj!GXSVxiFpassNFTM159');
            }
            return self::$conn;
        } catch (\Exception $e) {
            $e->getMessage();
        }
        
    }
}