<div class="styky_">
  <div class="foto_">
    <a href="<?php echo get_home_url(); ?>">
      <img src="<?php bloginfo('template_directory'); ?>/avatar.png" alt="">
    </a>
  </div>
  <div class="nombre_">
    <h2><a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo(); ?></a></h2>
  </div>
  <div class="listados_">
    <?php
    if ( is_home() != 'nada' ) {?>
      <a href="<?php echo get_home_url(); ?>" class="regresar_styki"><i class="fas fa-angle-double-left"></i>Return</a>
    <?php }?>
  </div>
</div>

<!-- <a href="<?php echo get_home_url(); ?>" class="regresar_styki"><i class="fas fa-angle-double-left"></i>Regresar</a> -->
<?php
