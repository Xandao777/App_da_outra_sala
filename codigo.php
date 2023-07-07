<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if($email == "entregador@example.com"){
        header("Location: app_acess/tela_mot/tela.html");
        exit();
    } elseif($email == 'adm@example.com'){
        header("Location: app_acess/tela_adm/tela.html");
        exit();
    } elseif($email == 'cliente@example.com'){
        header("Location: app_acess/tela_cli/tela.html");
        exit();
    } else {
        header("Location: index.html");
        exit();
    }
?>
