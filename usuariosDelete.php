<?php
    if(isset($_GET["id"]) && !empty($_GET["id"]) ){
        include "./conexao.php";
        $query = "delete from usuarios where id =".$_GET["id"];
        $resultado = mysqli_query($conexao,$query);
        if ($resultado)
        {
            header('location: ./usuarios.php?sucesso= Excluido com sucesso');
            exit();

        }else{
            header('location: ./usuarios.php?erro=ocoreu algum erro no banco');
            exit();
        }
    }else{
        header('location: ./usuarios.php?erro=Selecione um usuario para excluir');
        exit();
    }
?>

