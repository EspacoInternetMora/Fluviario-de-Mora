<?php
if(isset($_GET['err']))    
{
    $erro = $_GET['err'];
    $imgIllustrativa = 200;
    require_once("includes/config.inc.php");
    require_once("includes/header.inc.php");
    require_once("includes/imgIlustrativa.inc.php");
?>

<div id="content">
    
<?php
    
    if($erro == 0)
    {
?>

    <h2 id="titulo">
        Registo efectuado com sucesso
    </h2>

    <p class="leftMargin rightMargin">
        <strong>Obrigado</strong> por se ter registado na nossa Newsletter.<br><br>
        As próximas edições da nossa Newsletter serão enviadas para a sua caixa de correio electrónico.<br>
        Esperemos que goste e que nos Visite!
    </p>
    
<?php
    } else {
        
?>
     <h2 id="titulo">
        Ocorreu um ERRO durante o registo
    </h2>

    <p class="leftMargin rightMargin">
        Ocorreram os seguintes Erros:<br>
        <?php
            switch($erro)
            {
                case 1 : echo "   - Deve indicar o seu endereço de email.";
                    break;
                case 2 : echo "   - Deve indicar um endereço de email válido.";
                    break;
                case 3 : echo "   - Não foi possível registar o seu endereço de email. Por favor, tente novamente.";
                    break;
                default: break;
            }
        ?>
    </p>  
<?php        
    }
?>

</div>


<?php
    require_once("includes/footer.inc.php");
    
    } else {
        header("Location: index.php");
    }
?>