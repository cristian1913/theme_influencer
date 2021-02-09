<div class="home_users">
  <div class="portada_"></div>
  <div class="avatar_">
    <img src="<?php bloginfo('template_directory'); ?>/avatar.png" alt="">
    <h2><?php echo get_bloginfo(); ?><img src="<?php bloginfo('template_directory'); ?>/verificado.png" alt="Perfil verificado!"></h2>
  </div>
  <div class="estadisticas">
    <li><i class="fas fa-users"></i><br><?php echo $pagando - $nativos; ?></li>
    <li><i class="far fa-images"></i><br><?php echo $numerovideos; ?></li>
    <li><i class="fab fa-youtube"></i><br><?php echo $numerofotos; ?></li>
  </div>
</div>
