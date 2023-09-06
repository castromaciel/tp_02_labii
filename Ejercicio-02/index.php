<?php 
  /** Importación del encabezado */
  require_once('./php/encabezado.php');
  $imagen = '';

  /** Generar Dias y meses aleatoriamente */
  $dia = mt_rand(1, 31);
  $mes = mt_rand(1, 12);

  /** Creación de la Fecha a mostrar */
  $fecha = '<p>Fecha generada <b>' . $dia . '/' . $mes . '</b></p>';

  /**
   * Se determina que imagen se debe mostrar
   * en base al mes y día que fue generado.
   */
  switch ($mes) {
    case 1:
      if ($dia <= 19) {
        $imagen = "<img src='./img/capricornio.jpg' alt='capricornio' />";
      } else {
        $imagen = "<img src='./img/acuario.jpg' alt='acuario' />";
      }
      break;
    case 2:
      if ($dia <= 19) {
        $imagen = "<img src='./img/acuario.jpg' alt='acuario' />";
      } else {
        $imagen = "<img src='./img/piscis.jpg' alt='piscis' />";
      }
      break;
    case 3:
      if ($dia <= 20) {
        $imagen = "<img src='./img/piscis.jpg' alt='piscis' />";
        $srcImage = './img/piscis.jpg';
        $altImage = 'piscis';
      } else {
        $imagen = "<img src='./img/aries.jpg' alt='aries' />";
      }
      break;
    case 4:
      if ($dia <= 20) {
        $imagen = "<img src='./img/aries.jpg' alt='aries' />";
      } else {
        $imagen = "<img src='./img/tauro.jpg' alt='tauro' />";
      }
      break;
    case 5:
      if ($dia <= 20) {
        $imagen = "<img src='./img/tauro.jpg' alt='tauro' />";
      } else {
        $imagen = "<img src='./img/geminis.jpg' alt='geminis' />";
      }
      break;
    case 6:
      if ($dia <= 21) {
        $imagen = "<img src='./img/geminis.jpg' alt='geminis' />";
      } else {
        $imagen = "<img src='./img/cancer.jpg' alt='cancer' />";
      }
      break;
    case 7:
      if ($dia <= 22) {
        $imagen = "<img src='./img/cancer.jpg' alt='cancer' />";
      } else {
        $imagen = "<img src='./img/leo.jpg' alt='leo' />";
      }
      break;
    case 8:
      if ($dia <= 23) {
        $imagen = "<img src='./img/leo.jpg' alt='leo' />";
      } else {
        $imagen = "<img src='./img/virgo.jpg' alt='virgo' />";
      }
      break;
    case 9:
      if ($dia <= 23) {
        $imagen = "<img src='./img/virgo.jpg' alt='virgo' />";
      } else {
        $imagen = "<img src='./img/libra.jpg' alt='libra' />";
      }
      break;
    case 10:
      if ($dia <= 22) {
        $imagen = "<img src='./img/libra.jpg' alt='libra' />";
      } else {
        $imagen = "<img src='./img/escorpio.jpg' alt='escorpio' />";
      }
      break;
    case 11:
      if ($dia <= 22) {
        $imagen = "<img src='./img/escorpio.jpg' alt='escorpio' />";
      } else {
        $imagen = "<img src='./img/sagitario.jpg' alt='sagitario' />";
      }
      break;
    case 12:
      if ($dia <= 21) {
        $imagen = "<img src='./img/sagitario.jpg' alt='sagitario' />";
      } else {
        $imagen = "<img src='./img/capricornio.jpg' alt='capricornio' />";
      }
      break;
  }
?>

<main class="d-flex flex-column justify-content-center align-items-center">
  <article class="border custom-card">
    <header>
      <h1>Signos del Zodiaco</h1>
    </header>
    <?php echo $fecha ?>

    <picture>

      <?php echo $imagen ?>
    </picture>
  </article>
</main>

<?php
  /** Importación del pie de página */
  require_once('./php/pie.php');
?>