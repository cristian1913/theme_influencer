<?php include('header.php');?>
<div class="home_users_2"></div><!-- Espacio mobile head fixed -->
<?php include('simple-avatar.php');?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="feed_home single_influ">
<div class="cont_">
  <center>
    <?php
    $image = get_field('foto');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
  </center>
  <h1 class="title-post"><?php the_title(); ?></h1>
</div>

<div class="zocalo_tul">
    <li class="noseparacion"> <?php echo do_shortcode('[post-views]'); ?></li>
    <li><i class="far fa-calendar-minus"></i> Hace <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' '; ?></li>
    <li><i class="fas fa-comments"></i> <?php comments_number('');?></li>
</div>
</div>

<div class="descipricion_single">
  <p><?php the_field('descripcion'); ?></p>
</div>

<?php endwhile; else: ?>
<?php endif; ?>

<div class="comentarios_sin">
  <div class="centradototal">
    <?php comments_template(); ?>
  </div>
</div>



<div class="pagina_enblanco">
</div>

<?php include('footer.php');?>
