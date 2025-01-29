<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link rel="stylesheet" href="style/style-registration.css">
    <script src="scripts/verification.js" defer></script>
</head>
<body>
    <form action="actions/alteration.php" method="POST">
        <h1 id="form-title">Cadastro de Contato</h1>
        <input type="text" placeholder="Nome" name="name" id="form-name" 
        value="<?php echo isset( $_POST[ 'name' ] ) ? htmlspecialchars( $_POST[ 'name' ] ) : ''; ?>">
        <input type="text" placeholder="Telefone" name="phone" id="form-phone" 
        value="<?php echo isset( $_POST[ 'phone' ] ) ? htmlspecialchars( $_POST[ 'phone' ]) : ''; ?>">
        <input type="email" placeholder="Email" name="email" id="form-email" 
        value="<?php echo isset( $_POST[ 'email' ] ) ? htmlspecialchars( $_POST[ 'email' ] ) : ''; ?>">
        <input type="hidden" id="form-id" name="id" value="<?php echo isset( $_POST[ 'id' ] ) ? htmlspecialchars( $_POST[ 'id' ] ) : ''; ?>">
        <div id="form-buttons">
            <button id="form-buttons-cancel">Cancelar</button>
            <button type="submit" id="form-buttons-add">Salvar</button>
        </div>
    </form>
</body>
</html>