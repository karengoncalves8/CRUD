<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="style.css">
    <title>Página Inicial</title>
</head>
<body>
        <nav>
            <a href="Index.php" class="logo">CRUD</a>
            <div class="menu-btn">
                <i class="fa fa-bars fa-2x" onclick="menuShow()"> </i>
            </div>
            <ul>
                <li><a href="Index.php" class="active" id="home"> Home </a></li>
                <li><a href="?page=novo" id="cadastrar" onclick="active()"> Cadastrar </a></li>
                <li><a href="?page=listar" id="cadastros"> Cadastros </a></li>
            </ul>
        </nav>

        <main>
            <?php 
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        case 'novo':
                            include("NovoUsuario.php");
                        break;
                        case 'listar':
                            include("ListaUsuarios.php");
                        break;
                        case 'salvar':
                            include("SalvarUsuario.php");
                        break;
                        case 'editar':
                            include("EditarUsuario.php");
                        break;
                        default:
                            print "<div class=content>
                                        <div class=content-main>
                                            <h1>Bem-Vindo! </h1>
                                            <p> Faça seu cadastro ou verifique a lista de usuários já cadastrados. </p>
                                            <div class=btn>
                                                <button><a href=?page=novo> Cadastrar</a></btn>
                                                <button><a href=?page=listar>Lista Cadastros</a></btn>
                                            </div>
                                        </div>
                                        <img src=img/undraw_my_documents_re_13dc.svg alt=undraw> 
                                    </div>";
                    }
                ?>
        </main>
        
    
    <!-- Importando funções Jquery -->
        <!-- Jquery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Jquery Mask -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>
</html>