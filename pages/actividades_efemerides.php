<?php
    $imgIllustrativa = 56;
    require_once("../includes/config.inc.php");
    require_once("../includes/header.inc.php");
    require_once("../includes/imgIlustrativa.inc.php");
?>
    <div id="content">

        <p id="descricao">
            “No Fluviário de Mora também se comemora” é o programa de comemoração de algumas efemérides no Fluviário. Fique atento ao nosso site e facebook.
        </p>

        <?php require_once("../includes/eduSideMenu.inc.php"); ?>

        <?php
            $xml = simplexml_load_file("../data/efemerides.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");

            echo "<div id='actividadesContainer'>";
            echo "<h2>Efemérides</h2>";

            $align = "left";

            foreach($xml->actividade as $actividades)
            {
                echo "<div class='actividade ".$align."'>";
                $align = ($align == "left") ? "right" : "left";
                    echo "<h3>".$actividades->nome."</h3>";
                
                    if(strlen($actividades->imgURL) > 0)
                        echo "<img src='".$actividades->imgURL."'>";
                
                    echo "<p><strong>".$actividades->descricao."</strong></p>";
                    
                    if(strlen($actividades->datas) > 0)
                        echo "<p>".$actividades->datas."</p>";
                
                echo "</div>";
            }

        ?>

        <?php
            // Div de fecho da actividadesContainer
            echo "</div>";
        ?>

    </div>
<?php require_once("../includes/footer.inc.php"); ?>