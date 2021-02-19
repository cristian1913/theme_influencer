<style media="screen">
.home_users .portada_ {
  background-image: url('<?php echo get_theme_mod('foto_portada') ?>');
}
</style>

<div class="home_users">
  <div class="portada_"></div>
  <div class="avatar_">
    <img src="<?php echo get_theme_mod('foto_perfil') ?>" alt="">
    <h2><?php echo get_bloginfo(); ?><img src="<?php bloginfo('template_directory'); ?>/verificado.png" alt="Perfil verificado!"></h2>
  </div>
  <div class="estadisticas">
    <li><i class="fas fa-users"></i><br><?php echo $pagando - $nativos; ?></li>
    <li><i class="far fa-images"></i><br><?php echo $numerofotos; ?></li>
    <li><i class="fab fa-youtube"></i><br><?php echo $numerovideos; ?></li>
  </div>
</div>
