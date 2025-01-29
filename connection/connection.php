<?php

function getConnection() {

    $host = 'localhost:3306';
    $dbname= 'agenda_contatos';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO( "mysql:host=$host;dbname=$dbname", $user, $password );
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $pdo;
    } catch ( PDOException $e ) {
        echo 'Erro: ' . $e->getMessage();
        return null;
    }

}

?>
