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

    <!-- video-header -->
    <?php include "secoes/video.php" ?>
    <!-- video-header -->

    <!-- comentarios -->
    <?php include "secoes/comentarios2.php" ?>
    <!-- comentarios -->

    <!-- footer -->
    <?php include "secoes/footer.php" ?>
    <!-- footer -->

    

    <div id="tve_notification_box"></div>
    <!--- SCRIPTS DE INTERAÇÕES --->
    <script src="libs/js/jquery-3.3.1.min.js"></script>
    <script src="libs/js/functions.js"></script>
    <script src="libs/js/lobibox.js"></script>
    <script src="libs/js/notifications.js"></script>
    <script src="libs/js/msg.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <script>
        $('#slide_zp').owlCarousel({
            loop:true,
            margin:15,
            nav:false,
            autoplay:true,
            responsiveClass:true,
            responsive:{
                2:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        });
    </script>

</body>

<script>
 var _tl=function(t){var e,r,n=document,u=window,i=n.querySelectorAll("a"),o=u.location,c=-1===t.indexOf("?")?"?":"&",f=["utm_source","utm_medium","utm_content","utm_campaign","utm_term","src","nome","email","telefone","e","sck"],m=function(){var n={};o.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(t,e,r){n[e]=r});return n}();for(c+="t=1",e=f.length;e--;)void 0!==m[f[e]]&&m[f[e]].length&&(c+="&"+f[e]+"="+m[f[e]]);for(r=i.length;r--;){var a=i[r];a.hasAttribute("href")&&-1!==a.getAttribute("href").indexOf(t)&&a.setAttribute("href",t+c)}};

   _tl('https://pay.kiwify.com.br/nE1hgFV?afid=5n0zEW6D');
</script>

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

