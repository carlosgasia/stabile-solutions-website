<?php session_start(); 
include_once 'inc/header.php';

?>

<div class="grid centrar-columnas"> 

  <div class="col-12 bgindex" style="height: 80vh; text-align: center; margin: auto; display: flex; justify-content: center; align-items: center;">

     

      <div>
          <div class="barra">
              <img src="img/logo.png" alt="Logo" style="margin: 0 auto;">
          </div> <!--barra-->
          <!-- <div class="boton boton-disabled">><a href="home.php">English (Coming soon)</a></div>
          <div class="boton boton-amarillo">><a href="home.php">Español</a></div>
          <div class="boton boton-disabled" >><a href="home.php">Dutch (Binnenkort)</a></div>
          <div class="boton boton-disabled" >><a href="#">Papiamentu (aproksimadamente)</a></div> -->
    
            <form action="lang_config.php" method="post">
                <input class="boton boton-amarillo" type="submit" name="lang" value="English">
                <input class="boton boton-amarillo"  type="submit" name="lang" value="Español">
                <input class="boton boton-amarillo"  type="submit" name="lang" value="Dutch">
                <input class="boton boton-disabled"  type="submit" name="lang" value="Papiamentu" disabled> 
            </form>


      </div>
  </div>
 


</div><!--grid-->

</main>

<?php
include_once 'inc/footer.php';

?>