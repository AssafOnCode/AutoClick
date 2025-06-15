<?php

Class User {
    
    private $firstname;
    private $lastname;
    private $number;
    private $email;
    private $password;
    private $type;

public function __construct($firstname, $lastname, $number, $email, $password, $type) {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->number = $number;
    $this->email = $email;
    $this->password = $password;
    $this->type = $type;
}

// Getters and Setters firstname
public function getFirstname() {
    return $this->firstname;
}
public function setFirstname($firstname) {
    $this->firstname = $firstname;
}


// Getters and Setters lastname
public function getLastname() {
    return $this->lastname;
}
public function setLastname($lastname) {
    $this->lastname = $lastname;
}


// Getters and Setters number
public function getNumber() {
    return $this->number;
}
public function setNumber($number) {
    $this->number = $number;
}


// Getters and Setters email
public function getEmail() {
    return $this->email;
}
public function setEmail($email) {
    $this->email = $email;
}


// Getters and Setters password
public function getPassword() {
    return $this->password;
}
public function setPassword($password) {
    $this->password = $password;
}


// Getters and Setters type
public function getType() {
    return $this->type;
}
public function setType($type) {
    $this->type = $type;
}


}




?>