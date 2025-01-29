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
    <form id="form" action="actions/registration.php" method="POST">
        <h1 id="form-title">Cadastro de Contato</h1>
        <input type="text" placeholder="Nome" id="form-name" name="name" required>
        <input type="text" placeholder="Telefone(apenas número)" id="form-phone" name="phone" required>
        <input type="email" placeholder="Email" id="form-email" name="email" required>
        <div id="form-buttons">
            <button id="form-buttons-cancel">Cancelar</button>
            <button type="submit" id="form-buttons-add">Adicionar</button>
        </div>
    </form>
</body>
</html>