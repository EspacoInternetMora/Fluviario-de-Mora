<?php
    $imgIllustrativa = 53;
    require_once("../includes/config.inc.php");
    require_once("../includes/header.inc.php");
    require_once("../includes/imgIlustrativa.inc.php");
?>
    <div id="content">

        <!--<p id="descricao">
            Uma Aventura Ambiental no Fluviário é o nome do conjunto de actividades com pré-marcação, disponíveis a todos os visitantes e a todas as visitas livres e guiadas. Este conjunto de actividades encontra-se inserido na área de conhecimento do mundo e das experiências de vida, proporcionando um contacto mais estreito com este grande aquário público e certamente experiências enriquecedoras.
        </p>-->

        <?php
        require_once("../includes/eduSideMenu.inc.php");
        ?>

        <?php
        $xml = simplexml_load_file("../data/actividadesLowCost.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
        $dados = $xml->dados;

        echo "<div id='actividadesContainer'>";
        echo "<h2>Actividades Low Cost</h2>";

        $align = "left";
        foreach($xml->modulos as $actividade)
        {
            echo "<div class='actividade ".$align."'>";
            $align = ($align == "left") ? "right" : "left";
            echo "<h3>".$actividade->nome."</h3>";
            echo "<p><b>Descrição da Integração de Actividades:</b></p>";
            echo "<p>".$actividade->descricao."</p>";
            echo "<p><b>Público Alvo: </b>".$actividade->publicoAlvo."</p>";

            if(isset($actividade->horario))
                echo "<p><b>Horário: </b>".$actividade->horario."</p>";
            
            if(strlen($actividade->min) > 0)
                echo "<p><b>Mínimo de Participantes: </b>".$actividade->min."</p>";

            foreach($actividade->precos as $preco)
            {
                echo "<p><b>".$preco->pa.": </b>".$preco->preco."</p>";
            }
            
            if(strlen($actividade->duracao) > 0)
                echo "<p><b>Duração Aproximada: </b>".$actividade->duracao."</p>";
            
            if(strlen($actividade->obs) > 0)
                echo "<p><b>Outras Informações: </b>".$actividade->obs."</p>";

            echo "</div>";
        }

        echo "</div>";

        ?>
    </div>

<?php
    require_once("../includes/footer.inc.php");
?>