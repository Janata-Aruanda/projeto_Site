<?php
    if( empty($_POST['token']) || empty($_POST['senha']) || empty($_POST['novaSenha'])){
        header('Location: index.php');
        exit();
    }


    include('config.php');

    $token = $_POST["token"];
    $senha = $_POST["senha"];
    $novaSenha = $_POST["novaSenha"];

    if($senha!=$novaSenha){
        echo '<script>alert("As senhas não conferem! Verifique as senhas.") history.go(-1)</script>';
        exit();
    }

    $sql =  "SELECT * FROM tokens_recuperacoes WHERE token='{$token}'";
    
    $res = $conn->query($sql);

    $row = $res->fetch_object();

    if($res->num_rows > 0){
        $encriptar = md5($senha);
        $idUser = $row->idUsuario;
        $sql2="UPDATE usuarios SET senha='{$encriptar}' WHERE id={$idUser}";
        $res2=$conn->query($sql2);
     echo '<script> alert("Senha redefinida com sucesso")</script>';
     echo '<script> window.location.href="../login"</script>';
    

    }else{
        echo "Token inválido";
    }