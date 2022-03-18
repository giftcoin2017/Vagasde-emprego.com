
<!---------
OLÁ TUDO BEM? TEM CERTEZA QUE DESEJA COPIAR ESTÁ PÁGINA? ACONSELHAMOS NÃO CONTINUAR, ESTÁ PÁGINA POSSUI SCRIPTS MALICIOSOS CONTRA CÓPIA, PODE SOLICITAR UMA PARECIDA COM O DESENVOLVEDOR

CONTATO DO DEV → https://linktr.ee/lucas_grego

------->


    
<?php ob_start('comprimir_pagina'); ?>

<!DOCTYPE html>

<!-- Configurações gerais -->
<?php include "config/config.php" ?>
<!-- Configurações gerais -->

<html class="no-js" lang="pt">

<!-- head -->
<?php include "includes/head.php" ?>
<!-- head -->

<body>

    <span itemprop="image" itemscope="" itemtype="image/jpeg"> 
        <link itemprop="url" href="<?php $url?>/midia/img/og-img.jpg"> 
    </span>

 	<!-- header -->
	<?php include "secoes/topo.php" ?>
	<!-- header -->

    <!-- pergunta1 -->
    <?php include "secoes/final.php" ?>
    <!-- pergunta1 -->


    <!-- footer -->
    <?php include "secoes/footer.php" ?>
    <!-- footer -->


    
    <!--- SCRIPTS DE INTERAÇÕES --->
    <script src="libs/js/jquery-3.3.1.min.js"></script>
    <script src="libs/js/functions.js"></script>
    <script src="libs/js/cript.js"></script>


</body>
</html>

<?php
// Una vez que el búfer almacena nuestro contenido utilizamos "ob_end_flush" para usarlo y deshabilitar el búfer
ob_end_flush(); 
// Función para eliminar todos los espacios en blanco
function comprimir_pagina($buffer) { 
    $busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'); 
    $reemplaza = array('>','<','\\1'); 
    return preg_replace($busca, $reemplaza, $buffer); 
} 
?>

