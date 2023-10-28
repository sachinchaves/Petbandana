<?php
    class dataModel {

        var $id;
        var $firstName;
        var $lastName;
        var $instaUsername;
        var $email;

        public function __construct($id, $firstName, $lastName, $instaUsername, $email){
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->instaUsername = $instaUsername;
            $this->email = $email;
        }
    }    
?>