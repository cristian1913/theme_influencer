<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-admin.css?version=1.0.5">
<div class="wrap"><!-- Inicio grap! -->
<h1>Valor de membresias <span class="clas_pagosname_">
<?php $blog_title = get_bloginfo();
echo $blog_title;?>
</span></h1>


<div class="notice notice-warning is-dismissible">
  <h2>Importante</h2>
  <p>El valor de la membresía sólo se podrá cambiar una vez al mes. Para hacerlo, deberás usar el formulario que saldrá a continuación.
  <br>Cuando envíes el formulario, puede tardar unas horas en empezar a correr el nuevo precio de tus publicaciones.</p>
</div>

<div class="tresplanes_membre">
  <h2>Precios de membresía actuales</h2>
  <div class="grid_">
    <h1>1 Mes</h1>
    <h4><?php echo get_theme_mod('costo1'); ?>$</h4>
    <!-- <small>20.000 pesos COL</small> -->
  </div>
  <div class="grid_">
    <h1>6 Meses</h1>
    <h4><?php echo get_theme_mod('costo6'); ?>$</h4>
    <!-- <small>90.000 pesos COL</small> -->
  </div>
  <div class="grid_">
    <h1>12 Meses</h1>
    <h4><?php echo get_theme_mod('costo12'); ?>$</h4>
    <!-- <small>300.000 pesos COL</small> -->
  </div>
</div>

<div class="formulario_admin_">
  <h1>Asignar nuevos precios de membresía</h1>
  <small>Asignar valores en <b>Dólares Americanos</b> </small>
  <hr>
  <?php
  $elformu = get_theme_mod('formulario_membresias');
  echo do_shortcode($elformu);
   ?>

</div>


</div>
