<?php

require_once '../repository/ContactRepositoryRelationalDatabase.php';
require_once '../classes/Contact.php';
require_once '../connection/Connection.php';

$pdo = getConnection();
$contacts = [];
$repo = new ContactRepositoryRelationalDatabase( $pdo );

function drawLines( $repo ) {
    $contacts = $repo->listContacts();
    usort($contacts, function ( $a, $b ) {
        return strcmp( $a->name, $b->name );
    });
    foreach( $contacts as $c ) {
        $contactJson = htmlspecialchars( json_encode($c), ENT_QUOTES, 'UTF-8' );
        $line = <<<HTML
            <tr class="table-body-line">
                <td class="table-body-line-cell">$c->name</td>
                <td class="table-body-line-cell">$c->phone</td>
                <td class="table-body-line-cell lastCell">
                    <p class="table-body-line-cell-email">$c->email</p>
                    <div class="table-body-line-cell-icons">
                        <i class="table-body-line-cell-icons-alter" title="Alterar" onclick="alterContact({$contactJson})" >✏️</i>
                        <i class="table-body-line-cell-icons-remove" title="Deletar" onclick="removeContact({$contactJson})">❌</i>
                    </div>
                </td>
            </tr>
        HTML;
        echo $line, PHP_EOL;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header id="header">
        <h1 id="header-title">Agenda de Contatos</h1>
        <div id="title-search">
            <label for="search" id="title-search-label">Buscar Contato:</label>
            <input type="text" id="title-search-input" name="search" placeholder="Pesquise por contatos...">
        </div>
        <a id="header-add" href="form-registration.php">+</a>
    </header>
    <table id="table">
        <thead id="table-head">
            <tr id="table-head-line">
                <th class="table-head-line-cell">Nome</th>
                <th class="table-head-line-cell">Telefone</th>
                <th class="table-head-line-cell">Email</th>
            </tr>
        </thead>
        <tbody id="table-body">
            <?php
                drawLines( $repo );
            ?>
        </tbody>
    </table>
    <script src="scripts/script.js"></script>
</body>
</html>

