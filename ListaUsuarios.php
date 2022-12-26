<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Usuários Cadastrados</title>
</head>
<body>

    <section>
    <h1>Usuários Cadastrados</h1>
    <div class="box-table">
        <?php
            $sql = "select * from cliente";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if($qtd > 0){
                print "<table class='table table-responsive'>";
                print "<thead>";
                print "<tr>";
                print "<th> ID </th>";
                print "<th> Nome </th>";
                print "<th> Email </th>";
                print "<th> Data Nascimento </th>";
                print "<th> Telefone </th>";
                print "<th> Ações </th>";
                print "</tr>";
                print "</thead>";
                print "<tbody>";
                while($row = $res->fetch_object()){
                    
                    print "<tr>";
                    print "<td>".$row->idCliente."</td>";
                    print "<td>".$row->Nome."</td>";
                    print "<td>".$row->Email."</td>";
                    print "<td>".$row->DataNasc."</td>";
                    print "<td>".$row->Telefone."</td>";
                    print "<td class=action> 
                    <button onclick=\"location.href='?page=editar&idCliente=".$row->idCliente."';\" class='btn-edit'> Editar </button>
                    <button onclick=\"if(confirm('Tem certeza que deseja exluir?')){location.href='?page=salvar&acao=excluir&idCliente=".$row->idCliente."';}else{false;}  \" class='btn-danger'> Excluir </button> </td>";
                    print "</tr>";
                    
                }
                print "<tbody>";
                print "</table>";
            }
            else{
                print "<p class='alert alert-danger'> Não encontrou resultados! </p> ";
            }

        ?>
    </div>
    </section>

    <script>
    /*Mudar Navbar */
    const home = document.getElementById('home')
    const cadastros = document.getElementById('cadastros')

    cadastros.classList.add('active')
    home.classList.remove('active')
    </script>
</body>
</html>