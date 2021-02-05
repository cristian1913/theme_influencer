<?php include('header.php');?>
<div class="home_users_2"></div><!-- Espacio mobile head fixed -->
<?php include('simple-avatar.php');?><br><br>
<?php
  query_posts(array(
    'post_type' => array('videos'),
    'showposts' => 10
  ));
  // Inicia el ciclo
  while (have_posts()) : the_post(); ?>
<!-- El contenido del loop -->
<div class="feed_home">
<div class="cont_">
  <center>
    <?php
    $file = get_field('video');
    if( !empty( $file ) ): ?>
    <video controls>
      <source src="<?php echo $file['url']; ?>">
      </video>
    <?php endif; ?>
  </center>
</div>
<h1 class="title-post"><?php the_title(); ?></h1>
<div class="zocalo_tul">
    <a href="<?php the_permalink(); ?>">
      <li class="noseparacion"> <?php echo do_shortcode('[post-views]'); ?></li>
    </a>
  <li>
    <a href="<?php the_permalink(); ?>">
      <i class="far fa-calendar-minus"></i> Hace <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' '; ?>
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


<div class="pagina_enblanco">
  <p></p>
</div>


</script>
<?php include('footer.php');?>
