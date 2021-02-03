<?php



if (isset($_POST["submit-fone-number"])) {

    $myfile = fopen("telefonesWhatsapp.txt", "r") or die("Unable to open file!");
    $telefonesVindosArquivo = json_decode(fread($myfile, filesize("telefonesWhatsapp.txt")), true);
    fclose($myfile);

    $telefonesVindosArquivo[] = $_POST['telefone'];

    //Cria o arquivo
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
