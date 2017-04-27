<?php
    class Db{
        private static $conn = NULL;

        public static function getInstance(){
            if(isset(self::$conn)){
                //connectie bestaad al, geef die terug
                return self::$conn;
            }else{
                //er is nog geen connectie, maak ze aan
                self::$conn = new PDO("mysql:host=localhost;dbname=phpopdracht", "root", "");
                return self::$conn;
            }
        }
    }
?>