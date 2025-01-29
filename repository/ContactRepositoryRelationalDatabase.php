<?php

require_once 'ContactRepository.php';
require_once __DIR__ . '/../classes/Contact.php';

class ContactRepositoryRelationalDatabase implements ContactRepository {

    private $pdo;

    public function __construct( PDO $pdo ) {
        $this->pdo = $pdo;
    }

    public function listContacts(): array {
        $ps = $this->pdo->prepare( 'SELECT id, nome AS name, telefone as phone, email FROM contato' );
        $ps->setFetchMode(
            PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            'Contact'
        );
        $ps->execute();
        return $ps->fetchAll();
    }

    public function addContact( Contact $contact ) {
        $ps = $this->pdo->prepare( 'INSERT INTO contato( nome, telefone, email ) VALUES( :name, :phone, :email ) ');
        $ps->execute( [ 'name' => $contact->name, 'phone' => $contact->phone, 'email' => $contact->email ] );
        return $ps->rowCount() > 0;
    }

    public function removeContact( int $id ) {
        $ps = $this->pdo->prepare( 'DELETE FROM contato WHERE id = ?');
        $ps->execute( [ $id ] );
        return $ps->rowCount() > 0;
    }

    public function alterContact( Contact $contact ) {
        $ps = $this->pdo->prepare( 'UPDATE contato SET nome = :name, telefone = :phone, email = :email WHERE id = :id ');
        $ps->execute( [ 'name' => $contact->name, 'phone' => $contact->phone, 'email' => $contact->email, 'id' => $contact->id ]);
        return $ps->rowCount() > 0;
    }

} 

?>