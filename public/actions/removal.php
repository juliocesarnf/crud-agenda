<?php

require_once '../repository/ContactRepositoryRelationalDatabase.php';
require_once '../connection/Connection.php';


try {
    $pdo = getConnection();
    $repo = new ContactRepositoryRelationalDatabase( $pdo );
    if ( isset( $_GET[ 'id' ] ) ) {
        $removal = $repo->removeContact( $_GET[ 'id' ] );
        if ( ! $removal ) {
            http_response_code( 404 );
            die( 'Contato não encontrado para remoção.' );
        } else {
            http_response_code( 204 );
            header( 'Location: index.php' );
            die();
        }
    } else {
        http_response_code( 400 );
        die( 'Informe o id da cidade.' );
    }
} catch ( PDOException $e ) {
    http_response_code( 500 );
    die( 'Erro no servidor ou conexão.' );
}

?>


