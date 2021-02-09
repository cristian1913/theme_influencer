<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-admin.css">
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

<div class="formulario_admin_">
  <h1>Asignar nuevos precios de membresía</h1>
  <small>Asignar valores en <b>Dólares Americanos</b> </small>
  <hr>
  <?php echo do_shortcode('[contact-form-7 id="174" title="Cambiar precios de suscripciones"]'); ?>
</div>


</div>
