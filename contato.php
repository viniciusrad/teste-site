<!DOCTYPE html>
<html lang="en">



<?php include('header.php') ?>

<body>




    <!-- <div class="div-imagem-fundo-contato">
        <p>PREENCHA O FORMULÁRIO E RECEBA O CONTATO DE UM ESPECIALISTA MIDAS.</p>
    </div> -->



    <!-- area de contato -->
    <!-- <div class="form-contato">

        <div class="div-formulario formulario-contato">
            <form action="">
                <hr>
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
                    <textarea rows="4" name="mensagem" id="input-mensagem">Olá, tenho interesse em saber mais sobre o Midas. Aguardo contato.</textarea>
                </div>

            </form>
        </div>
    </div> -->

    <!-- area de contato -->

    <?php
    // include('area-contato.php')
    ?>




    <div class="area-contato" id="div-contato" style="background-color: #eeeeee;">
        <div class="div-texto-formulario">
            <p style="color: black;">O FUTURO DA SUA IMOBILIÁRIA COMEÇA AGORA!</p>
        </div>
        <div class="div-formulario">
            <div class="">
                <div class="cabecalho-formulario">
                    <h3>Solicite contato</h3>
                </div>
                <p class="text-align-left"><span style="color: #F97824; text-transform: uppercase;">(*)Campos Obrigatórios</span></p>
                <p class="text-align-left"><span style="color: #F97824; text-transform: uppercase;">(**)Pelo menos um campo deve serpreenchido</span></p>
            </div>
            <p class="subtitulo-formulario">Preencha os Campos abaixo</p>
            <form method="post" action="enviaEmail.php">
                <div class="div-field">
                    <div style="display: flex;">

                        <input type="text" name="nome" id="input-nome" placeholder="Digite seu nome"><span class="spam-obrigatorio" style="color: #F97824;">(*)</span>
                    </div>
                </div>
                <div class="div-field">
                    <div style="display: flex;">
                        <input type="text" name="e-mail" id="input-e-mail" placeholder="Digite seu email"><span class="spam-obrigatorio" style="color: #F97824;">(**)</span>
                    </div>
                </div>
                <div class="div-field">
                    <div style="display: flex;">
                        <input type="text" name="telefone" id="input-telefone" placeholder="Digite seu telefone"><span class="spam-obrigatorio" style="color: #F97824;">(**)</span>
                    </div>
                </div>
                <div class="div-field">
                    <textarea rows="4" cols="3" name="mensagem" id="input-mensagem" placeholder="">Olá, tenho interesse em saber mais sobre o Midas. Aguardo contato.</textarea>
                </div>
                <div class="div-field">
                    <label for="contato"><span style="color: gray">Fale agora com um de nossos especialistas:</span></label>
                    <div class="div-icone-whatsapp-centralizado">
                        <a class="contato-telefone-whatsapp" href="http://api.whatsapp.com/send?1=pt_BR&phone=55<?php echo $telefoneComercial; ?>" target="_blank">
                            <i class="fa fa-whatsapp icone-whatsapp"></i>
                        </a>
                    </div>


                    <!-- <div style="display: flex;">
                    <div class="div-radio-contato">
                        <input type="radio" id="whatsapp" name="forma-contato" value="whatsapp">
                        <label for="whatsapp"><i class="fab fa-whatsapp fa-lg" style="color: green;"></i> Whatsapp</label><br>
                    </div>
                    <div class="div-radio-contato">
                        <input type="radio" id="telefone" name="forma-contato" value="telefone" checked="checked">
                        <label for="telefone"><i class="fas fa-phone-alt fa-sm"></i> Telefone</label><br>
                    </div>
                </div> -->
                </div>
                <div style="display: flex; justify-content: center;">

                    <button type="submit" class="btn-enviar-formulario">Enviar</button>
                </div>
            </form>
        </div>
    </div>



    <!-- FIM da area de contato -->


    <!-- rodapé -->
    <?php
    include('area-rodape.php')
    ?>



</body>



</html>