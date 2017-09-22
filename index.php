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
        <div class='noticia'>
        <h2>O Fluviário de Mora</h2>   
        <p style="width: 100%; margin-bottom: 30px;">
        O Fluviário de Mora é um aquário público dedicado aos ecossistemas de água doce, privilegiando o conhecimento da sua diversidade, importância e relação com a humanidade. Foi inaugurado a 21 de Março de 2007 e ao longo da visita ficará a conhecer algumas das espécies dulciaquícolas de Portugal da nascente até à foz, outras que ocorrem na Península Ibérica, e também da bacia hidrográfica do rio Amazonas e dos grandes lagos africanos do vale do Rift. Com a água doce como tema transversal a diversas áreas de conhecimento e culturas, a visita a este aquário é um local de sensibilização para cuidarmos desses ecossistemas que albergam uma enorme diversidade, apesar da água doce disponível em estado líquido à superfície constituir somente 0,01% de toda a água do planeta Terra.
        </p>
        </div>
        
        <?php require_once("includes/noticias.inc.php"); ?>
    </div>

</div>

<?php
    require_once("includes/footer.inc.php");
?>