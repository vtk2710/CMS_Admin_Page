<?php
    namespace Login\Utilities;
    use mysqli;
    class DBUtils
    {
        public static function connectDB()
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "smartradio";
            $conn = new mysqli($servername, $username, $password, $dbname);
            return $conn;
        }
    }
?>