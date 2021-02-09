<?php include('header.php');?>
<?php include('stiky.php');?>


<style media="screen">
body {
  background-color: #f7fafc !important;
}
.styky_ {display: none;}
.styky_.fixed {display: none;}
</style>


<div class="registro_login">
  <div class="elcontenido_">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="fomularios_">
      <h1><i class="fas fa-user-shield"></i> <?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  <?php endwhile; else: ?>
  <?php endif; ?>
  </div>
  <div class="quienes_">
    <div class="card_">
      <a href="<?php echo get_home_url(); ?>">
      <img src="<?php bloginfo('template_directory'); ?>/avatar.png" alt="">
      </a>
      <h3><?php echo get_bloginfo(); ?><img src="<?php bloginfo('template_directory'); ?>/verificado.png" alt="Perfil verificado!"></h3>
    </div>
    <div class="contador_card_">
      <div class="grid_">
        <i class="fab fa-youtube"></i>
        <p><?php echo $numerovideos; ?></p>
      </div>
      <div class="grid_">
        <i class="far fa-images"></i>
        <p><?php echo $numerofotos; ?></p>
      </div>
      <div class="grid_">
        <i class="fas fa-users"></i>
        <p><?php echo $pagando - $nativos; ?></p>
      </div>
    </div>
    <div class="texto_invita_">
      <h2>Enjoy all my exclusive content from <b>$6</b> per month.</h2>
      <?php if ( is_user_logged_in() ) { ?>
        <!-- Acá podemos mostrar algo para el logeado -->
      <?php } else { ?>
        <a href="<?php echo get_home_url(); ?>/membership-join/" class="bttn_ntrr">Subscribe!</a>
      <?php } ?>
    </div>
  </div>
</div>

<div class="segurofooter_">
  <i class="fas fa-shield-alt"></i> Pague seguro / Pay safe - <b>Fans4</b>
</div>

<?php include('footer.php');?>
