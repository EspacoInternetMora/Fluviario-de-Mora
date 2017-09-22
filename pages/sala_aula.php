<?php
    $imgIllustrativa = 17;
    require_once("../includes/config.inc.php");
    require_once("../includes/header.inc.php");
    require_once("../includes/imgIlustrativa.inc.php");
?>
    <div id="content">

        <p id="descricao">
            É na Sala de Aula, situada entre a Sala Saramugo e os Habitats Exóticos, que decorrem muitas das actividades do Fluviário de Mora. Este espaço encontra-se aberto e disponível a todos os visitantes que queiram usufruir das actividades do programa “QUATRO ESTAÇÕES NA SALA DE AULA” aí disponíveis, livres e gratuitas como actividades de pintura com o “Perfil de um Peixe”, modelagem com “O Rio nas tuas Mãos”, colagem na actividade “Colado ao Coração” e muitas outras como jogos, observação ao microscópio de revestimentos animais, e ciclo de vida de um peixe. A Sala de Aula pode encontrar-se temporariamente reservada por um grupo, não se encontrando acessível aos restantes visitantes durante esse período.
        </p>

        <?php require_once("../includes/eduSideMenu.inc.php"); ?>

        <?php
            $xml = simplexml_load_file("../data/sala_aula.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");

            echo "<div id='actividadesContainer'>";
            echo "<h2>Sala de Aula</h2>";

            $align = "left";

            foreach($xml->actividade as $actividades)
            {
                echo "<div class='actividade ".$align."'>";
                $align = ($align == "left") ? "right" : "left";
                    echo "<h3>".$actividades->nome."</h3>";
                
                    if(strlen($actividades->imgURL) > 0)
                        echo "<img src='".$actividades->imgURL."'>";
                
                    echo "<p>".$actividades->descricao."</p>";
                
                echo "</div>";
            }

        ?>

        <?php
            // Div de fecho da actividadesContainer
            echo "</div>";
        ?>

    </div>
<?php require_once("../includes/footer.inc.php"); ?>