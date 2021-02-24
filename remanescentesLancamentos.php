<!DOCTYPE html>
<html lang="en">



<?php include('header.php') ?>

<body>



    <div class="div-fundo-verde">
        <p>INCORPORE AO SEU ESTOQUE OS REMANESCENTES DOS PRINCIPAIS LANÇAMENTOS IMOBILIÁRIOS DO PAÍS</p>
    </div>

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
        <p>AUMENTE SUAS VENDAS E RESULTADOS</p>
    </div>

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
        <a href="./contato.php">
            <button class="btn-saiba-mais-green">SABER MAIS</button>
        </a>
    </div>


    <!-- FIM da area de funcionalidades -->

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
            $('#input-mensagem').val('Olá, tenho interesse em saber mais sobre os lançamentos remanecentes . Aguardo contato.')
        });
    </script>
</body>



</html>