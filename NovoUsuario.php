<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Novo Usuário</title>
</head>
<body>
    <form action="?page=salvar" method="POST">
        <!-- Manda as informações para a página salvar -->
        <input type="hidden" name="acao" value="cadastrar">

        <h1>Realizar Cadastro</h1>

        <div class="input-group">
            <div class="input-item">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="input-item">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Digite seu email" required>
            </div>
            <div class="input-item">
                <label for="datanas">Data Nascimento</label>
                <input type="date" name="datanas" id="datanas" required>
            </div>
            <div class="input-item">
                <label for="tel">Telefone</label>
                <input type="text" name="tel" id="tel" placeholder="Digite seu telefone" required>
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

    <script>
    /*Mudar Navbar */
    const home = document.getElementById('home')
    const cadastrar = document.getElementById('cadastrar')

    cadastrar.classList.add('active')
    home.classList.remove('active')
    </script>
</body>
</html>