<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Usuário</title>
</head>

<body>
    <?php
    $sql = "select * from cliente where idCliente=" . $_REQUEST["idCliente"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>
    <form action="?page=salvar" method="POST">
        <!-- Manda as informações para a página salvar -->
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="idCliente" value="<?php print $row->idCliente ?>">

        <h1>Realizar Cadastro</h1>

        <div class="input-group">
            <div class="input-item">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php print $row->Nome?>">
            </div>
            <div class="input-item">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php print $row->Email?>">
            </div>
            <div class="input-item">
                <label for="datanas">Data Nascimento</label>
                <input type="date" name="datanas" id="datanas" value="<?php print $row->DataNasc?>">
            </div>
            <div class="input-item">
                <label for="tel">Telefone</label>
                <input type="text" name="tel" id="tel" value="<?php print $row->Telefone?>">
            </div>
            <div class="input-item">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                <div id="icon" onclick="showPass()"></div>
            </div>
        </div>

        <div class="btn">
            <button type="submit">ENVIAR</button>
        </div>
    </form>
</body>

</html>