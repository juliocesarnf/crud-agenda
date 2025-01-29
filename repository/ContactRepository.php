<?php

require_once __DIR__ . '/../classes/Contact.php';

    interface ContactRepository  {

        public function listContacts(): array;

        public function addContact( Contact $contact );

        public function removeContact( int $id );

        public function alterContact( Contact $contact );

    }

?>