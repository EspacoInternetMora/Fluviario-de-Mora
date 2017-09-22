<!--<h1>Notícias</h1>-->

<?php

$xml = simplexml_load_file("data/noticias.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");

for($i = 0; $i < 2; $i++)
{
    $news = $xml->noticia[$i];
    echo "<div class='noticia'>";
    
    if(strlen($news->titulo) < 55)
        echo "<h2>".$news->titulo."</h2>";
    else
        echo "<h2 style='font-size:1.35em;'>".$news->titulo."</h2>";
    
    //echo "<h2>".$news->titulo."</h2>";
    echo "<img src='".$news->imgUrl."'>";
    
    if(strlen($news->corpo) < 900)
        echo $news->corpo;
    else {
        echo substr($news->corpo, 0, 900);
        echo "...  ";
        echo "<strong><a href='noticias.php'>Ver mais</a></strong>";
    }

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

?>

<div id="maisNoticiasBtn">
    <a href="noticias.php">Ver mais notícias</a>
</div>