<?php

class User {
    private $id;
    private $username;
    private $email;
    private $password;
    
    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    public function save() {
        // código para salvar o usuário no banco de dados
    }
    
}
