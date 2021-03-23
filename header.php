<?php

function leNumerosTelefones()
{
    $myfile = fopen("telefonesWhatsapp.txt", "r") or die("Unable to open file!");
    $telefonesVindosArquivo = json_decode(fread($myfile, filesize("telefonesWhatsapp.txt")), true);
    fclose($myfile);

    return $telefonesVindosArquivo;
}


$telefonesVindosArquivo = leNumerosTelefones();
$telefonesVindosArquivo = array_values($telefonesVindosArquivo);


$quantTelefonesadastrados = count((array)$telefonesVindosArquivo);




$indexTelefone = (date('d') % $quantTelefonesadastrados);

$telefoneComercial = $telefonesVindosArquivo[$indexTelefone];

// var_dump($telefoneComercial);
// die();
// echo "-----------------***********-----------------";
// echo "</br>";
// var_dump((array)$telefonesVindosArquivo[$indexTelefone]);
// echo "</br>";
// echo "-----------------***********-----------------";
// die();



?>


<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <meta name="description" content="<?php echo $descricao ?>" />


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logo-fav-icon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa%7CComfortaa%7CComfortaa%7CComfortaa&amp;subset=latin-ext,cyrillic-ext,latin,vietnamese,cyrillic,greek" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;800&family=Oswald:wght@400;700&family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <link rel='stylesheet' id='font-awesome-css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />

    <script src="./lib/jquery.cookie.js"></script>


    <link rel="stylesheet" href="index.css">


    <!-- Global site tag (gtag.js) - Google Ads: 874740353 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-874740353"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'AW-874740353');
    </script>


    <title><?php echo $tituloPagina ?></title>
</head>


<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">


            <div class="entrada-topo entrada-topo-scroll mover" style="display: flex;">

                <!-- sanduiche das paginas midas -->
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <a href="javascript:void(0);" class="icon"><img src="./img/menu-r.png" alt="menu" title="menu" class="pull-left sanduiche"></a>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="sistema-crm.php" style="border-left: 7px solid #d93117;margin-left: 10px;">SISTEMA PARA IMOBILIÁRIA</a>
                        <a class="dropdown-item" href="site-responsivo.php" style="border-left: 7px solid #ffb017;margin-left: 10px;"> SITE PARA IMOBILIÁRIA</a>
                        <a class="dropdown-item" href="chat-bot.php" style="border-left: 7px solid #9c136f;margin-left: 10px;">CHATBOT</a>
                        <a class="dropdown-item" href="administracao-imoveis.php" style="border-left: 7px solid #0877ac;margin-left: 10px;">ADMINISTRACAO DE IMOVEIS</a>
                        <a class="dropdown-item" href="locacaoDigital.php" style="border-left: 7px solid #9877ac;margin-left: 10px;">LOCAÇÃO DIGITAL</a>
                        <a class="dropdown-item" href="visitaVirtual.php" style="border-left: 7px solid #4caa30;margin-left: 10px;">VISITA VIRTUAL</a>
                        <a class="dropdown-item" href="remanescentesLancamentos.php" style="border-left: 7px solid #08b7ac;margin-left: 10px;">REMANESCENTE DE LANCAMENTOS</a>
                        <a class="dropdown-item" href="mqlQualificaLead.php" style="border-left: 7px solid #7434d3;margin-left: 10px;">MARKETING QUALIFICA LEAD</a>
                        <a class="dropdown-item" href="https://www.midasmais.com.br/blog/" style="border-left: 7px solid #666;margin-left: 10px;">BLOG</a>
                        <a class="dropdown-item" href="contato.php" style="border-left: 7px solid #333;margin-left: 10px;">CONTATO</a>
                    </div>
                </div>
                <!-- sanduiche das paginas midas -->

                <div class="pull-left"><a href="./index.php"><img id="img-logo" src="./img/logo-midas2.png" alt="Midas" title="Midas"></a></div>
            </div>

            <!--  -->
            <!-- Botao a direita  -->
            <!--  -->
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto barra-enderecos list-none" style="list-style-type: none;">
                    <li style="list-style: none;" class="nav-item">
                        <a href="./index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contato.php">Contato</a>

                    </li>
                    <li class="nav-item">
                        <a href="https://www.midasmais.com.br/blog/">Blog</a>
                    </li>

                </ul>
                <a href="./contato.php">
                    <button class="btn-receber-oferta">Receber oferta</button>
                </a>

                <div class="div-social-icons">
                    <a class="" href="https://www.instagram.com/midas_mais/"><i class="fas fa-camera"></i></a>
                    <a class="" href="https://www.facebook.com/MidasSoftImob"><i class="fab fa-facebook"></i></a>
                    <a class="" href="contato.php"><i class="fas fa-phone-alt"></i></a>
                </div>


            </div> -->

            <div class="div-social-icons">
                <a class="" href="https://www.instagram.com/midas_mais/"><i class="fas fa-camera"></i></a>
                <a class="" href="https://www.facebook.com/MidasSoftImob"><i class="fab fa-facebook"></i></a>
                <a class="" id="btn-contato-ligar"><i class="fas fa-phone-alt"></i></a>
                <div class="pop-telefone aux-display-none">
                    <p>Telefone para contato:</p>
                    <p> (21) 2214-0113</p>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <!--  -->

        </div>

    </nav>
    <!-- Navigation -->


</header>

<script>
    // The debounce function receives our function as a parameter
    const debounce = (fn) => {

        // This holds the requestAnimationFrame reference, so we can cancel it if we wish
        let frame;

        // The debounce function returns a new function that can receive a variable number of arguments
        return (...params) => {

            // If the frame variable has been defined, clear it now, and queue for next frame
            if (frame) {
                cancelAnimationFrame(frame);
            }

            // Queue our function call for the next frame
            frame = requestAnimationFrame(() => {

                fn(...params);
            });

        }

    };


    // Reads out the scroll position and stores it in the data attribute
    // so we can use it in our stylesheets
    const storeScroll = () => {
        document.documentElement.dataset.scroll = window.scrollY;

        if (window.scrollY != 0) {
            $("#img-logo").attr("src", "img/Logo-Midas-Mais-branca.png");
        } else {
            $("#img-logo").attr("src", "img/logo-midas2.png");

        }
    }

    // Listen for new scroll events, here we debounce our `storeScroll` function
    document.addEventListener('scroll', debounce(storeScroll), {
        passive: true
    });

    // Update scroll position for first time
    storeScroll();


    $(document).ready(function() {

        $('#btn-contato-ligar').click(() => {
            //alert("clicou")
            $(".pop-telefone").toggleClass('aux-display-none')
        })

    })
</script>