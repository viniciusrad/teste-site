<?php



if (isset($_POST["submit-fone-number"])) {

    $myfile = fopen("telefonesWhatsapp.txt", "r") or die("Unable to open file!");
    $telefonesVindosArquivo = json_decode(fread($myfile, filesize("telefonesWhatsapp.txt")), true);
    fclose($myfile);

    $telefonesVindosArquivo[] = $_POST['telefone'];

    //Cria o arquivo com o novo numero de telefone
    $myfile = fopen("telefonesWhatsapp.txt", "w") or die("Unable to open file!");
    fwrite($myfile, json_encode($telefonesVindosArquivo));
    fclose($myfile);


    echo "telefone criado com sucesso";
}

if (isset($_POST["delete-fone-number"])) {

    // var_dump($_POST);
    // die();

    $myfile = fopen("telefonesWhatsapp.txt", "r") or die("Unable to open file!");
    $telefonesVindosArquivo = json_decode(fread($myfile, filesize("telefonesWhatsapp.txt")), true);
    fclose($myfile);


    // var_dump($telefonesVindosArquivo);
    // die();
    //deletar utilizando o index
    unset($telefonesVindosArquivo[$_POST['fone-index']]);

    //Cria o arquivo
    $myfile = fopen("telefonesWhatsapp.txt", "w") or die("Unable to open file!");
    fwrite($myfile, json_encode($telefonesVindosArquivo));
    fclose($myfile);
}


if (isset($_POST["telefoneComercial"])) {

    //Cria o arquivo
    $myfile = fopen("ultimoTelefoneUsado.txt", "w") or die("Unable to open file!");
    fwrite($myfile, json_encode($_POST["telefoneComercial"]));
    fclose($myfile);

    // return true;
    // var_dump($_POST);



    $myfile = fopen("telefonesWhatsapp.txt", "r") or die("Unable to open file!");
    $telefonesVindosArquivo = json_decode(fread($myfile, filesize("telefonesWhatsapp.txt")), true);
    fclose($myfile);

    $myfile2 = fopen("ultimoTelefoneUsado.txt", "r") or die("Unable to open file!");
    $ultimoTelefoneUsado = json_decode(fread($myfile2, filesize("ultimoTelefoneUsado.txt")), true);
    fclose($myfile2);

    $indexDoArrayTelefoenes =  array_search($ultimoTelefoneUsado, array_values($telefonesVindosArquivo));

    $quantTelefonesadastrados = count((array)$telefonesVindosArquivo);


    var_dump($indexDoArrayTelefoenes);

    die();

    if ($indexDoArrayTelefoenes < $quantTelefonesadastrados) {
        $proximoTelefoneDaLista  = $telefonesVindosArquivo[$indexDoArrayTelefoenes + 1];
    } else {
        $proximoTelefoneDaLista  = 0;
    }





    //Cria o arquivo
    $myfile = fopen("ultimoTelefoneUsado.txt", "w") or die("Unable to open file!");
    fwrite($myfile, json_encode($telefonesVindosArquivo));
    fclose($myfile);
}
