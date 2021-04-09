<footer>
    <div class="rodape">
        <div>
            <h3 class="texto-centralizado">MIDAS MAIS</h3>
            <p class="texto-centralizado">As soluções MIDAS vem deixando sua marca de sucesso em cada uma das Empresas que procuram utilizar o máximo da tecnologia em favor dos seus negócios.</p>
        </div>

        <!-- whatsappp link -->
        <div class="container-whatsapp">
            <a class="contato-telefone-whatsapp" href="http://api.whatsapp.com/send?1=pt_BR&phone=55<?php echo $telefoneComercial; ?>" target="_blank">
                <i class="fa fa-whatsapp icone-whatsapp"></i>
            </a>
        </div>

    </div>
</footer>

<script>
    $(document).ready(function() {
        $(".contato-telefone-whatsapp").click(function(e) {
            // funcionona//
            // e.preventDefault();
            // $.ajax({
            //     type: "POST",
            //     url: "gerenciaTelefones.php",
            //     data: {
            //         telefoneComercial: <?php echo $telefoneComercial ?>
            //     },
            //     success: function(res) {
            //         alert("conseguiu:" + res)
            //     }
            // });


            // var jqxhr = $.post("gerenciaTelefones.php?proximo=10", function() {
            //     alert("success");
            // })
        });
    })
</script>