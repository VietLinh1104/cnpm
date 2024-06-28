<?php
class Users {
    protected $user_id;
    protected $fullname;
    protected $email;
    protected $gender;

    // Constructor
    public function __construct($fullname, $email, $gender) {
        $this->user_id = uniqid();
        $this->fullname = $fullname;
        $this->email = $email;
        $this->gender = $gender;
    }

    // Getters and setters
    public function getUser_id() {
        return $this->user_id;
    }

    public function getFullname() {
        return $this->fullname;
    }

    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }
}

?>
