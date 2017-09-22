<?php
    $imgIllustrativa = 4;
    require_once("includes/config.inc.php");
    require_once("includes/header.inc.php");
    require_once("includes/imgIlustrativa.inc.php");
?>

<div id="content">
    
    <!--<h1 id="titulo">
        Notícias
    </h1>-->

    <div id="newsPage" class="clearfix">
        <?php

            $xml = simplexml_load_file("data/noticias.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
            $numNews = count($xml);
            $c = 0;
            $numNewsPerPage = 5;

            if(isset($_GET['c']) && is_numeric($_GET['c']))
                $c = (int)$_GET['c'];

            if($numNews > 5)
            {
                if(($numNews-$c) < 5)
                    $numNewsPerPage = ($numNews-$c);

                for($i = 0; $i < $numNewsPerPage; $i++)
                {
                    $news = $xml->noticia[$i+$c];
                    echo "<div class='noticia'>";
                    echo "<h2>".$news->titulo."</h2>";
                    echo "<img src='".$news->imgUrl."'>";
                    echo $news->corpo;

                    // Trata Dos Anexos
                    if($news->anexo)
                    {
                        echo "<div class='anexos'>";
                        foreach($news->anexo as $anexo)
                        {
                            echo "<a href='".$anexo->link."'>".$anexo->nome."</a><br/>";
                        }
                        echo "</div>";
                    }
                    echo "</div>";
                }
            } else {
                foreach($xml->noticia as $news)
                {
                    // Atributo
                    //echo $news['index'];
                    echo "<div class='noticia'>";
                    echo "<h2>".$news->titulo."</h2>";
                    echo "<img src='".$news->imgUrl."'>";
                    echo $news->corpo;

                    // Trata Dos Anexos
                    if($news->anexo)
                    {
                        echo "<div class='anexos'>";
                        foreach($news->anexo as $anexo)
                        {
                            echo "<a href='".$anexo->link."'>".$anexo->nome."</a><br/>";
                        }
                        echo "</div>";
                    }
                    echo "</div>";
                }
            }

        ?>
    </div>

    <?php
        // Mostra os numeros das páginas no final da página
        if($numNews > 5)
        {
            $numPages = ceil($numNews/5);
            echo "<div id='pageNums' class='clearfix'>";
            echo "<a href='noticias.php'>1</a>";
            for($i = 1; $i < $numPages; $i++)
                echo "<a href='noticias.php?c=".($i*5)."'>".($i+1)."</a>";
            echo "</div>";
        }
    ?>

</div>
<?php
    require_once("includes/footer.inc.php");
?>