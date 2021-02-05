<?php
/*
Template name: Login / Registro
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(''); echo '  ';  bloginfo( 'name' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/responsive.css">
<?php wp_head(); ?>
<script src="https://kit.fontawesome.com/83686ed12e.js" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?>>

<div class="contenedor_"><!-- Inicio contenedor -->
  <div class="encabezado_">
    <li><a href="<?php echo get_home_url(); ?>"><i class="fas fa-home"></i></a></li>
    <li><a href="<?php echo get_home_url(); ?>/fotos/"><i class="far fa-images"></i></a></li>
    <li><a href="<?php echo get_home_url(); ?>/videos/"><i class="fab fa-youtube"></i></a></li>
    <li><a href="<?php echo get_home_url(); ?>/login/"><i class="fas fa-user-alt"></i></a></li>
    <li><a href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fas fa-sign-out-alt"></i></a></li>
  </div>
  <div class="float_hed">.</div>

<?php include('stiky.php');?>

<?php // Get total number of posts in "Fotos" post type
$cantidadvideos = wp_count_posts('videos');
$numerovideos = $cantidadfotos->publish;
$cantidadfotos = wp_count_posts('fotos');
$numerofotos = $cantidadvideos->publish;
$suscriptores = count_users();
$pagando = $suscriptores['total_users'];
$nativos = 2;
?>

<style media="screen">
body {
  background-color: #f7fafc !important;
}
.encabezado_ {display: none;}
.styky_ {display: none;}
</style>


<div class="registro_login">
  <div class="elcontenido_">
    <div class="fomularios_">
      <h1><i class="fas fa-user-shield"></i> Ingresar</h1>
      <input type="text" name="" value="" placeholder="Nombre">
      <input type="password" name="" value="" placeholder="Contraseña">
      <input type="button" name="" value="Ingresar">
      <small>¿Tienes una cuenta? <a href="#">Incresa aquí</a>.</small>
    </div>
  </div>
  <div class="quienes_">
    <div class="card_">
      <img src="https://steamuserimages-a.akamaihd.net/ugc/832455202636707029/5A0A3A6941B4902BCACEDE7ECFE569E74D8983BB/" alt="">
      <h3>Karlee Grey<img src="<?php bloginfo('template_directory'); ?>/verificado.png" alt="Perfil verificado!"></h3>
    </div>
    <div class="contador_card_">
      <div class="grid_">
        <i class="fab fa-youtube"></i>
        <p><?php echo $numerofotos; ?></p>
      </div>
      <div class="grid_">
        <i class="far fa-images"></i>
        <p><?php echo $numerovideos; ?></p>
      </div>
      <div class="grid_">
        <i class="fas fa-users"></i>
        <p><?php echo $pagando - $nativos; ?></p>
      </div>
    </div>
    <div class="texto_invita_">
      <h2>Disfruta de todo mi contenido exclusivo desde <b>$6</b> dólares al mes.</h2>
    </div>
  </div>
</div>

<div class="segurofooter_">
  <i class="fas fa-shield-alt"></i> Pague seguro / Pay safe - <b>Fans4</b>
</div>

<?php include('footer.php');?>
