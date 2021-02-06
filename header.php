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
    <?php if ( is_user_logged_in() ) { ?>
      <!-- Si está logueado muestre lo siguinete: -->
      <li><a href="<?php echo get_home_url(); ?>/membership-login/"><i class="fas fa-user-alt"></i></a></li>
      <li><a href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fas fa-sign-out-alt"></i></a></li>
    <?php } else { ?>
      <!-- Si no está logueado muestre lo siguiente -->
      <li><a href="<?php echo get_home_url(); ?>/login/"><i class="far fa-user-circle"></i></a></li>
    <?php } ?>
  </div>
  <div class="float_hed">.</div>

<?php include('stiky.php');?>

<?php // Get total number of posts in "Fotos" post type
$cantidadvideos = wp_count_posts('videos');
$numerovideos = $cantidadvideos->publish;
$cantidadfotos = wp_count_posts('fotos');
$numerofotos = $cantidadfotos->publish;
$suscriptores = count_users();
$pagando = $suscriptores['total_users'];
$nativos = 2;
?>
