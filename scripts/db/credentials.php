<?php
    namespace App;
    abstract class credentials{
        use system;
        private $host = "localhost";
        private $dbname = "campusland";
        protected $username = "root";
        private $password = "";

        // private $host = "172.16.49.20";
        // private $dbname = "campusland";
        // protected $username = "sputnik";
        // private $password = "Sp3tn1kC@";


        function __construct(){
           
        }
    }

?>