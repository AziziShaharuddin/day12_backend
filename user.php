<?php

class User {
 
    //properties
    public $name;
    public $dob;
    public $hobby;

 function __construct( $name, $dob, $hobby) {
     $this->name = $name;
     $this->age = $dob;
     $this->hobby = $hobby;
 }

 function getName() {
     return $this->name;
 }

 function age() {
     $age = 2021 - $this->age;
     return $age;
 }

 function hobby() {
     return $this->hobby;
 }
}