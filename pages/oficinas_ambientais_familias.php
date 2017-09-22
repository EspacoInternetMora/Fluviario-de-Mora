<?php
    $imgIllustrativa = 54;
    require_once("../includes/config.inc.php");
    require_once("../includes/header.inc.php");
    require_once("../includes/imgIlustrativa.inc.php");
?>
    <div id="content">

        <!--<p id="descricao">
            As “Oficinas Ambientais” são o grupo de actividades que aliam a educação ambiental aos conteúdos curriculares de cada ciclo de ensino, e a forma ideal de complementar a visita guiada por um educador ambiental ou livre - sem ser guiada por um educador ambiental. Conheça os módulos de actividades com condições especiais para instituições de ensino.
        </p>-->

        <?php require_once("../includes/eduSideMenu.inc.php"); ?>

        <?php
            $xml = simplexml_load_file("../data/oficinasAmbientaisFamilias.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
            $dados = $xml->dados;

            echo "<div id='actividadesContainer'>";
            echo "<h2>Oficinas Ambentais para Famílias</h2>";

            $align = "left";

            foreach($xml->actividade as $actividades)
            {
                echo "<div class='actividade ".$align."'>";
                $align = ($align == "left") ? "right" : "left";
                    echo "<h3>".$actividades->nome."</h3>";
                
                    if(strlen($actividades->imgURL) > 0)
                        echo "<img src='".$actividades->imgURL."'>";
                
                    echo "<p>".$actividades->descricao."</p>";
                    
                    if(strlen($actividades->obs) > 0)
                        echo "<p><strong>Outras informações:</strong> ".$actividades->obs."</p>";
                
                echo "</div>";
            }

        ?>

        <div id="actividadesDados">
            <h2>Mais informações sobre as Actividades</h2>
            <p>Estas informações aplicam-se a todas as actividades indicadas em cima.</p>
            <p><b>Oficinas Ambientais para Famílias: </b><?php echo $dados->desc; ?></p>
            <p><b>Horário: </b><?php echo $dados->horario; ?></p>
            <p><b>Duração: </b><?php echo $dados->duracao; ?></p>
            <p><b>Preço por Pessoa: </b><?php echo $dados->preco; ?></p>
            <p><b>Outras Informações: </b><?php echo $dados->obs; ?></p>
        </div>

        <?php
            // Div de fecho da actividadesContainer
            echo "</div>";
        ?>

    </div>
<?php require_once("../includes/footer.inc.php"); ?>