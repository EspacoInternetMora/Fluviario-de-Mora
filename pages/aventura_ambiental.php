<?php
    $imgIllustrativa = 52;
    require_once("../includes/config.inc.php");
    require_once("../includes/header.inc.php");
    require_once("../includes/imgIlustrativa.inc.php");
?>

<div id="content">

    <p id="descricao">
        Com estas actividades participe e conheça um pouco mais sobre este espaço, seus habitantes e área envolvente, de uma forma lúdica e pedagógica. Complemente a sua visita guiada por um educador ambiental ou livre (sem ser guiada por um educador ambiental) com estas actividades para um dia bem passado.
    </p>

    <?php
        require_once("../includes/eduSideMenu.inc.php");
    ?>

    <?php
        $xml = simplexml_load_file("../data/aventuraAmbiental.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");

        echo "<div id='actividadesContainer'>";
        echo "<h2>Uma Aventura Ambiental</h2>";

        $align = "left";
        foreach($xml->actividade as $actividade)
        {
            echo "<div class='actividade ".$align."'>";
            $align = ($align == "left") ? "right" : "left";
            echo "<h3>".$actividade->nome."</h3>";
            echo "<img src='".$actividade->imgURL."'>";
            echo "<p>".$actividade->descricao."</p>";
            //echo "<p class='notas'><em><b>Notas: </b>".$actividade->notas."</em></p>";
            //echo "<p><b>Período: </b>".$actividade->periodo."</p>";
            echo "<p><b>Horário: </b>".$actividade->horario."</p>";
            echo "<p><b>Duração: </b>".$actividade->duracao."</p>";
            
            if(strlen($actividade->min) > 0)
                echo "<p><b>Mínimo de participantes: </b>".$actividade->min."</p>";
            
            if(strlen($actividade->max) > 0)
                echo "<p><b>Máximo de Participantes: </b>".$actividade->max."</p>";
            
            echo "<p><b>Preço: </b>".$actividade->preco."</p>";
            //if(isset($actividade->preco2))
                //echo "<p><b>Preço 2: </b>".$actividade->preco2."</p>";
            
            if(strlen($actividade->obs) > 0)
                echo "<p><b>Outras informações: </b>".$actividade->obs."</p>";
            echo "</div>";
        }
        echo "</div>";

    ?>
</div>

<?php
    require_once("../includes/footer.inc.php");
?>