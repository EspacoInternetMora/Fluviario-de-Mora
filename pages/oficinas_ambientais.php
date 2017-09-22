<?php
    if(isset($_GET['pa']) && is_numeric($_GET['pa'])) {
        $pa = (int)$_GET['pa'];
        if($pa < 0 || $pa > 5)
            header("Locate: ../educacao.php");
    } else
        header("Locate: ../educacao.php");



    $imgIllustrativa = 51;
    require_once("../includes/config.inc.php");
    require_once("../includes/header.inc.php");
    require_once("../includes/imgIlustrativa.inc.php");
?>
    <div id="content">

        <p id="descricao">
            As “Oficinas Ambientais” são o grupo de actividades que aliam a educação ambiental aos conteúdos curriculares de cada ciclo de ensino, e a forma ideal de complementar a visita guiada por um educador ambiental ou livre - sem ser guiada por um educador ambiental. Conheça os  planos de actividades com condições especiais para instituições de ensino.
        </p>

        <?php
            require_once("../includes/eduSideMenu.inc.php");
        ?>

        <!--<div id='actividadesContainer'>
            <h2>Oficinas Ambentais - </h2>
            <div class="actividade">
                <h3>Água limpa em 3 passos</h3>
                <img src="../imagens/eduAguaLimpa.jpg">
                <p>A água é um bem precioso da humanidade, e por isso, não podem faltar técnicas para a reaproveitar.</p>
            </div>
            <div class="spacer">&nbsp;</div>
            <div class="actividade">
                <h3>Caminhar sobre a Água</h3>
                <img src="../imagens/eduCaminharAgua.jpg">
                <p>Os níveis de organização da vida e a sensibilização para a pegada ecológica.</p>
            </div>
        </div>-->

        <?php
            $xml = simplexml_load_file("../data/oficinasAmbientais.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
            $dados = $xml->dados;

            echo "<div id='actividadesContainer'>";
            echo "<h2>Oficinas Ambentais - ".$xml->publicoAlvo[$pa]['tipo']."</h2>";

            $align = "left";

            foreach($xml->publicoAlvo[$pa] as $actividades)
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

        <div id="actividadesDados">
            <h2>Mais informações sobre as Actividades</h2>
            <p>Estas informações aplicam-se a todas as actividades indicadas em cima.</p>
            <p><b>Duração: </b><?php echo $dados->duracao; ?></p>
            <p><b>Mínimo de Pessoas: </b><?php echo $dados->min; ?></p>
            <p><b>Preço por Pessoa: </b><?php echo $dados->preco; ?></p>
            <p><b>Preço por Pessoa2: </b><?php echo $dados->preco2; ?></p>
        </div>

        <?php
            // Div de fecho da actividadesContainer
            echo "</div>";
        ?>

    </div>
<?php
    require_once("../includes/footer.inc.php");
?>