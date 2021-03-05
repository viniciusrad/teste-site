<div class="area-contato" id="div-contato">
    <div class="div-texto-formulario">
        <p>O FUTURO DA SUA IMOBILIÁRIA COMEÇA AGORA!</p>
    </div>
    <div class="div-formulario">
        <div class="">
            <div class="cabecalho-formulario">
                <h3>Entre em contato</h3>
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
                <label for="contato"><span style="color: gray">Desejo receber contato por:</span></label>
                <div style="display: flex;">
                    <div class="div-radio-contato">
                        <input type="radio" id="whatsapp" name="forma-contato" value="whatsapp">
                        <label for="whatsapp"><i class="fab fa-whatsapp fa-lg" style="color: green;"></i> Whatsapp</label><br>
                    </div>
                    <div class="div-radio-contato">
                        <input type="radio" id="telefone" name="forma-contato" value="telefone" checked="checked">
                        <label for="telefone"><i class="fas fa-phone-alt fa-sm"></i> Telefone</label><br>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">

                <button type="submit" class="btn-enviar-formulario">Enviar</button>
            </div>
        </form>
    </div>
</div>