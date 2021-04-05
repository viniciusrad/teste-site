<?php
//Cria o arquivo
$myfile = fopen("arquivoTeste.txt", "w") or die("Unable to open file!");
fwrite($myfile, json_encode($_POST["arquivoTeste"]));
fclose($myfile);
