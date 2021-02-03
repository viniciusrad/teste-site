<?php


// lê o arquivo
$myfile = fopen("telefonesWhatsapp.txt", "r") or die("Unable to open file!");
$telefonesVindosArquivo = json_decode(fread($myfile, filesize("telefonesWhatsapp.txt")));
fclose($myfile);

//$_SESSION['telefonesArquivo'] = $telefonesVindosArquivo;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="administrativo.css">

    <title>Document</title>
</head>

<body>

    <div class="cabecalho-adm">
        <h2>pagina administrativa</h2>
    </div>
    <div class="container">
        <h1>Seleção de imagens para o banner</h1>
        <div class="elemento-adm">

            <div>
                <h3>Informe a imagem para o banner no desktop</h3>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <p>Selecione o arquivo:</p>
                    <div class="div-btn">

                        <input type="file" name="fileToUpload" id="fileToUpload" style="padding: 1rem; border-radius: 10px; background-color: wheat;">
                    </div>
                    <div class="div-btn">
                        <input type="submit" value="Enviar imagem" name="submit-desktop-img" class="btn-form">
                    </div>

                </form>
            </div>
            <div>
                <h3>Informe a imagem para o banner MOBILE</h3>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <p>Selecione o arquivo:</p>
                    <div class="div-btn">

                        <input type="file" name="fileToUpload2" id="fileToUpload2" style="padding: 1rem; border-radius: 10px; background-color: wheat;">
                    </div>
                    <div class="div-btn">
                        <input type="submit" value="Enviar imagem" name="submit-mobile-img" class="btn-form">
                    </div>

                </form>
            </div>
        </div>
        <p>Incluir informações sobre o tipo e tamanho adequados para as imagens</p>

    </div>
    <div class="container">
        <h1>Telefones Ativos no whatsapp</h1>
        <div class="elemento-adm">


            <div>
                <h3>inserir telefones</h3>
                <form action="gerenciaTelefones.php" method="post">
                    <label for="telefone"></label>
                    <input type="text" name="telefone">
                    <!-- <input type="hidden" name="telefones" value="<?php var_dump(json_encode($telefonesVindosArquivo)) ?>"> -->

                    <input type="submit" value="Adicionar telefone" name="submit-fone-number" class="btn-form">
                </form>
            </div>
            <div class="lista-telefones">
                <ul>
                    <?php
                    //var_dump(json_encode($telefonesVindosArquivo));
                    foreach ($telefonesVindosArquivo as $index => $telefone) {
                    ?>
                        <form action="gerenciaTelefones.php" method="post">

                            <li>
                                <?php echo $telefone ?>
                                <input type="hidden" id="custId" name="fone-index" value="<?php echo $index ?>">
                                <input type="submit" value="x" name="delete-fone-number" class="btn-form">
                            </li>
                        </form>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>