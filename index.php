<?php
/*
Template Name: Home
*/
?>
<?php include('header.php');?>

<?php include('cover_portada.php');?>

<?php
  query_posts(array(
    'post_type' => array('fotos', 'videos'),
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
    $image = get_field('foto');
    if( !empty( $image ) ): ?>
    <a href="<?php the_permalink(); ?>">
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </a>
    <?php endif; ?>
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
    <a href="<?php echo get_home_url(); ?>/membership-join/" class="boton_block_leads"><i class="fas fa-lock-open"></i>Unblock content</a>
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

<div class="dositems_">
  <small>Filter more content:</small>
  <a href="<?php echo get_home_url(); ?>/fotos/"><i class="far fa-images"></i></a>
  <a href="<?php echo get_home_url(); ?>/videos/"><i class="fab fa-youtube"></i></a>
</div>

<div class="pagina_enblanco">
  <p></p>
</div>


</script>
<?php include('footer.php');?>
