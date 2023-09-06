<?php 
  /** Importación del encabezado */
  require_once('./php/encabezado.php');

  /** Se definen las variables */
  $primerNaipe = mt_rand(1,12);
  $valorPrimerNaipe = 0;

  $segundoNaipe = mt_rand(1,12);
  $valorSegundoNaipe = 0;

  $valorDeJugada = 0;
  $resultadoAMostrar;

  /** 
   * Se evalúa el valor del primer naipe y
   * en base a su valor se mantiene el valor
   * o el nombre de la carta
   */
  switch($primerNaipe) {
    case 10:
      $primerNaipe = 'Sota';
      $valorPrimerNaipe = 0.5;
      break;
    case 11:
      $primerNaipe = 'Caballo';
      $valorPrimerNaipe = 0.5;
      break;
    case 12:
      $primerNaipe = 'Rey';
      $valorPrimerNaipe = 0.5;
      break;
    default:
      $valorPrimerNaipe = $primerNaipe;
      break;
  }

  /** 
   * Se evalúa el valor del segundo naipe y
   * en base a su valor se mantiene el valor
   * o el nombre de la carta
   */
  switch($segundoNaipe) {
    case 10:
      $segundoNaipe = 'Sota';
      $valorSegundoNaipe = 0.5;
      break;
    case 11:
      $segundoNaipe = 'Caballo';
      $valorSegundoNaipe = 0.5;
      break;
    case 12:
      $segundoNaipe = 'Rey';
      $valorSegundoNaipe = 0.5;
      break;
    default:
      $valorSegundoNaipe = $segundoNaipe;
      break;
  }

  /** Se calcula el valor de la mano (jugada) */
  $valorDeJugada = $valorPrimerNaipe + $valorSegundoNaipe;

  /** Determina si la mano es ganadora */
  if ($valorDeJugada !== 9.5) {
    $resultadoAMostrar = '<p>Puntos obtenidos <b>'. $valorDeJugada .'</b></p>';
  } else {
    $resultadoAMostrar = '<p><b> GANADOR </b></p>';
  }
?>

<main class="custom-card border d-flex flex-column justify-content-center align-items-center gap-3">
  <header class="bg-grey p-3">
    <h2 class="text-center">9 y Medio</h2>
  </header>
  <article class="gap-2 py-5">
    <p>
      Naipe 1:
      <b>
        <!-- Se Evalúa si se debe mostrar el valor del naipe o el nombre de la figura -->
        <?php 
          if ($valorPrimerNaipe === 0.5) {
            echo $primerNaipe;
          } else {
            echo $valorPrimerNaipe;
          }
        ?>
      </b>
    </p>
    <p>
      Naipe 2:
        <b>
        <!-- Se Evalúa si se debe mostrar el valor del naipe o el nombre de la figura -->
          <?php 
           if ($valorPrimerNaipe === 0.5) {
              echo $segundoNaipe;
            } else {
              echo $valorSegundoNaipe;
            }
          ?>
        </b>
    </p>

    <?php echo $resultadoAMostrar ?>
  </article>
</main>


<?php
  require_once('./php/pie.php');
?>