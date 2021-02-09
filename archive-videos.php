<?php include('header.php');?>
<div class="home_users_2"></div><!-- Espacio mobile head fixed -->
<?php include('simple-avatar.php');?><br><br>
<?php
  query_posts(array(
    'post_type' => array('videos'),
    'showposts' => 20
  ));
  // Inicia el ciclo
  while (have_posts()) : the_post(); ?>
<!-- El contenido del loop -->
<div class="feed_home">
<div class="cont_">
  <center>
    <?php if ( is_user_logged_in() ) { ?>
    <?php
    $file = get_field('video');
    if( !empty( $file ) ): ?>
    <video controls>
      <source src="<?php echo $file['url']; ?>">
      </video>
    <?php endif; ?>
  <?php } else { ?>
    <!-- Acá la img que no está permitido -->
    <img src="<?php bloginfo('template_directory'); ?>/contenido-bloqueado.jpg" class="imgblock_" alt="Conotenido bloqueado">
    <a href="<?php echo get_home_url(); ?>/membership-login/" class="boton_block_leads"><i class="fas fa-lock-open"></i>Unblock content</a>
  <?php } ?>
  </center>
</div>
<h1 class="title-post"><?php the_title(); ?></h1>
<div class="zocalo_tul">
    <a href="<?php the_permalink(); ?>">
      <li class="noseparacion"> <?php echo do_shortcode('[post-views]'); ?></li>
    </a>
  <li>
    <a href="<?php the_permalink(); ?>">
      <i class="far fa-calendar-minus"></i> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' '; ?> ago
    </a>
  </li>
  <li>
    <a href="<?php the_permalink(); ?>">
      <i class="fas fa-comments"></i><?php comments_number('');?>
    </a>
  </li>
</div>
</div>
<?php endwhile;?>
<div class="navigation">
  <div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
  <div class="alignright"><?php next_posts_link('Next &raquo;') ?></div>
</div>

<div class="pagina_enblanco">
  <p></p>
</div>


</script>
<?php include('footer.php');?>
