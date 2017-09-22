<!DOCTYPE html>
<html>
<head lang="pt">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo path; ?>imagens/icon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo path; ?>imagens/icon.ico" type="image/x-icon">
    <script src="<?php echo path; ?>scripts/jquery-1.11.2.min.js"></script>
    <script src="<?php echo path; ?>scripts/script.js"></script>
    <link href="<?php echo path; ?>estilos/estilos.css" rel="stylesheet">
    <title>Fluviário de Mora</title>
</head>

<body>
<header class="clearfix">
    <a href="<?php echo path; ?>index.php"><img src="<?php echo path; ?>imagens/fluviario_logotipo_transparente.gif"></a>

    <nav>
        <a href="#" id="pull">Menu</a>
        <ul class="clearfix" id="menu">
            <!--<li id="fluviarioSubMenu"><a href="<?php echo path; ?>fluviario.php">Fluviário</a>-->
               <li id="fluviarioSubMenu"><a href="#">Fluviário</a>
                <ul>
                    <!--<li class="mobileMenu"><a href="<?php echo path; ?>bilheteira.php">Bilheteira</a></li>
                    <li class="mobileMenu"><a href="<?php echo path; ?>horario.php">Horário</a></li>
                    <li class="mobileMenu"><a href="<?php echo path; ?>comoChegar.php">Como Chegar</a></li>-->
                    <li><a href="<?php echo path; ?>missao.php">Missão</a></li>
                    <li><a href="<?php echo path; ?>educacao.php">Actividades</a></li>
                    <li><a href="<?php echo path; ?>conservacao.php">Conservação</a></li>
                    <li><a href="<?php echo path; ?>passaporte.php">Passaporte Amigo</a></li>
                    <li><a href="<?php echo path; ?>areaEnvolvente.php">Área Envolvente</a></li>
                    <li><a href="<?php echo path; ?>contactos.php">Contactos</a></li>
                </ul>
            </li>
            <!--<li id="exposicaoSubMenu"><a href="<?php echo path; ?>exposicoes.php">Exposição</a>-->
            <li id="exposicaoSubMenu"><a href="#">Exposição</a>
                <ul>
                   <li id="exposicaoSubMenu"><a href="<?php echo path; ?>exposicoes.php">Mapa da Exposição</a>
                    <li><a href="<?php echo path; ?>pages/percurso_rio.php">Percurso de um Rio</a></li>
                    <li><a href="<?php echo path; ?>pages/monstros_rio.php">Monstros do Rio</a></li>
                    <li><a href="<?php echo path; ?>pages/lontrario.php">Lontrário</a></li>
                    <li><a href="<?php echo path; ?>pages/sala_saramugo.php">Sala Saramugo</a></li>
                    <li><a href="<?php echo path; ?>pages/sala_aula.php">Sala de Aula</a></li>
                    <li><a href="<?php echo path; ?>pages/habitats_exoticos.php">Habitats Exóticos</a></li>
                    <li><a href="<?php echo path; ?>pages/exposicao_multimedia.php">Exposição Multimédia</a></li>
                </ul>
            </li>
            <li><a href="<?php echo path; ?>loja.php">Loja</a></li>
            <li><a href="<?php echo path; ?>restaurante.php">Restaurante</a></li>
        </ul>
    </nav>
</header>