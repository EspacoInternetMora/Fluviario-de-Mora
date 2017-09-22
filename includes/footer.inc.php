<footer>

    <div id="links">
        <!--<a href="#">Sobre nós</a> | 
        <a href="<?php //echo path; ?>contactos.php">Contactos</a> -->
        <!--<a href="#">Acordos comerciais</a> | 
        <a href="#"> Acordos institucionais</a> | 
        <a href="#">Links</a>-->
        <p>Fluviário de Mora © 2015</p>
        <div id="logosInstitucionais">
            <a href="http://www.cm-mora.pt" target="_blank" title="Câmara Municipal de Mora"><img src="<?php echo path; ?>imagens/cmmora_logo.jpg" alt="Logotipo da Câmara Municipal de Mora"></a>
            <a href="http://www.museumegalitismomora.pt" target="_blank" title="Museu Interactivo do Megalitismo"><img src="<?php echo path; ?>imagens/LogotipoMuseuMegalitismo.png" alt="Logotipo do Museu do Megalitismo"></a>
            <img src="<?php echo path; ?>imagens/selo2.png" />
        </div>
    </div>

    <div id="redesSociais">
        <p>Siga-nos!</p>
        <div id="socialIcons">
            <a href="https://www.facebook.com/fluviariodemora" target="_blank"><img src="<?php echo path; ?>imagens/sociaisFacebookBlue.png"></a>
            <a href="https://www.instagram.com/fluviariomora/" target="_blank"><img src="<?php echo path; ?>imagens/instagram.png"></a>
        </div>
    </div>

    <div id="newsletter">
        <form action="scripts/subscrever.php" method="post">
            <p>Subscreva a nossa Newsletter</p>
            <input type="email" name="email" placeholder="Endereço de e-mail" id="email">
            <input type="submit" name="submit" value="Subscrever" id="botaoNewsletter">
            <input type="hidden" name="enviado" value="true">
        </form>
    </div>

</footer>
</body>
</html>