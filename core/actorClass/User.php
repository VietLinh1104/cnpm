<?php
    class User{
        protected $fullname;
        protected $email;
        protected $password;
        protected $username;
        protected $phone;
        protected $birth;

        //constructor
        public function __construct($fullname, $email, $password, $username, $phone, $birth){
            $this->fullname = $fullname;
            $this->email = $email;
            $this->password = $password;
            $this->username = $username;
            $this->phone = $phone;
            $this->birth = $birth;
        }

        //getters and setters

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

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getUsername(){
            return $this->username;
        }

        public function setUsername($username){
            $this->username = $username;
        }

        public function getPhone(){
            return $this->phone;
        }

        public function setPhone($phone){
            $this->phone = $phone;
        }   

        public function getBirth(){
            return $this->birth;
        }

        public function setBirth($birth){
            $this->birth = $birth;
        }

    

    }
?>