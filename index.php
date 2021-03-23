<?php
$tituloPagina = "Sistema e site para imobiliarias e corretores";
$descricao = "Temos soluções para transformá-lo em uma imobiliária digital de alta performance ";
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
            </br>
            <h3>Conheça nossos produtos</h3>
            <ul style="list-style: disc; padding-left: 3rem;">
                <li><a href="./sistema-crm.php">Sistema para imobiliárias</a></li>
                <li><a href="./site-responsivo.php">Sites para imobiliárias</a></li>
                <li><a href="./visitaVirtual.php">Visita virtual</a></li>
                <li><a href="./administracao-imoveis.php">Administração de imóveis</a></li>
                <li><a href="./chat-bot.php">Chatbot para Imobiliária</a></li>
                <li><a href="./locacao-digital.php">Locação Digital</a></li>
                <li><a href="./remanescentesLancamentos.php">Remanescentes de lançamentos</a></li>
                <li><a href="./mqlQualificaLead.php">MQL Qualificação de leads</a></li>
            </ul>
            <a href="./contato.php">
                <button class="btn-saiba-mais-black" style="margin-top: 1em;">Solicite contato</button>
            </a>
        </div>
    </div>
    <div class="imagem-principal-mobile">
        <img src="img/corretor-nuvem.png" alt="">
        <div>
            <h3>IMOBILIÁRIA NA NUVEM?</h3>
            <p>A Tecnologia Corporativa mais importante e inovadora disponível para Imobiliárias e Corretores.</p>
            </br>
            <h3>Conheça nossos produtos</h3>
            <ul style="list-style: disc; padding-left: 3rem;">
                <li>Sistema para imobiliárias</li>
                <li>Sites para imobiliárias</li>
                <li>Visita virtual</li>
                <li>Administração de imóveis</li>
                <li>Chatbot para Imobiliária</li>
                <li>Locação Digital</li>
                <li>Remanescentes de lançamentos</li>
                <li>MQL Qualificação de leads</li>
            </ul>
            <a href="./contato.php">
                <a href="./contato.php">
                    <button class="btn-saiba-mais-black" style="margin-top: 1em;">Solicite contato</button>
                </a>
        </div>
    </div>
    <!-- espaço do crm -->


    <div class=" div-crm">
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
            <a href="./sistema-crm.php">
                <button class="btn-saiba-mais-black">Saiba mais</button>
            </a>
        </div>
    </div>

    <div class="div-fundo-verde">
        <h1 style="font-size: 1.2em;">Venda mais com o melhor sistema CRM para imobiliárias e corretores</h1>
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
            <a href="./site-responsivo.php">
                <button class="btn-saiba-mais-black">Saiba mais</button>
            </a>
        </div>
        <div class="div-img-crm">
            <img src="img/site-responsivo.jpg" alt="">
        </div>
    </div>

    <div class="div-fundo-verde">
        <h2>Tenha uma imobiliária digital alta performance</h2>
    </div>

    <!--  -->
    <!-- area de servicos -->
    <?php
    include('area-servicos.php')
    ?>
    <!-- containerde seriços -->
    <!--  -->

    <div class="div-btn-proposta">
        <a href="./contato.php">
            <button class="btn-saiba-mais-black">Quero receber uma proposta</button>
        </a>
    </div>


    <div class="div-area-cinza"></div>

    <!--  -->
    <!-- area de depoimentos -->
    <!--  -->
    <?php
    include('area-depoimentos.php')
    ?>
    <!-- fimm da area de depoimentos -->

    <!-- area de contato -->

    <?php
    include('area-contato.php')
    ?>
    <!-- FIM da area de contato -->

    <!-- rodapé -->
    <?php
    include('area-rodape.php')
    ?>

    <!--  -->

    <!-- div cookies -->
    <div class="div-cookies div-display-none">
        <p>Utilizamos cookies para oferecer melhor experiência, melhorar o desempenho, analisar como você interage em nosso site e personalizar conteúdo. Ao utilizar este site, você concorda com o uso de cookies.</p>
        <button class="btn-saiba-mais-black" id="btn-cookie">Ok, entendi</button>
    </div>
    <!--  -->




    <!--  -->
    <!-- o modal so deverá ser exibido na pagina principal -->
    <!-- Modal -->
    <div class="modal fade" id="modalBaner" tabindex="-1" role="dialog" aria-labelledby="modalBanerLabel" aria-hidden="true">
        <div class=" modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBanerLabel">Titulo da campanha</h5>
                    <button id="hide_modal" type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                <textarea name="mensagem" id="mensagem" cols="30" rows="7" class="form-control" placeholder="Olá, tenho interesse em saber mais sobre o Midas. Aguardo contato." style="
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
        /**Ativa o modal forçadamente */
        $(window).on('load', function() {
            // $('#modalBaner').modal('show');


        });
        // $('#hide_modal').click(function() {
        //     alert('clicou btn fechar')
        //     $('#modalBaner').modal('hide')

        // })



        $(document).ready(function() {
            if (!$.cookie("cookieModal")) {
                // aciona o modal se não houver cookie
                $('#modalBaner').modal('show');
                // cria o cookie
                $.cookie("cookieModal", "firstSet", {
                    "expires": 1
                })
            } else {

            }

            //clica no botão do cookie
            if (!$.cookie("cookiePoliticaPrivacidade")) {
                $('.div-cookies').toggleClass("div-display-none");

                $('#btn-cookie').click(() => {
                    $('.div-cookies').toggleClass("div-cookie-aceito");

                    $.cookie("cookiePoliticaPrivacidade", "clicou", {
                        "expires": 1
                    })
                })
            }

            // esconde os cards que não devem ser exibidos
            $('#card-site').css("display", "none")
            $('#card-crm').css("display", "none")

        })
    </script>
</body>



</html>