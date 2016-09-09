<?php

    class Contact {

        private $first_name;
        private $last_name;
        private $phone_number;
        private $address;
        private $city;
        private $state;
        private $zip;

        function __construct($contact_first_name, $contact_last_name, $contact_phone_number, $contact_address, $contact_city, $contact_state, $contact_zip) {
            $this->first_name = (string) $contact_first_name;
            $this->last_name = (string) $contact_last_name;
            $this->phone_number = (string) $contact_phone_number;
            $this->address = (string) $contact_address;
            $this->city = (string) $contact_city;
            $this->state = (string) $contact_state;
            $this->zip = (string) $contact_zip;
        }

        function setFirstName($contact_first_name) {
            $this->first_name = $contact_first_name;
        }

        function getFirstName() {
            return $this->first_name;
        }

        function setLastName($contact_last_name) {
            $this->last_name = $contact_last_name;
        }

        function getLastName() {
            return $this->last_name;
        }

        function setPhoneNumber($contact_phone_number) {
            $this->phone_number = $contact_phone_number;
        }

        function getPhoneNumber() {
            return $this->phone_number;
        }

        function setAddress($contact_address) {
            $this->address = $contact_address;
        }

        function getAddress() {
            return $this->address;
        }

        function setCity($contact_city) {
            $this->city = $contact_city;
        }

        function getCity() {
            return $this->city;
        }

        function setState($contact_state) {
            $this->state = $contact_state;
        }

        function getState() {
            return $this->$state;
        }

        function setZip($contact_zip) {
            $this->zip = $contact_zip;
        }

        function getZip() {
            return $this->zip;
        }

    }

?>
