<?php
    class Person{
        private $name;
        private $email;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created';
        }

        public function __destruct(){
            
            echo __CLASS__.' destroyed<br>';
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }
    }

    $person1 = new Person('John Doe', 'jdoe@gmail.com');

    //$person1->setName('John Doe');

    // echo $person1->getName();
    // $person1->name = 'John Doe';
    // echo $person1->name;

    class Customers extends Person{ 
        private $balance;

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance;
        }
    }