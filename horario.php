<?php
    require_once("includes/config.inc.php");
    require_once("includes/header.inc.php");
    require_once("includes/slider.inc.php");
?>

<div id="content">

    <?php
        require_once("includes/sidebar.inc.php");
    ?>

    <div id="mainContent">
        <h2>Horário</h2>

        <div id="horario">

            <div class="estacao">
                <img src="imagens/sol.png">
                <p>Verão</p>
                <p>Abertura - 10h00<br>Encerramento - 19h00</p>
            </div>

            <div class="estacao">
                <img src="imagens/nuvens.png">
                <p>Inverno</p>
                <p>Abertura - 10h00<br>Encerramento - 17h00</p>
            </div>

            <p>Os horários de Verão e de Inverno alternam nos dias de mudança da hora legal. </p>
            <p>O Fluviário encontra-se encerrado ao público nos dias <b>25 de Dezembro</b> e <b>1 de Janeiro (parte da manhã)</b>. No dia <b>1 de Janeiro</b> estamos abertos ao público da parte da tarde das 13h00 às 17h00.</p>

        </div>
    </div>

</div>

<?php
    require_once("includes/footer.inc.php");
?>