<?php
$myfile = fopen("telefonesWhatsapp.txt", "r") or die("Unable to open file!");
$telefonesVindosArquivo = json_decode(fread($myfile, filesize("telefonesWhatsapp.txt")), true);
fclose($myfile);


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


<!DOCTYPE html>
<html lang="en">



<?php include('header.php') ?>

<body>

    <!-- Imagem principal -->
    <div class="imagem-principal">
        <div class="texto-imagem-principal">
            <h2>IMOBILIÁRIA NA NUVEM?</h2>
            <p>A Tecnologia Corporativa mais importante e inovadora disponível para Imobiliárias e Corretores.</p>
            <button class="btn-saiba-mais">Saiba mais</button>
        </div>
        <div class="texto-sobre-imagem">
            <p style="max-width: 260px; padding-left: 3em;"><strong>IMOBILIÁRIA DIGITAL 4.0 DISPONÍVEL 24 HORAS POR DIA.</strong></p>

        </div>
    </div>
    <div class="imagem-principal-mobile">
        <img src="img/corretor-nuvem.png" alt="">
        <div>
            <h3>IMOBILIÁRIA NA NUVEM?</h3>
            <p>A Tecnologia Corporativa mais importante e inovadora disponível para Imobiliárias e Corretores.</p>
            <button class="btn-saiba-mais-black">Saiba mais</button>

        </div>
    </div>
    <!-- espaço do crm -->
    <div class="div-crm">
        <div class="div-img-crm">
            <img src="img/crm-screen-shots.png" alt="">
        </div>
        <div class="lista-crm">
            <h2>CRM EXCLUSIVO PARA IMOBILIÁRIAS E CORRETORES</h2>
            <ul>
                <li>Integração com Portais;</li>
                <li>Integração Facebook e Whatsapp;</li>
                <li>Funil de Vendas;</li>
                <li>Análise de Retorno;</li>
                <li>Transferência Automática de Clientes;</li>
                <li>Gestão total da sua Equipe;</li>
                <li>E-mails Automáticos.</li>
            </ul>
            <button class="btn-saiba-mais-black">Saiba mais</button>

        </div>
    </div>

    <hr>

    <div class="align-text">
        <h3>FUNCIONALIDADES</h3>
    </div>
    <!-- Cards de seriços -->
    <div class="container container-icones">
        <div class="card-icone">
            <a href="sistemaImobiliarias.php">
                <div class="div-icone">
                    <img class="img-icone" src="img/icone-sistema-para-imobiliarias.png" alt="Avatar">
                </div>
                <div class="container">
                    <p class="textos-icones">Sistemas para imobiliaria</p>
                </div>
            </a>
        </div>
        <div class="card-icone">
            <a href="siteImobiliarias.php">
                <div class="div-icone">
                    <img class="img-icone" src="img/icone-site-para-imobiliarias.png" alt="Avatar">
                </div>
                <div class="container">
                    <p class="textos-icones">Site para imobiliarias</p>
                </div>
            </a>
        </div>

        <div class="card-icone">
            <a href="administracaoImoveis.php">
                <div class="div-icone">
                    <img class="img-icone" src="img/icone-locação-digital.png" alt="Avatar">
                </div>
                <div class="container">
                    <p class="textos-icones">Locação digital</p>
                </div>
            </a>
        </div>

        <div class="card-icone">
            <a href="administracaoImoveis.php">
                <div class="div-icone">
                    <img class="img-icone" src="img/icone-administracao-imoveis.png" alt="Avatar">
                </div>
                <div class="container">
                    <p class="textos-icones">administração de imóveis</p>
                </div>
            </a>
        </div>

        <div class="card-icone">
            <a href="administracaoImoveis.php">
                <div class="div-icone">
                    <img class="img-icone" src="img/icone-remanescentes-de-lancamentos.png" alt="Avatar">
                </div>
                <div class="container">
                    <p class="textos-icones">Remanescentes de lançamentos</p>
                </div>
            </a>
        </div>

        <div class="card-icone">
            <a href="administracaoImoveis.php">
                <div class="div-icone">
                    <img class="img-icone" src="img/icone-mql-lancamentos-de-leads.png" alt="Avatar">
                </div>
                <div class="container">
                    <p class="textos-icones">MQL Qualificação de leads</p>
                </div>
            </a>
        </div>


        <div class="card-icone">
            <a href="chatbotImobiliarias.php">
                <div class="div-icone">
                    <img class="img-icone" src="img/icone-chatbot.png" alt="Avatar">
                </div>
                <div class="container">
                    <p class="textos-icones">Chatbot para imobiliária</p>
                </div>
            </a>
        </div>

        <div class="card-icone">
            <a href="visitaImoveis.php">
                <div class="div-icone">
                    <img class="img-icone" src="img/icone-360.png" alt="Avatar">
                </div>
                <div class="container">
                    <p class="textos-icones">Visita virtual</p>
                </div>
            </a>
        </div>

    </div>
    <!-- fim do container de Cards de seriços -->

    <div class="div-btn-proposta">
        <button class="btn-saiba-mais-black">Quero receber uma proposta</button>
    </div>

    <div class="div-fundo-cinza">
        <p>O ÚNICO CRM COM GESTÃO DE LEADS NO MERCADO IMOBILIÁRIO</p>
    </div>

    <div class="div-crm">
        <div class="lista-crm">
            <h2>SITE EXCLUSIVO PARA IMOBILIÁRIAS E CORRETORES</h2>
            <ul>
                <li>SEO – Otimização para o Google;</li>
                <li>Layouts Responsivos;</li>
                <li>Busca de avançada de Imóveis;</li>
                <li>Alta Performance;</li>
                <li>Usabilidade e Aparência;</li>
                <li>Autonomia e Flexibilidade no Gerenciamento do Conteúdo!</li>
            </ul>
            <button class="btn-saiba-mais-black">Saiba mais</button>
        </div>
        <div class="div-img-crm">
            <img src="img/site-responsivo.jpg" alt="">
        </div>
    </div>

    <div class="div-fundo-cinza">
        <p>SITES COMPROVADAMENTE COM OS MELHORES POSICIONAMENTOS NA BUSCA ORGÂNICA (GRATUITA) DO GOOGLE</p>
    </div>
    <!-- area de depoimentos -->
    <!-- <div class="div-depoimentos">
        <div class="card-depoimentos">
            <div class="depoimentos-header">
                <img src="https://via.placeholder.com/150" alt="">
                <div>
                    <p>Miliete</p>
                    <p>Corretora autônoma</p>
                </div>

            </div>
            <div class="depoimentos-body">
                <p>Quando comecei a trabalhar como profissional autônoma, queria me profissionalizar, no ramo Imobiliário e estar nos melhores portais. Então não tive dúvidas, escolhi o melhor! Midas. Os profissionais desse sistema, são atenciosos e realmente resolvem sempre o que precisamos. Neste ramo, não podemos perder tempo e o Midas, nós dá um excelente suporte. Parabéns a equipe Midas. </p>
            </div>
        </div>
    </div> -->

    <!--  -->
    <!--  -->
    <div class="area-depoimentos">

        <h3>Casos de sucesso</h3>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner" role="listbox">


                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="div-depoimentos">
                        <div class="card-depoimentos">
                            <div class="depoimentos-header">
                                <img src="https://via.placeholder.com/150" alt="">
                                <div>
                                    <p>Miliete</p>
                                    <p>Corretora autônoma</p>
                                </div>

                            </div>
                            <div class="depoimentos-body">
                                <p>Quando comecei a trabalhar como profissional autônoma, queria me profissionalizar, no ramo Imobiliário e estar nos melhores portais. Então não tive dúvidas, escolhi o melhor! Midas. Os profissionais desse sistema, são atenciosos e realmente resolvem sempre o que precisamos. Neste ramo, não podemos perder tempo e o Midas, nós dá um excelente suporte. Parabéns a equipe Midas. </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Slide 2-->
                <div class="carousel-item">
                    <div class="div-depoimentos">
                        <div class="card-depoimentos">
                            <div class="depoimentos-header">
                                <img src="https://via.placeholder.com/150" alt="">
                                <div>
                                    <p>Karine</p>
                                    <p>Solidez Imobiliária</p>
                                </div>

                            </div>
                            <div class="depoimentos-body">
                                <p>Minhas impressões com relação ao sistema não poderia ser melhor. Elenco os pontos positivos: </p>
                                <ul>
                                    <li>1 - Sistema de fácil manuseio, auto explicativo.</li>
                                    <li>2- Completo e integrado a diversos portais o que ajuda a maximiza o tempo.</li>
                                    <li>3- Manual com passo a passo disponível 24h no campo: ajuda.</li>
                                    <li>4- Suporte por telefone e dentro do sistema.</li>
                                </ul>
                                <p>Elenco pontos negativos: Nenhum!</p>
                                <p>Enfim, o sistema é maravilhoso, o atendimento é excelente, de toda equipe como: você, Tania do administrativo e Cássio do site, estou super satisfeita com a empresa e recomendo a todos.
                                    Muito obrigada!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3-->
                <div class="carousel-item">
                    <div class="div-depoimentos">
                        <div class="card-depoimentos">
                            <div class="depoimentos-header">
                                <img src="https://via.placeholder.com/150" alt="">
                                <div>
                                    <p>Miliete</p>
                                    <p>Corretora autônoma</p>
                                </div>

                            </div>
                            <div class="depoimentos-body">
                                <p>Quando comecei a trabalhar como profissional autônoma, queria me profissionalizar, no ramo Imobiliário e estar nos melhores portais. Então não tive dúvidas, escolhi o melhor! Midas. Os profissionais desse sistema, são atenciosos e realmente resolvem sempre o que precisamos. Neste ramo, não podemos perder tempo e o Midas, nós dá um excelente suporte. Parabéns a equipe Midas. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- indicadores laterais do carrossel de imagens -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="span-carrossel" aria-hidden="true">
                    < </span>
                        <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="span-carrossel" aria-hidden="true"> > </span>
                <span class="sr-only">Next</span>
            </a>


        </div>
    </div>

    <!--  -->
    <!--  -->

    <!-- fimm da area de depoimentos -->

    <!-- area de contato -->
    <div class="form-contato">
        <div class="div-texto-formulario">
            <p>O FUTURO DA SUA IMOBILIÁRIA COMEÇA AGORA!</p>
        </div>
        <div class="div-formulario">
            <p>Preencha o formulário e receba uma oferta exclusiva.</p>
            <form action="">
                <div class="div-field">
                    <label for="nome">Nome Completo<span style="color: red;">*</span></label>
                    <input type="text" name="nome" id="input-nome">
                </div>
                <div class="div-field">
                    <label for="imobiliaria">Imobiliária<span style="color: red;">*</span></label>
                    <input type="text" name="imobiliaria" id="input-imobiliaria">
                </div>
                <div class="div-field">
                    <label for="e-mail">E-mail<span style="color: red;">*</span></label>
                    <input type="text" name="e-mail" id="input-e-mail">
                </div>
                <div class="div-field">
                    <label for="telefone">Telefone<span style="color: red;">*</span></label>
                    <input type="text" name="telefone" id="input-telefone">
                </div>
                <div class="div-field">
                    <label for="mensagem">Mensagem<span style="color: red;">*</span></label>
                    <textarea rows="4" name="mensagem" id="input-mensagem"></textarea>
                </div>

            </form>
        </div>
    </div>

    <div class="rodape">
        <div>
            <h3 class="texto-centralizado">MIDAS MAIS</h3>
            <p class="texto-centralizado">As soluções MIDAS vem deixando sua marca de sucesso em cada uma das Empresas que procuram utilizar o máximo da tecnologia em favor dos seus negócios.</p>
        </div>
    </div>

    <!-- whatsappp link -->

    <!-- <div class="container-whatsapp">
        <a class="contato-telefone-whatsapp" href="http://api.whatsapp.com/send?1=pt_BR&phone=55<?php echo $telefoneComercial; ?>" target="_blank">
            <i class="fa fa-whatsapp icone-whatsapp"></i>
        </a>
    </div> -->




    <!--  -->
    <!--  -->
    <!--  -->
    <!-- Modal -->
    <div class="modal fade" id="modalBaner" tabindex="-1" role="dialog" aria-labelledby="modalBanerLabel" aria-hidden="true">
        <div class="modal-lg" role="document" style="@media  (max-width : 576) {max-width: 97%; margin: 0 1rem;}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBanerLabel">Titulo da campanha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <img src="img/fundo2.jpg" alt=""> -->
                    <div id="div-promo">
                        <!-- ////////////////// -->
                        <!-- FORMULARIO DESKTOP - INICIO -->
                        <!-- ////////////////// -->
                        <div id="form-container">
                            <div id="div-form">
                                <form action="/enviar-contato" id="formulario-contato" method="post" class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="input-form" style='
                                        border: none;
                                        '>
                                                <input type="hidden" name="origem_formulario" id="origem-form">
                                                <input type="hidden" name="redireciona_expresso" id="redireciona-expresso" value="N">
                                                <label for="nome"> Seu Nome / Nome Imobiliária *</label>
                                                <input type="text" name="nome" id="nome" class="form-control" required="required" placeholder="Informe o seu nome ou nome da empresa" onkeypress="return lettersOnly(event);" style="
                                            background: white;
                                            border-radius: 10px;
                                            color: black;
                                            margin-top: 0px;
                                            font-size: large;
                                            padding: 5px;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="input-form" style='
                                        border: none;
                                        '>
                                                <label for="telefone">Telefone *</label>
                                                <input type="text" autocomplete="off" name="telefone" id="telefone" class="form-control" required="required" placeholder="Informe seu telefone, exemplo (21) 99999-9999" style="
                                            background: white;
                                            border-radius: 10px;
                                            color: black;
                                            margin-top: 0px;
                                            font-size: large;
                                            padding: 5px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="input-form" style='
                                        border: none;
                                        '>
                                                <label for="email">E-mail *</label>
                                                <input type="email" name="email" id="email" class="form-control" required="required" placeholder="Informe o seu e-mail" style="
                                            background: white;
                                            border-radius: 10px;
                                            color: black;
                                            margin-top: 0px;
                                            font-size: large;
                                            padding: 5px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="input-form msg" style='
                                        border: none;
                                        '>
                                                <label for="mensagem">Mensagem</label>
                                                <textarea name="mensagem" id="mensagem" cols="30" rows="7" class="form-control" placeholder="Escreva sua mensagem" style="
                                            background: white;
                                            border-radius: 10px;
                                            color: black;
                                            margin-top: 0px;
                                            font-size: large;
                                            padding: 5px; 
                                            height: auto !important;"></textarea>
                                                <!-- <input type="text" id="evita-spammer" name="evita-spammer"> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12" style="margin: 0 auto; MARGIN-TOP: 5px; position: absolute" id='divBtn'>
                                            <div>
                                                <input type="text" id="evita-spammer" name="evita-spammer" style="display: none;">
                                                <input type="submit" value="Enviar" title="Enviar formulario de contato" id="btn-submit-formulario" class="btn btn-warning" style="
                                            background-color: #ffc107;
                                            border-radius: 10px;
                                            font-size: x-large;
                                            " onmouseover="this.style.backgroundColor='#e0a800'" onmouseout="this.style.backgroundColor='#ffc107'">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- ////////////////// -->
                                <!-- FORMULARIO DESKTOP - FIM -->
                                <!-- ////////////////// -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class=" modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        /**Ativa o modal */
        $(window).on('load', function() {
            $('#modalBaner').modal('show');
        });
    </script>
</body>



</html>