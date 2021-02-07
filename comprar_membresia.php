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
        <h2>Accede a mi contenido exclusivo</h2>
        <h3>Disfruta de todo mi contenido exclusivo desde <b>$6</b> dólares al mes.</h3>
      </div>
      <div class="tabla_beneficios_">
        <li>Acceso a todo el contenido <i class="far fa-check-circle"></i></li>
        <li>Descargar APP privada del autor <i class="far fa-check-circle"></i></li>
        <li>Notificaciones cuando se agregue nuevo contenido <i class="far fa-check-circle"></i></li>
        <li>Múltiples formas de adquirir tu membresía <i class="far fa-check-circle"></i></li>
        <li>Comentar estados y publicaciones <i class="far fa-check-circle"></i></li>
        <li>Descuentos increíbles <i class="far fa-check-circle"></i></li>
      </div>
      <div class="tresplanes_membre">
        <div class="grid_">
          <i class="fas fa-crown"></i>
          <h4>Mensual 6$</h4>
          <small>20.000 pesos COL</small>
          <a href="#" class="bottom_membre">Comprar</a>
        </div>
        <div class="grid_">
          <i class="fas fa-crown"></i>
          <h4>Semestral 46$</h4>
          <small>90.000 pesos COL</small>
          <a href="#" class="bottom_membre">Comprar</a>
        </div>
        <div class="grid_">
          <i class="fas fa-crown"></i>
          <h4>Anual 126$</h4>
          <small>300.000 pesos COL</small>
          <a href="#" class="bottom_membre">Comprar</a>
        </div>
      </div>
      <div class="informa_pago">
        <h4>Información importante</h4>
        <li><i class="fas fa-shield-alt"></i>La facturación se hace a nombre de Laooz Studios</li>
        <li><i class="fas fa-shield-alt"></i>Puede cancelar sus suscripción en cualquier momento</li>
        <li><i class="fas fa-shield-alt"></i>Puede pagar con tarjetas de crédito, débito, transferencias bancarias y efectivo <a href="#">Consulte aquí los diferentes medios de pago</a>  </li>
        <li><i class="fas fa-shield-alt"></i>No guardamos ninguna información bancaria</li>
        <li><i class="fas fa-shield-alt"></i>Su información 100% segura</li>
        <li><i class="fas fa-shield-alt"></i><b>¿Dudas o consultas?</b> info@fans4.net</li>
      </div>
    </div>
  </div>
  <div class="quienes_">
    <div class="card_">
      <a href="<?php echo get_home_url(); ?>">
      <img src="https://steamuserimages-a.akamaihd.net/ugc/832455202636707029/5A0A3A6941B4902BCACEDE7ECFE569E74D8983BB/" alt="">
      </a>
      <h3>Karlee Grey<img src="<?php bloginfo('template_directory'); ?>/verificado.png" alt="Perfil verificado!"></h3>
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
