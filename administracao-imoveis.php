<?php
$tituloPagina = "Sistema para Locação de Imóveis";
$descricao = "Administre a locação de imóveis de forma inteligente e ágil.";

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.php') ?>

<body>



    <div class="div-fundo-verde">
        <h1>Sistema de administração de Locação de Imóveis</h1>
    </div>
    <!-- <h3 style="text-align: center;">ADMINISTRE A LOCAÇÃO DE IMÓVEIS DE FORMA INTELIGENTE E ÁGIL</h3> -->
    <div class="div-crm">
        <div class="div-img-crm" style="max-width: 800px; display: flex;">
            <img src="img/administracao-imoveis.jpg" alt="">
        </div>
        <div class="texto-crm font-14rem">
            <p>Este sistema foi projetado tendo como princípios a facilidade de uso/entendimento, informações complexas, agilidade no manuseio e segurança das informações cadastradas. Aliado a isso temos o nosso atendimento pós-venda, um verdadeiro diferencial entre nossos concorrentes, pois utilizamos o método "escada", ou seja, um passo de cada vez, onde todo novo cadastramento feito no sistema ou novo processamento a ser ensinado terá um acompanhamento, passo a passo com nossos atendentes especializados exclusivamente em seu negócio. Conecte-se ao seu sistema de onde estiver. Este sistema foi projetado com foco na facilidade de uso e está preparado para a nova realidade do mercado imobiliário onde você e sua equipe vão poder trabalhar em home-office ou presencial via internet com informações completas e mais agilidade no seu dia</p>


        </div>
    </div>



    <div class="div-fundo-verde">
        <h2>Administre a locação de imóveis de forma inteligente e ágil</h2>
    </div>
    <h3 class="sub-titulo-centralizado" style="margin-bottom: 2rem;">Conheça as principais características do sistema</h3>
    <div class="div-check-dupla">
        <div>

            <div class="item-check-list-site">
                <div class="div-img-check-dupla">
                    <div class="    ">
                        <img src="./img/check-icon.png" alt="">
                    </div>
                </div>
                <div class="texto-check-site negrito max-width-375px">
                    <p>Disponibilize a 2ª via de boletos e prestações de contas no seu site automaticamente.</p>
                </div>
            </div>
            <div class="item-check-list-site">
                <div class="div-img-check-dupla">
                    <div class="    ">
                        <img src="./img/check-icon.png" alt="">
                    </div>
                </div>
                <div class="texto-check-site negrito max-width-375px">
                    <p>Monte recibos de forma simples com auxílio da agenda financeira.</p>
                </div>
            </div>
            <div class="item-check-list-site">
                <div class="div-img-check-dupla">
                    <div class="    ">
                        <img src="./img/check-icon.png" alt="">
                    </div>
                </div>
                <div class="texto-check-site negrito max-width-375px">
                    <p>Envie boletos para inquilinos e extratos para proprietários via email, diminuindo custo de Correio e impressão.</p>
                </div>
            </div>
            <div class="item-check-list-site">
                <div class="div-img-check-dupla">
                    <div class="    ">
                        <img src="./img/check-icon.png" alt="">
                    </div>
                </div>
                <div class="texto-check-site negrito max-width-375px">
                    <p>Baixe os pagamentos de forma rápida através de importação do arquivo bancário.</p>
                </div>
            </div>

        </div>
        <div>

            <div class="item-check-list-site">
                <div class="div-img-check-dupla">
                    <div class="    ">
                        <img src="./img/check-icon.png" alt="">
                    </div>
                </div>
                <div class="texto-check-site negrito max-width-375px">
                    <p>Gere o arquivo para DIMOB, NF-E e DARF automaticamente através do sistema.</p>
                </div>
            </div>
            <div class="item-check-list-site">
                <div class="div-img-check-dupla">
                    <div class="    ">
                        <img src="./img/check-icon.png" alt="">
                    </div>
                </div>
                <div class="texto-check-site negrito max-width-375px">
                    <p>Faça o pagamento dos proprietários eletronicamente.</p>
                </div>
            </div>
            <div class="item-check-list-site">
                <div class="div-img-check-dupla">
                    <div class="    ">
                        <img src="./img/check-icon.png" alt="">
                    </div>
                </div>
                <div class="texto-check-site negrito max-width-375px">
                    <p>Envie um SMS para os proprietários, informando sobre o pagamento depositado em conta.</p>
                </div>
            </div>
            <div class="item-check-list-site">
                <div class="div-img-check-dupla">
                    <div class="    ">
                        <img src="./img/check-icon.png" alt="">
                    </div>
                </div>
                <div class="texto-check-site negrito max-width-375px">
                    <p>Automatize a emissão de cartas de cobrança através do sistema.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="div-texto-centralizado">
        <a href="#div-contato">
            <button class="btn-saiba-mais-black">Solicite contato</button>
        </a>
    </div>


    <!--  -->
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
            $('#input-mensagem').val('Olá, tenho interesse em saber mais sobre a administração de imóveis. Aguardo contato.')

            $('#card-adm').css("display", "none")

        });
    </script>
</body>



</html>