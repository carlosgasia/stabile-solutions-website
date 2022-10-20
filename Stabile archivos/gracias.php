<?php 
session_start();
include_once 'inc/header.php';
?>

  <header class="site-header">
    <div class="container contenido-header">
      <div class="barra" style="margin: 0 auto;">
        <a href="index.php">
          <img src="img/logo.png" alt="Logo">
        </a>

      </div>
      <!--barra-->

    </div> <!-- Container-->
  </header>

  <h1 class="fw-300 centrar-texto"><?php echo $thanksforsend ?></h1>

  <div class="grid centrar-columnas">

    <div class="col-12 bgcolorc"
      style="height: 40vh; text-align: center; margin: auto; display: flex; justify-content: center; align-items: center;">


      <div>
        <h2><?php echo $successfulEmail ?></h2>

        <a class="boton boton-amarillo" href="index.php"><?php echo $goBack ?></a>
      </div>
     


    </div>
  </div>
  <!--grid-->

  </main>

<?php 
include_once 'inc/footer.php';
?>