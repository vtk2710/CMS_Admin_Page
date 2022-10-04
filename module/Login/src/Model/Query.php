<?php
    namespace Login\Model;

    class Query
    {
        public function getLoginUser($username, $password)
        {
            return "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        }

        public function getUserByID($id) 
        {
            return "SELECT * FROM users WHERE role = '$id'";
        }
    }
?>