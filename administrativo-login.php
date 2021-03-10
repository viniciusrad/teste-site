<?php

// var_dump($_POST);

if (isset($_POST['login']) && isset($_POST['senha'])) {

    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = $_POST['senha'];
    $connect = mysqli_connect('168.0.134.82', 'usu_site_adm', 'sV3@w98UI!e', 'apoio_infoideias');
    //$db = mysql_select_db('apoio_infoideias');//

    // $resultado = $connect->query("SELECT * FROM usuarios_site_adm");
    // $conteudo =  $resultado->fetch_all();
    // var_dump($conteudo);


    if (isset($entrar)) {

        $verifica = $connect->query("SELECT * FROM usuarios_site_adm WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        // $conteudo =  $verifica->fetch_all();
        // var_dump("SELECT * FROM usuarios_site_adm WHERE login = '$login' AND senha = '$senha'");

        if (mysqli_num_rows($verifica) <= 0) {

            echo "Login com erro";
            die();
        } else {

            session_start();
            $_SESSION['logado'] = true;
            header("Location: administrativo.php");
            // echo "Login efetuado";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="administrativo-login.php" method="POST">
            <h2>Por favor, inform seus dados de login</h2>
            <label>Login:</label><input type="text" name="login" id="login"><br>
            <label>Senha:</label><input type="text" name="senha" id="senha"><br>
            <input type="submit" value="entrar" id="entrar" name="entrar"><br>
    </div>
</body>

</html>