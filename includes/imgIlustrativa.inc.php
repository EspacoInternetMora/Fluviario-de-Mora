<?php

    if(isset($imgIllustrativa) && is_numeric($imgIllustrativa))
    {
        $imgIndex = (int)$imgIllustrativa;
        echo "<div id='imgIllustrativa'><figure>";

        switch($imgIndex)
        {
            // Exposições
            case 1 : echo "<img src='".path."imagens/exposicao.jpg'>";
                     echo "<figcaption>Mapa da Exposição</figcaption>";
                     break;
            // Percurso de um Rio
            case 11 : echo "<img src='".path."imagens/exposicao/percurso_rio.jpg'>";
                      echo "<figcaption>Percurso de um Rio</figcaption>";
                      break;
            // Monstros do Rio
            case 12 : echo "<img src='".path."imagens/exposicao/monstros_rio.jpg'>";
                echo "<figcaption>Monstros do Rio</figcaption>";
                break;
            // Lontrario
            case 13 : echo "<img src='".path."imagens/exposicao/lontrario.jpg'>";
                      echo "<figcaption>Lontrário</figcaption>";
                      break;
            // Sala Saramugo
            case 14 : echo "<img src='".path."imagens/exposicao/sala_saramugo.jpg'>";
                echo "<figcaption>Sala Saramugo</figcaption>";
                break;
            // Habitats Exoticos
            case 15 : echo "<img src='".path."imagens/exposicao/habitats_exoticos.jpg'>";
                echo "<figcaption>Habitats Exóticos</figcaption>";
                break;
            // Exposição Multimédia
            case 16 : echo "<img src='".path."imagens/exposicao/sala_multimedia.jpg'>";
                echo "<figcaption>Exposição Multimédia</figcaption>";
                break;
            
            // Sala de Aula
            case 17 : echo "<img src='".path."imagens/actividades/efemerides.jpg'>";
                echo "<figcaption>Sala de Aula</figcaption>";
                break;

            // Loja
            case 2 : echo "<img src='".path."imagens/loja.jpg'>";
                echo "<figcaption>Loja</figcaption>";
                break;

            // Restaurante
            case 3 : echo "<img src='".path."imagens/restaurante.jpg'>";
                echo "<figcaption>Restaurante</figcaption>";
                break;
            // Noticias
            case 4 : echo "<img src='".path."imagens/noticias.jpg'>";
                echo "<figcaption>Notícias</figcaption>";
                break;
            // Actividades
            case 5 : echo "<img src='".path."imagens/actividades.jpg'>";
                echo "<figcaption>Actividades</figcaption>";
                break;

            // Educaçao - Oficinas Ambientais
            case 51 : echo "<img src='".path."imagens/actividades/oficinas_ambientais.jpg'>";
                echo "<figcaption>Oficinas Ambientais</figcaption>";
                break;

            // Educaçao - Aventura Ambiental
            case 52 : echo "<img src='".path."imagens/actividades/aventura_ambiental.jpg'>";
                echo "<figcaption>Uma Aventura Ambiental</figcaption>";
                break;

            // Educaçao - Modulos de Visita
            case 53 : echo "<img src='".path."imagens/actividades/modulos_visita.jpg'>";
                echo "<figcaption class='stroke'>Planos de Visita</figcaption>";
                break;
                
            // Educaçao - Oficinas Ambientais Familias
            case 54 : echo "<img src='".path."imagens/actividades/aventura_ambiental.jpg'>";
                echo "<figcaption>Oficinas Ambientais para Famílias</figcaption>";
                break;
                
            // Educaçao - Férias
            case 55 : echo "<img src='".path."imagens/actividades/ferias.jpg'>";
                echo "<figcaption>Férias</figcaption>";
                break;
                
            // Educaçao - Efemerides
            case 56 : echo "<img src='".path."imagens/actividades/efemerides.jpg'>";
                echo "<figcaption>Efemérides</figcaption>";
                break;
                
            // Área Envolvente
            case 6 : echo "<img src='".path."imagens/areaEnvolvente.jpg'>";
                echo "<figcaption>Área Envolvente</figcaption>";
                break;
            
            // Missão
            case 7 : echo "<img src='".path."imagens/missao.jpg'>";
                echo "<figcaption>Missão</figcaption>";
                break;
            
            // Fluviário
            case 8 : echo "<img src='".path."imagens/fluviario.jpg'>";
                echo "<figcaption>Fluviário</figcaption>";
                break;
            
            // Passaporte Amigo do FLuviário
            case 9 : echo "<img src='".path."imagens/passaporte.jpg'>";
                echo "<figcaption>Passaporte Amigo do Fluviário</figcaption>";
                break;
                
            // Conservação
            case 10 : echo "<img src='".path."imagens/conservacao.jpg'>";
                echo "<figcaption>Conservação</figcaption>";
                break;
                
            // Contactos
            case 100 : echo "<img src='".path."imagens/passaporte.jpg'>";
                echo "<figcaption>Contactos</figcaption>";
                break;
                
            // Newsletter
            case 200 : echo "<img src='".path."imagens/passaporte.jpg'>";
                echo "<figcaption>Newsletter</figcaption>";
                break;

            default: break;
        }

        echo "</figure></div>";

    }

?>