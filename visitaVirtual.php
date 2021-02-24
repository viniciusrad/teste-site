<!DOCTYPE html>
<html lang="en">



<?php include('header.php') ?>

<body>

    <div class="div-fundo-verde">
        <p>A VISITA VIRTUAL É A MAIS NOVA TECNOLOGIA DO MERCADO IMOBILIÁRIO</p>
    </div>

    <div class="div-crm">
        <div class="div-img-crm">
            <img src="img/tour-virtual.jpg" alt="">
        </div>
    </div>

    <p class="texto-destaque">A visita virtual vem substituindo as fotografias convencionais, pois permite que o cliente visite todas as partes de seu imóvel através de qualquer dispositivo com acesso à Internet como se estivesse fisicamente no local</p>

    <div class="div-fundo-verde">
        <p>VANTAGENS DA VISITA VIRTUAL</p>
    </div>
    <div class="div-check">
        <!-- <ul class="no_bullet">
            <li class="check">Os proprietários que ainda residem no imóvel </br>
                não serão incomodados com visita constantes;</li>
        </ul> -->
        <div class="item-check-list">
            <div class="div-img-check">
                <div class="div-img-crm">
                    <img src="./img/check-icon.png" alt="">
                </div>
            </div>
            <div>
                <p>Os proprietários que ainda residem no imóvel </br>
                    não serão incomodados com visita constantes;</p>
            </div>
        </div>
        <div class="item-check-list">
            <div class="div-img-check">
                <div class="div-img-crm">
                    <img src="./img/check-icon.png" alt="">
                </div>
            </div>
            <div>
                <p>Os proprietários que ainda residem no imóvel </br>
                    não serão incomodados com visita constantes;</p>
            </div>
        </div>
        <div class="item-check-list">
            <div class="div-img-check">
                <div class="div-img-crm">
                    <img src="./img/check-icon.png" alt="">
                </div>
            </div>
            <div>
                <p>Os proprietários que ainda residem no imóvel </br>
                    não serão incomodados com visita constantes;</p>
            </div>
        </div>
        <div class="item-check-list">
            <div class="div-img-check">
                <div class="div-img-crm">
                    <img src="./img/check-icon.png" alt="">
                </div>
            </div>
            <div>
                <p>Os proprietários que ainda residem no imóvel </br>
                    não serão incomodados com visita constantes;</p>
            </div>
        </div>
    </div>

    <div class="div-fundo-verde">
        <p>ABAIXO UM EXEMPLO DA VISITA VIRTUAL</p>
    </div>

    <div class="container-iframe">
        <iframe width="100%" height="475" src="https://midas360.imb.br/visita_virtual/visita.php?i=MTMw&amp;b=MTk5OQ&amp;t=ae69de19a42c962a1bf99627753eb71a" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </div>
    <div class="botoes-flex">

        <div class="div-btn-proposta">
            <a href="https://www.sistemaparaimobiliaria.imb.br/midas360/">
                <button class="btn-saiba-mais-white">Saiba mais</button>
            </a>
        </div>
        <div class="div-btn-proposta">
            <a href="contato.php">
                <button class="btn-saiba-mais-white">Solicite contato</button>
            </a>
        </div>
    </div>

    <div class="div-area-cinza"></div>


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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#input-mensagem').val('Olá, tenho interesse em saber mais sobre a locação digital. Aguardo contato.')
        });
    </script>
</body>



</html>