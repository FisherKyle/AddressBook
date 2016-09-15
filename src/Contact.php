<?php

// -----:: class Object : contact ::------------------------------------------->
    class Contact {

        private $phone;
        private $name;
        private $email;

// -----:: Object : constructor ::--------------------------------------------->

        function __construct($phone, $name, $email) {

            $this->contact_phone = $phone;
            $this->contact_name = $name;
            $this->contact_email = $email;

        }

        function getContactPhone() {
          return $this->$contact_phone;
        }

        function setContactPhone() {
          $this->$contact_phone = (string) $phone;
        }

        function getContactName() {
          return $this->$contact_name;
        }

        function setContactName() {
          $this->$contact_name = (string) $name;
        }

        function getContactEmail() {
          return $this->$contact_email;
        }

        function setContactEmail() {
          $this->$contact_email = (string) $email;
        }

        function save() {
            array_push($_SESSION["list_of_contacts"], $this);
        }

        static function getAll()
        {
            return $_SESSION["list_of_contacts"];
        }

        static function deleteAll()
        {
            $_SESSION["list_of_contacts"] = array();
        }

    }

?>
