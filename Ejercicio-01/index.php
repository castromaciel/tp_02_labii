<?php 
  /** Importación del encabezado */
  require_once('./php/encabezado.php');

  /** 
   * Generar el número aleatorio para que 
   * en su traducción a ASCII, sean las letras
   * A, B y C.
   */
  $nivelDeAcceso = mt_rand(65,67);
  $nivelDeAcceso = chr($nivelDeAcceso);

?>

<section>
  <header class="bg-danger">
    <h1 class="text-center">Sistema de facturación</h1>
  </header>
  <main class="row">
    <?php 
      switch ($nivelDeAcceso) {
        case 'A';
          require_once('./php/nivel_a.php');   
          break;
        case 'B';
          require_once('./php/nivel_b.php');   
          break;
        case 'C';
          require_once('./php/nivel_c.php');   
          break;
      }
    ?>
    <article class="bg-info col-8 p-3">
      <p>
        Parte principal
      </p>
    </article>
  
  </main>
</section>


<?php
  /** Importación del pie de página */
  require_once('./php/pie.php');
?>