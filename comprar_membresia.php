<?php
/*
Template name: Compra de membresia
*/
?>
<?php include('header.php');?>
<?php include('stiky.php');?>


<style media="screen">
body {
  background-color: #f7fafc !important;
}
.styky_ {display: none;}
.styky_.fixed {display: none;}
.registro_login .quienes_ {
  padding-bottom: 50px;
  height: auto;
}
</style>


<div class="registro_login">
  <div class="elcontenido_">
    <div class="comprar_membresia">
      <div class="cabeza_membre">
        <h2>Access my exclusive content</h2>
        <h3>Enjoy all my exclusive content from <b>$6</b> per month.</h3>
      </div>
      <div class="tabla_beneficios_">
        <li>Access to all of the content <i class="far fa-check-circle"></i></li>
        <li>Download the author's private APP <i class="far fa-check-circle"></i></li>
        <li>Notificaciones cuando se agregue nuevo contenido <i class="far fa-check-circle"></i></li>
        <li>Notifications when new content is added <i class="far fa-check-circle"></i></li>
        <li>Comment on statuses and posts <i class="far fa-check-circle"></i></li>
        <li>Incredible discounts <i class="far fa-check-circle"></i></li>
      </div>
      <div class="tresplanes_membre">
        <div class="grid_">
          <i class="fas fa-crown"></i>
          <h4>1 month 6$</h4>
          <!-- <small>20.000 pesos COL</small> -->
          <a href="<?php echo get_home_url(); ?>/1-month/" class="bottom_membre">Buy now</a>
        </div>
        <div class="grid_">
          <i class="fas fa-crown"></i>
          <h4>6 Months 46$</h4>
          <!-- <small>90.000 pesos COL</small> -->
          <a href="<?php echo get_home_url(); ?>/6-months/" class="bottom_membre">Buy now</a>
        </div>
        <div class="grid_">
          <i class="fas fa-crown"></i>
          <h4>12 Months 126$</h4>
          <!-- <small>300.000 pesos COL</small> -->
          <a href="<?php echo get_home_url(); ?>/12-months/" class="bottom_membre">Buy now</a>
        </div>
      </div>

      <!-- <div class="informa_pago">
        <h4>Información importante</h4>
        <li><i class="fas fa-shield-alt"></i>La facturación se hace a nombre de Laooz Studios</li>
        <li><i class="fas fa-shield-alt"></i>Puede cancelar sus suscripción en cualquier momento</li>
        <li><i class="fas fa-shield-alt"></i>Puede pagar con tarjetas de crédito, débito, transferencias bancarias y efectivo.</li>
        <li><i class="fas fa-shield-alt"></i>No guardamos ninguna información bancaria</li>
        <li><i class="fas fa-shield-alt"></i>Su información 100% segura</li>
        <li><i class="fas fa-shield-alt"></i>ePayco procesará los tus cobros con tarjeta</li>
        <li><i class="fas fa-shield-alt"></i><b>¿Dudas o consultas?</b> info@fans4.net</li>
      </div> -->

    </div>
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

  </div>
</div>

<div class="segurofooter_">
  <i class="fas fa-shield-alt"></i> Pague seguro / Pay safe - <b>Fans4</b>
</div>

<?php include('footer.php');?>
