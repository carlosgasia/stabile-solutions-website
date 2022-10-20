<?php session_start(); ?>
<?php
include_once 'inc/header.php';
?>

<header class="site-header inicio">
  <div class="container contenido-header">
    <div class="barra">
      <a href="index.php">
        <img src="img/logo.png" alt="LOGO Transparente" style="max-width: 270px; ">
      </a>

      <a href="#nav" class="mobile-menu">
        <i class="fas fa-ellipsis-v"></i>
      </a>

      <nav id="nav" class="navegacion navegacion-principal">
        <a href="home.php#nosotros"><?php echo $nosotros ?></a>
        <a href="home.php#servicios"><?php echo $servicios ?></a>
        <a href="home.php#clientes"><?php echo $clientes ?></a>
        <a href="home.php#portafolio"><?php echo $portafolio ?></a>
        <a href="home.php#contacto"><?php echo $contacto ?></a>
        <a href="index.php"><?php echo $idiomas ?></a>

      </nav>
    </div>
    <!--barra-->
    <div class="cajadesombra">

    </div>
    <div class="cajadetextoprincipal">

      <H1 class="bounceIn"><?php echo $tituloHome ?></H1>

    </div>


  </div> <!-- Container-->
</header>
<div id="nosotros">
  <button class="scroll-top-btn hidden"> <i class="fas fa-arrow-up scroll-top-btn2"></i> </button>
  <section class="container section qs">

    <div class="quienessomos">
      <img src="img/iconlogo.png" class="iconlogo">
      <h2><?php echo $quienesSomos ?></h2>
      <p class="textalign"><?php echo $quienesSomos_contenido ?></p>

    </div>

  </section>


</div>

<div class="visionymision">
  <section class="container section qs">

    <div class="quienessomos">
      <h2><?php echo $misionTitulo ?></h2>
      <p class="textalign"><?php echo $misionContenido ?></p>

      <h2><?php echo $visionTitulo ?></h2>
      <p class="textalign"><?php echo $visionContenido ?></p>
    </div>

  </section>
</div>


<section class="container section linea">

  <h2 id="servicios" class="encabezadoservicios" style="margin-bottom: 0;"><?php echo $nuestrosServicios ?></h2>

  <div class="icono-servicios">

    <div class="icono otherborder boxgradient  pt">

      <img src="img/servicios-iconos/img-1.png" alt="icon">
      <div class="cajadetexto">
        <h3 style="margin-bottom: 0;"><?php echo $servicioA ?></h3>
        <p><?php echo $servicioAContenido ?></p>
      </div>

    </div>

    <div class="icono boxgradient2  pt">

      <img src="img/servicios-iconos/img-2.png" alt="icon">




      <div class="cajadetexto">
        <h3 style="margin-bottom: 0;"><?php echo $servicioB ?></h3>
        <p><?php echo $servicioBContenido ?></p>
      </div>

    </div>




    <div class="icono boxgradient2 pt">
      <img src="img/servicios-iconos/img-3.png" alt="icon">
      <div class="cajadetexto">
        <h3 style="margin-bottom: 0;"><?php echo $servicioC ?></h3>
        <p><?php echo $servicioCContenido ?>
        </p>
      </div>
    </div>

    <div class="icono otherborder boxgradient pt">

      <img src="img/servicios-iconos/img-4.png" alt="icon">
      <div class="cajadetexto">
        <h3 style="margin-bottom: 0;"><?php echo $servicioD ?></h3>
        <p style="margin-top: 0;padding-top: 0;"><?php echo $servicioDContenido ?> </p>
      </div>
    </div>

  </div>

</section>

<section id="clientes" class="linea">
  <div class="container qs margin-bottom2">
    <h2 class="hclientes"><?php echo $hemosTrabajadoCon ?></h2>


    <div class="section container sectionclientes">


      <div class="cliente-social"><img src="img/empresas/e1.gif" alt="logo cliente"></div>
      <div class="cliente-social"><img src="img/empresas/e2.gif" alt="logo cliente"></div>
      <div class="cliente-social"><img src="img/empresas/e3.gif" alt="logo cliente"></div>

    </div>
  </div>
</section>




<main id="portafolio" class="bgcolor">
  <div class="section container">
    <h2 id="Actualidad" class="centrar-texto"><?php echo $portafolio ?></h2>

    <div class="contenedor-anuncios">
      <div class="anuncio">
        <img src="img/proyectos/bfoto1.png" alt="proyecto-1">
        <div class="contenido-anuncio">
          <h3><?php echo $proyectoA ?></h3>
          <p class="justify-text bottom-margin-p"><?php echo $proyectoAContenido ?></p>

          <a class="boton boton-amarillo leer-mas"><?php echo $verAqui ?></a>

        </div>
        <script>


        </script>
      </div>

      <div class="anuncio">
        <img src="img/proyectos/bfoto2.png" alt="proyecto-2">
        <div class="contenido-anuncio">
          <h3><?php echo $proyectoB ?></h3>
          <p class="justify-text bottom-margin-p"><?php echo $proyectoBContenido ?></p>


          <a target="_blank" href="https://curacaohelp.com/" class="boton boton-amarillo leer-mas"><?php echo $verAqui ?></a>

        </div>
      </div>


      <div class="anuncio">
        <img src="img/proyectos/bfoto3.png" alt="proyecto-3">
        <div class="contenido-anuncio">
          <h3><?php echo $proyectoC ?></h3>
          <p class="justify-text bottom-margin-p"><?php echo $proyectoCContenido ?></p>

          <a target="_blank" href="https://responsiblehelp.com/" class="boton boton-amarillo leer-mas"><?php echo $verAqui ?></a>

        </div>
      </div>
    </div>
  </div>
</main>


<!--container section-->

<section id="contacto" class="imagen-contacto section">
  <div class="container contenidocontacto">
    <div class="inner-contacto">
      <img src="img/iconlogo.png" class="iconlogo">

      <h2><?php echo $contactanos ?></h2>

      <p style="color: black;"><?php echo $contactanosContenido ?></p>
    </div>

    <div class="inner-contacto">
      <form action="enviar.php" method="Post">
        <fieldset class="fieldset-contacto">

          <legend><?php echo $mensajeFormulario ?></legend>
          <label for="nombre"><?php echo $nombreFormulario ?></label>
          <input type="text" id="nombre" name="nombreform" placeholder="<?php echo $nombreFormularioPlaceholder ?>" required>

          <label for="email"><?php echo $correoFormulario ?></label>
          <input type="email" id="email" name="emailform" placeholder="<?php echo $correoFormularioPlaceholder ?>" required>

          <label for="asuntoEmail"><?php echo $asuntoFormulario ?></label>
          <input type="text" id="asuntoEmail" name="asuntoform" placeholder="<?php echo $asuntoFormularioPlaceholder ?>" required>

          <label for="mensaje"><?php echo $MensajeFormulario ?> </label>
          <textarea name="mensajeform" id="mensaje" placeholder="<?php echo $mensajeFormularioPlaceholder ?>" required></textarea>
          <input type="reset" class="boton boton-verde" value="<?php echo $resetBTN ?>">
          <input type="submit" class="boton boton-verde" value="<?php echo $btnEnviar ?>">

        </fieldset>
      </form>
    </div>
  </div>
</section>


<?php
include_once 'inc/footer.php';

?>