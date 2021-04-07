<?php
$tituloPagina = "Venda empreendimentos imobiliários remanescentes";
$descricao = "Comericialize os remanescenes dos empreendimentos imobiliários das principais incorporadoras do país. ";

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.php') ?>

<body>



    <div class="div-fundo-verde">
        <h1>Tenha acesso aos melhores empreendimentos imobiliários do mercado</h1>
    </div>
    <h3 class="sub-titulo-centralizado">INCORPORE AO SEU ESTOQUE OS REMANESCENTES DOS PRINCIPAIS LANÇAMENTOS IMOBILIÁRIOS DO PAÍS</h3>

    <div class="div-crm">
        <div class="div-img-crm">
            <img src="img/predios-azuis.jpeg" alt="">
        </div>
        <div class="texto-remanecentes">
            <p>Obtenha acesso aos mapas de disponibilidades, listas de preços, memoriais de incorporação das unidades remanescentes dos lançamentos das principais incorporadoras do país.</p>
            </br>
            <p>Divulgue em seu site, portais, redes sociais e Whatsapp. Nas incorporadoras você irá dispor de um contato para auxiliá-lo a fechar negócios.</p>

        </div>
    </div>

    <div class="div-fundo-verde">
        <h2>Encontre com agilidade imóveis remanescentes de lançamentos para fechar mais negócios</h2>
    </div>
    <h3 class="sub-titulo-centralizado">AUMENTE SUAS VENDAS E RESULTADOS</h3>

    <!-- area de funcionalidades -->
    <div class="div-funcionalidades-flex">
        <div class="card-funcionalidade card-funcionalidade-locacao">
            <h1 class="numero-centralizado-verde">894</h1>
            <P class="tx-cinza-bold font-2rem">INCORPORADORAS DE TODO O BRASIL</p>
        </div>
        <div class="card-funcionalidade card-funcionalidade-locacao">
            <h1 class="numero-centralizado-verde">17.7K</h1>
            <P class="tx-cinza-bold font-2rem">EMPREENDIMENTOS IMOBILIÁRIOS</p>
        </div>
        <div class="card-funcionalidade card-funcionalidade-locacao">
            <h1 class="numero-centralizado-verde">668.7K</h1>
            <P class="tx-cinza-bold font-2rem">UNIDADES CADASTRADAS</p>
        </div>

    </div>


    <div class="div-texto-centralizado">
        Você integrará seu sistema Midas à uma plataforma de marketplace B2B para imóveis residenciais e comerciais no Brasil. Esta integração une tecnologia e relacionamento com todos os setores imobiliários para organizar, qualificar e integrar as informações do mercado, democratizando o acesso aos dados. Focamos no desenvolvimento de tecnologia e processos que apoiem a desfragmentação descentralizada das informações sobre imóveis e no aprimoramento da experiência de compra, impulsionando o crescimento de um mercado mais colaborativo. Acreditamos que o caminho é a integração. É por isso que derrubamos barreiras entre corretores, imobiliárias e incorporadores e clientes a fim de estimular diálogos e fomentar novas parcerias
    </div>

    <div class="div-texto-centralizado">
        Esta integração objetiva contribuir para a construção de um mercado imobiliário mais promissor e democrático, onde novos produtos nascem com mais garantia de sucesso e clientes encontram com mais facilidade ambientes com as características que procuram. Além de imóveis de lançamentos vc também poderá incorporar ao seu banco de dados os imóveis pertencentes a Loft, grande investidora do mercado imobiliário brasileiro.
    </div>

    <div class="div-texto-centralizado">
        <a href="#div-contato">
            <button class="btn-saiba-mais-black">Solicite contato</button>
        </a>
    </div>


    <!-- FIM da area de funcionalidades -->


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
            $('#input-mensagem').val('Olá, tenho interesse em saber mais sobre os imóveis remanescentes de lançamentos. Aguardo contato.')

            $('#card-remanescentes').css("display", "none")

        });
    </script>
</body>



</html>