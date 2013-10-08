
<div class="credenciales_contenedor">
    <div class="credenciales_header"> 
      <div class="credenciales_header">
          <div class="credenciales_logo">
              <?php echo image_tag('/sf/sf_default/images/icons/lock48.png', array('alt' => 'credentials required', 'class' => 'sfTMessageIcon', 'size' => '48x48')) ?>
          </div>
          <div class="credenciales_titulo">
              <h1>Permisos requeridos</h1>
              <h5>Esta página es un área restringida</h5>
          </div>
      </div>
    </div>
    <div class="credenciales_body"> 
      <dt>Usted no tiene permisos suficientes para acceder a esta pagina</dt>
      <dd>A pesar de que ya se ha iniciado sesión, esta página requiere credenciales especiales que actualmente no tiene.</dd>

      <dt>Como acceder a esta página ?</dt>
      <dd>Debe solicitar a la administración del sitio para que le dé algunas credenciales especiales.</dd>

      <dt>Que sigue?</dt>
      <dd>
        <ul class="sfTIconList">
          <li class="sfTLinkMessage"><a href="javascript:history.go(-1)">Volver a la página anterior</a></li>
        </ul>
      </dd>
    </div>
</div>