<?php
    class User{
        protected $user_id;
        protected $fullname;
        protected $email;
        protected $gender;

        //constructor
        public function __construct($fullname, $email, $gender){
            $this->user_id = uniqid();
            $this->fullname = $fullname;
            $this->email = $email;
            $this->gender = $gender;
        }

        //getters and setters
        public function getUser_id(){
            return $this->user_id;
        }

        public function getFullname(){
            return $this->fullname;
        }

        public function setFullname($fullname){
            $this->fullname = $fullname;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getGender(){
            return $this->gender;
        }

        public function setGender($gender){
            $this->gender = $gender;
        }
    }
?>