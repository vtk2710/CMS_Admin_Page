<?php
namespace Login\Entity;

class Users {
    private $id;
    private $username;
    private $password;
    private $role;
    private $email;
    private $create_date;
    private $status;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getUsername() {
        return $this->username;
    }
    public function setUsername($username) {
        $this->username = $username;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getRole() {
        return $this->role;
    }
    public function setRole($role) {
        $this->role = $role;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getCreated() {
        return $this->created;
    }
    public function setCreated($created) {
        $this->created = $created;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }

    
    public function Users($username, $password) {
        $this -> $username = $username;
        $this -> $password = $password;
    }
}
?>