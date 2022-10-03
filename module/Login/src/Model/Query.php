<?php
    namespace Login\Model;

    class Query
    {
        public function getUserQuery($username, $password)
        {
            return "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        }

        public function getUserByRole($role) 
        {
            return "SELECT * FROM users WHERE role = '$role'";
        }
    }
?>