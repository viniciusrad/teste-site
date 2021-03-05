<!DOCTYPE html>
<html lang="en">



<?php include('header.php') ?>

<body>

    <div class="div-fundo-verde">
        <p>LOCAÇÃO DIGITAL:</p>
        <p>dê o primeiro passo para digitalização da sua imobiliária</p>
    </div>

    <div class="div-crm">
        <div class="div-img-crm" style="max-width: 1100px">
            <img src="img/esteira-locacao-digital.png" alt="">
        </div>
    </div>

    <div class="div-texto-centralizado">
        <p><strong style="font-size: 1.4em;">Um processo de locação sem desgastes. O locador sabe exatamente em que etapa o processo se encontra. O locatário consegue enviar documentos pelo celular ou computador. A imobiliária tem maior controle sobre tudo e consegue cortar gastos.</strong></p>
    </div>

    <div class=" div-fundo-verde">
        <p>AGILIDADE NAS TRANSAÇÕES IMOBILIÁRIAS</p>
    </div>

    <!-- area de funcionalidades -->
    <div class="div-funcionalidades-flex">
        <div class="card-funcionalidade min-width-25percent">
            <div class="div-icone-check">
                <img class="img-icone-check" src="img/icone-loc-crm.png" alt="Avatar">
            </div>
            <div class="container container-check">
                <p class="textos-icones-check">Integrado ao CRM Midas.</p>
            </div>
        </div>
        <div class="card-funcionalidade min-width-25percent">
            <div class="div-icone-check">
                <img class="img-icone-check" src="img/icone-loc-proposta.png" alt="Avatar">
            </div>
            <div class="container container-check">
                <p class="textos-icones-check">O envio dos documentos de forma facilitada é o primeiro passo até o fechamento de contrato.</p>
            </div>
        </div>
        <div class="card-funcionalidade min-width-25percent">
            <div class="div-icone-check">
                <img class="img-icone-check" src="img/icone-loc-analise.png" alt="Avatar">
            </div>
            <div class="container container-check">
                <p class="textos-icones-check">A análise de crédito é sempre um momento decisivo, e a experiência do cliente vale</p>
            </div>
        </div>
        <div class="card-funcionalidade min-width-25percent">
            <div class="div-icone-check">
                <img class="img-icone-check" src="img/icone-loc-garantia.png" alt="Avatar">
            </div>
            <div class="container container-check">
                <p class="textos-icones-check">Acesso a soluções para contratação de garantia, totalmente online e com muita segurança.</p>
            </div>
        </div>
        <div class="card-funcionalidade min-width-25percent">
            <div class="div-icone-check">
                <img class="img-icone-check" src="img/icone-loc-vistoria.png" alt="Avatar">
            </div>
            <div class="container container-check">
                <p class="textos-icones-check">Solicite vistorias imobiliárias e acompanhe o progresso da atividade.</p>
            </div>
        </div>
        <div class="card-funcionalidade min-width-25percent">
            <div class="div-icone-check">
                <img class="img-icone-check" src="img/icone-loc-contrato.png" alt="Avatar">
            </div>
            <div class="container container-check">
                <p class="textos-icones-check">A análise de crédito é sempre um momento decisivo, e a experiência do cliente vale muitos pontos nesse sentido.</p>
            </div>
        </div>
        <div class="card-funcionalidade min-width-25percent">
            <div class="div-icone-check">
                <img class="img-icone-check" src="img/icone-loc-erp.png" alt="Avatar">
            </div>
            <div class="container container-check">
                <p class="textos-icones-check">Integramos nossa plataforma com o ERP do seu dia-a-dia.</p>
            </div>
        </div>
    </div>

    <div class="div-texto-centralizado">
        <a href="#div-contato">
            <button class="btn-saiba-mais-green">QUERO DIGITALIZAR</button>
        </a>
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