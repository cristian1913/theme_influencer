<?php include('header.php');?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="feed_home single_influ">
<div class="cont_">
  <center>
  <?php the_content(); ?>
  </center>
</div>
<h1 class="title-post"><?php the_title(); ?></h1>
<div class="zocalo_tul">
    <li class="noseparacion"> <?php echo do_shortcode('[post-views]'); ?></li>
    <li><i class="far fa-calendar-minus"></i> <?php echo get_the_date(); ?></li>
    <li><i class="fas fa-comments"></i> <?php comments_number('');?></li>
</div>
</div>
<?php endwhile; else: ?>
<?php endif; ?>

<div class="comentarios_sin">
  <div class="centradototal">
    <?php comments_template(); ?>
  </div>
</div>

<div class="pagina_enblanco">
  <p></p>
</div>

<?php include('footer.php');?>
