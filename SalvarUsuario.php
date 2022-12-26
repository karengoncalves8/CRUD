<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $datanas = $_POST["datanas"];
            $tel = $_POST["tel"];
            $senha = $_POST["senha"];

            $sql = "insert into cliente (Nome, Email, DataNasc, Telefone, Senha) VALUES
                ('{$nome}', '{$email}', '{$datanas}', '{$tel}', '{$senha}')";

            $res = $conn->query($sql);

            if($res == true){
                print "<script> alert('Cadastrado com sucesso!') </script>";
                print "<script> location.href='?page=listar'</script>";
            }
            else{
                print "<script> alert('Falha ao cadastrar.') </script>";
                print "<script> location.href='?page=listar'</script>";
            }
        break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $datanas = $_POST["datanas"];
            $tel = $_POST["tel"];
            $senha = $_POST["senha"];

            $sql = "update cliente set 
                Nome = '{$nome}',
                Email = '{$email}',
                DataNasc = '{$datanas}',
                Telefone = '{$tel}',
                Senha = '{$senha}'
                WHERE idCliente = ".$_REQUEST["idCliente"];
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script> alert('Alterado com sucesso!') </script>";
                print "<script> location.href='?page=listar'</script>";
            }
            else{
                print "<script> alert('Falha ao alterar.') </script>";
                print "<script> location.href='?page=listar'</script>";
            }
            break;
        case 'excluir':
            $sql = "delete from cliente where idCliente=".$_REQUEST["idCliente"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script> alert('Excluido com sucesso!') </script>";
                print "<script> location.href='?page=listar'</script>";
            }
            else{
                print "<script> alert('Falha ao excluir.') </script>";
                print "<script> location.href='?page=listar'</script>";
            }
        break;
        default:
            print "<h1> Falha</h1>";
    }
?>