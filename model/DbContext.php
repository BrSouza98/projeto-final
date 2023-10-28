<?php

abstract class DbContext
{

    public static function DbConnect() : mysqli
    {
        $host = "127.0.0.1";
        $port = 3306;
        $socket = "";
        $user = "root";
        $password = "1234";
        $dbname = "audiovisual";

        try{
            return new mysqli($host, $user, $password, $dbname, $port, $socket);
        } catch(Exception){
            return mysqli_connect_error();
        }
        
    }
}
