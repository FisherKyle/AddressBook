<?php

// -----:: class Object : contact ::------------------------------------------->
    class Contact {

        private $contact_phone;
        private $contact_name;
        private $contact_email;

// -----:: Object : constructor ::--------------------------------------------->

        function __construct($phone, $name, $email) {

            $this->contact_phone = $phone;
            $this->contact_name = $name;
            $this->contact_email = $email;

        }

// G E T // S E T //

        function setContactName($name) {
          $this->$contact_name = (string) $name;
        }

        function setContactPhone($phone) {
          $this->$contact_phone = (string) $phone;
        }

        function getContactPhone() {
          return $this->$contact_phone;
        }

        function getContactName() {
          return $this->$contact_name;
        }

        function getContactEmail() {
          return $this->$contact_email;
        }

        function setContactEmail($email) {
          $this->$contact_email = (string) $email;
        }

        // function newContact(
        //   $this->"$contact_email"
        // )

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
