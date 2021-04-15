<?php
$tituloPagina = "Visita Virtual à imóveis - Midas";
$descricao = "Otmize o tempo gasto em visitas utilizando a nossa visita virtual.";

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.php') ?>

<body>

    <div class="div-fundo-verde">
        <h1>A visita virtual fará suas visitas mais objetivas e assertivas</h1>
    </div>

    <div class="div-crm">
        <div class="div-img-crm">
            <img src="img/tour-virtual.jpg" alt="">
        </div>
    </div>

    <p class="texto-destaque">A visita virtual vem substituindo as fotografias convencionais, pois permite que o cliente visite todas as partes de seu imóvel através de qualquer dispositivo com acesso à Internet como se estivesse fisicamente no local.</p>

    <div class="div-fundo-verde">
        <h2>A visita virtual é a mais nova tecnologia do mercado imobiliário.</h2>
    </div>
    <h3 class="sub-titulo-centralizado" style="margin-bottom: 4rem">VANTAGENS DA VISITA VIRTUAL:</h3>
    <div class="div-check" style="
    font-weight: 600;
    font-size: 1.4rem;
    margin: -2rem 1rem;
    ">
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
                <p>Os proprietários que ainda residem no imóvel</br>
                    não serão incomodados com visitas constantes;</p>
            </div>
        </div>
        <div class="item-check-list">
            <div class="div-img-check">
                <div class="div-img-crm">
                    <img src="./img/check-icon.png" alt="">
                </div>
            </div>
            <div>
                <p>Os compradores e locatários se sentirão mais confortáveis;</p>
            </div>
        </div>
        <div class="item-check-list">
            <div class="div-img-check">
                <div class="div-img-crm">
                    <img src="./img/check-icon.png" alt="">
                </div>
            </div>
            <div>
                <p>Sua equipe só irá realizar visitas reais aos imóveis após </br>
                    os interessados terem realizado as visitas virtuais;</p>
            </div>
        </div>
        <div class="item-check-list">
            <div class="div-img-check">
                <div class="div-img-crm">
                    <img src="./img/check-icon.png" alt="">
                </div>
            </div>
            <div>
                <p>Menos visitas com grandes chances de fechamento.</p>
            </div>
        </div>
    </div>

    <div class="div-fundo-verde">
        <h2>A visita virtual é a mais nova tecnologia do mercado imobiliário.</h2>
    </div>

    <div class="container-iframe">
        <iframe width="100%" height="475" src="https://midas360.imb.br/visita_virtual/visita.php?i=MTMw&amp;b=MTk5OQ&amp;t=ae69de19a42c962a1bf99627753eb71a" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </div>
    <div class="botoes-flex">

        <div class="div-btn-proposta">
            <a href="acesso-360">
                <button class="btn-saiba-mais-white">Saiba mais</button>
            </a>
        </div>
        <div class="div-btn-proposta">
            <a href="#div-contato">
                <button class="btn-saiba-mais-white">Solicite contato</button>
            </a>
        </div>
    </div>




    <!-- area de servicos -->
    <?php
    include('area-servicos.php')
    ?>
    <!-- fim area de servicos  -->

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
            $('#input-mensagem').val('Olá, tenho interesse em saber mais sobre a visita virtual. Aguardo contato.')

            $('#card-visita-virtual').css("display", "none")

        });
    </script>
</body>



</html>