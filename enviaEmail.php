<?php
// $nome = "vinicius";
// $email = "viniciusrad@yahoo.com.br";
// $mensagem = "Mensagem de teste de envio de email de contato do site midas";
// $to = "viniciusrad@yahoo.com.br";
// $assunto = "Mensagem de " . $email;
// if (mail($to, $assunto, $mensagem)) {
//     echo "email enviado com sucesso";
// } else {

//     echo "Falha ao enviar email";
// }


// var_dump($_POST);
// die("die aqui");
$nome = $_POST['nome'];
$email = $_POST['e-mail'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
// $imobiliaria = $_POST['imobiliaria'];
$formaContato = $_POST['forma-contato'];

$headers = "From: vinicius@infoideias.com.br \r\n";
$headers .= "Reply-To: vinicius@infoideias.com.br \r\n";
$headers .= 'Content-type: text/html;' . "\r\n";
$headers .= "Return-Path: vinicius@infoideias.com.br \r\n"; // return-path


$mensagemFinal = "Nome do cliente: " . $nome . "<br/><br/>" .
    // "Imobiliaria do cliente: " . $imobiliaria  . "<br/><br/>" .
    "Telefone do cliente: " . $telefone  . "<br/><br/>" .
    "Formna de contato preferencial: " . $formaContato  . "<br/><br/>" .
    "Mensagem do cliente: " . $mensagem;
$to = "vinicius@infoideias.com.br";


$assunto = "Mensagem de " . $email;
//envia o email
if (mail($to, $assunto, $mensagemFinal, $headers, $email)) {
    // echo "email enviado com sucesso";
} else {
    // echo "Falha ao enviar email";
}

?>
<link rel="stylesheet" href="index.css">

<style>
    body {
        margin: 0;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        /* background: red;
    border: 5px solid white; */
    }

    .card-mensagem {
        border: 1px solid grey;
        border-radius: 10px;
        padding: 2rem;
    }

    .card-mensagem h2 {
        text-align: center;
    }

    .card-mensagem a {
        justify-content: center;
        display: flex;
        padding-top: 2rem;
    }
</style>


<div class="card-mensagem">
    <h2>Obrigado!</h2>
    <p>Sua mensagem foi encaminhada para nossos especialistas</p>
    <a href="https://www.midasmais.com.br/novo_site2/">
        <button class="btn-saiba-mais-black">Voltar</button>
    </a>
</div>

<?php
// sleep(5);
// header('Location: https://www.midasmais.com.br/novo_site2/');
