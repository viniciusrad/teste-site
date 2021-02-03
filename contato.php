<!DOCTYPE html>
<html lang="en">



<?php include('header.php') ?>

<body>




    <div class="div-imagem-fundo-contato">
        <p>PREENCHA O FORMULÁRIO E RECEBA O CONTATO DE UM ESPECIALISTA MIDAS.</p>
    </div>



    <!-- area de contato -->
    <div class="form-contato">

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



    <!--  -->
    <!--  -->
    <!--  -->
    <!-- Modal -->
    <div class="modal fade" id="modalBaner" tabindex="-1" role="dialog" aria-labelledby="modalBanerLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBanerLabel">Titulo da campanha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="img/fundo2.jpg" alt="">
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
        // $(window).on('load', function() {
        //     $('#modalBaner').modal('show');
        // });
    </script>
</body>



</html>