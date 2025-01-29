<?php

require_once '../../repository/ContactRepositoryRelationalDatabase.php';
require_once '../../connection/Connection.php';
require_once '../../classes/Contact.php';

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    if ( isset( $_POST[ 'name' ] ) && isset( $_POST[ 'phone' ] ) && isset( $_POST[ 'email' ] ) ) {
        $name = htmlspecialchars(trim( $_POST[ 'name' ] ), ENT_QUOTES, 'UTF-8');
        $phone = htmlspecialchars(trim( $_POST[ 'phone']  ), ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars(trim( $_POST[ 'email' ] ), ENT_QUOTES, 'UTF-8');
        $problems = [];
        if( ! validateName( $name ) ) $problems[] = "Nome inválido.";
        if( ! validatePhone( $phone ) ) $problems[] = "Telefone inválido.";
        if( ! validateEmail( $email ) ) $problems[] = "Email inválido.";
        if( empty( $problems ) ) {
            try {
                $pdo = getConnection();
                $repo = new ContactRepositoryRelationalDatabase( $pdo );
                $contact = new Contact( $name, $phone, $email );
                $added = $repo->addContact( $contact );
                if( ! $added ) {
                    http_response_code( 500 );
                    echo "<script>alert('Erro interno ao adicionar o contato.'); history.back();</script>";
                    exit;
                } else {
                    http_response_code( 201 );
                    echo '<script>window.location.href = "../index.php";</script>';
                    exit();
                }
            } catch ( PDOException $e ) {
                http_response_code( 500 );
                echo "<script>alert('Erro no servidor ou na conexão.'); history.back();</script>";
            }
        } else {
            http_response_code( 400 );
            echo "<script>alert('" . implode("\\n", $problems) . "'); history.back();</script>";
            exit;
        }
    } else {
        http_response_code( 400 );
        echo "<script>alert('Está faltando dados'); history.back();</script>";
        exit;
    }
} else {
    echo "<script>alert('Acesso inválido'); history.back();</script>";
    exit;
}

function validateName( string $name ) {
    if( preg_match( "/^[a-zA-ZÀ-ÿ\s]{2,50}$/", $name ) ) {
        return true;
    } else {
        return false;
    }
}

function validatePhone( string $phone ) {
    $standards = [
        '/^\(\d{2}\) 9\d{4}-\d{4}$/',  // (11) 91234-5678
        '/^\(\d{2}\) \d{4}-\d{4}$/',    // (11) 1234-5678
        '/^\(\d{2}\)9\d{4}-\d{4}$/',    // (11)91234-5678
        '/^\(\d{2}\)\d{4}-\d{4}$/',     // (11)1234-5678
        '/^\d{2}9\d{8}$/',              // 11912345678
        '/^\d{2}\d{8}$/',               // 1187654321
        '/^\d{2} \d{8}$/',               // 11 12345678
        '/^\d{2} 9\d{8}$/',             // 11 912345678
        '/^\d{2} 9\d{4}-\d{4}$/',       // 11 91234-5678
        '/^\d{2} \d{4}-\d{4}$/',        // 11 1234-5678
        '/^\d{8}$/',                    // 12345678
        '/^9\d{8}$/'                     // 912345678
    ];
    foreach ( $standards as $s ) {
        if ( preg_match( $s, $phone ) ) {
            return true;
        }
    }
    return false;
}

function validateEmail( string $email ) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

?>