<?php
    require_once("includes/config.inc.php");
    require_once("includes/header.inc.php");
    require_once("includes/slider.inc.php");
?>

<div id="content">

    <?php
        require_once("includes/sidebar.inc.php");
    ?>

    <div id="mainContent">

    <h2>Visita livre</h2>
        
        <p class="intro">
            O bilhete permite a visita livre - sem ser guiada por um educador ambiental - às exposições ao longo do dia, durante o horário de funcionamento do Fluviário de Mora.
        </p>

        <table class="precos" border="0" cellspacing="4" width="100%" align="center">
            <tr>
                <th>Bilhetes</th>
                <th  style="width: 25%">Normal</th>
                <th>Grupo (20 ou mais pessoas)</th>
            </tr>
            <tr>
                <td>Portador de deficiência</td>
                <td>-50%</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Criança (0-2 anos)</td>
                <td>Grátis</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Criança (3-12 anos)</td>
                <td>4.90€</td>
                <td>4.40€</td>
            </tr>
            <tr>
                <td>Adulto (13-64 anos)</td>
                <td>7.20€</td>
                <td>6.70€</td>
            </tr>
            <tr>
                <td>Sénior (65+ anos)</td>
                <td>5.20€</td>
                <td>4.70€</td>
            </tr>
            <tr>
                <td>Família <br>(Pais e filhos dos 3 aos 12 anos)</td>
                <td colspan="2">menos 0.50€ cada</td>
            </tr>
            <tr>
                <td>Atividades</td>
                <td colspan="2"><a href="educacao.php">Consulte a página das atividades</a></td>
            </tr>
        </table>
        <br><br>
        <h2>Visitas guiadas</h2>

        <table class="precos" border="0" cellspacing="4" cellpadding="0" width="100%" align="center">
            <tr>
                <th colspan="2" style="background-color:#eeeeee;"></th>
                <th colspan="2">Grupo (20 ou mais pessoas)</th>
                <th colspan="2">Grupo (menos de 20 pessoas)</th>
            </tr>
            <tr>
                <th colspan="2">Preço</th>
                <th width="245">Bilhete</th>
                <th width="400">Guia</th>
                <th width="245">Bilhete</th>
                <th width="400">Guia</th>
            </tr>
            <tr>
                <td rowspan="3" width="80">Geral</td>
                <td width="530">Criança (3-12 anos)</td>
                <td>4.40€</td>
                <td rowspan="3">+2.00€<br /> por pax</td>
                <td>4.90€</td>
                <td rowspan="3">+40.00€<br>por grupo</td>
            </tr>
            <tr>
                <td>Adulto (13-64 anos)</td>
                <td>6.70€</td>
                <td>7.20€</td>
            </tr>
            <tr>
                <td>Sénior (65+ anos)</td>
                <td>4.70€</td>
                <td>5.20€</td>
            </tr>
            <tr>
                <td rowspan="4">Escolas</td>
                <td>Aluno (3-12 anos)</td>
                <td>4.40€</td>
                <td rowspan="4">+2.00€<br /> por aluno</td>
                <td>4.90€</td>
                <td rowspan="4">+40.00€<br>por grupo</td>
            </tr>
            <tr>
                <td>Aluno (13-64 anos)</td>
                <td>6.70€</td>
                <td>7.20€</td>
            </tr>
            <tr>
                <td>Aluno (65+ anos)</td>
                <td>4.70€</td>
                <td>5.20€</td>
            </tr>
            <tr>
                <td>Prof. / Auxiliar</td>
                <td>6.70€</td>
                <td>7.20€</td>
            </tr>
            <!--<tr>
                <td colspan="6">*Um guia por cada 30 visitantes > <a href="#">Consulte a tabela de preço das atividades</a></td>
            </tr>-->
        </table>
        <br><br>
        
        <h2>Visitas conjuntas - Fluviário de Mora/Museu do Megalitismo</h2>

        <table class="precos" border="0" cellspacing="4" cellpadding="0" width="100%" align="center">
            <caption>Visita Livre</caption>
            <tr>
                <th>Bilhetes</th>
                <th>Normal</th>
                <th>Grupo (20 ou mais pessoas)</th>
            </tr>
            <tr>
                <td>Portador de Deficiência</td>
                <td>-50%</td>
                <td></td>
            </tr>
            <tr>
                <td>Criança (0-2 anos)</td>
                <td>Grátis</td>
                <td></td>
            </tr>
            <tr>
                <td>Criança (3-12 anos)</td>
                <td>7,00€</td>
                <td>6,00€</td>
            </tr>
            <tr>
                <td>Adulto (13-64 anos)</td>
                <td>10,00€</td>
                <td>9,50€</td>
            </tr>
            <tr>
                <td>Sénior (65+ anos)</td>
                <td>8,00€</td>
                <td>7,50€</td>
            </tr>
            <tr>
                <td>Família (Pais e filhos dos 3 aos 12 anos)</td>
                <td>menos 0.50€ p/cada</td>
                <td></td>
            </tr>
        </table>
        <table class="precos" border="0" cellspacing="4" cellpadding="0" width="100%" align="center">
            <caption>Visita Guiada</caption>
            <tr>
                <th></th>
                <th colspan="2">Grupo (menos de 20 pessoas)</th>
                <th colspan="2">Grupo (mais de 20 pessoas)</th>
            </tr>
            <tr>
                <td></td>
                <td>Bilhete</td>
                <td>Guia</td>
                <td>Bilhete</td>
                <td>Guia</td>
            </tr>
            <tr>
                <td>Criança (3-12 anos)</td>
                <td>7,00€</td>
                <td rowspan="3">+50,00€ p/Grupo</td>
                <td>6,00€</td>
                <td rowspan="3">+3,00€ p/Pessoa</td>
            </tr>
            <tr>
                <td>Adulto (13-64 anos)</td>
                <td>10,00€</td>
                <td>9,50€</td>
            </tr>
            <tr>
                <td>Sénior (65+ anos)</td>
                <td>8,00€</td>
                <td>7,50€</td>
            </tr>
        </table>
    </div>

</div>

<?php
    require_once("includes/footer.inc.php");
?>