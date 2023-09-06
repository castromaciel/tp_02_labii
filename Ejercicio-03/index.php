<?php
  /** Importación del encabezado */
  require_once('./php/encabezado.php');

  /** Definición de constantes */
  const DESCUENTO_VISA = 0.2;
  const DESCUENTO_MASTER = 0.18;
  const DESCUENTO_NARANJA = 0.15;
  const DESCUENTO_SU_CREDITO = 0.1;
  const DESCUENTO_TITANIO = 0.08;

  /** Definición de variables */
  $precio = mt_rand(10000 * 100, 30000 * 100) / 100;
  $tarjeta = mt_rand(1,5);

  /**
   * Se evalúa el valor de tarjeta y se 
   * realiza el calculo de descuento, el
   * total a pagar y que imagen mostrar
   */
  switch ($tarjeta) {
    case 1:
      $imagen = "<img class='img-fluid w-100' src='./img/V.jpg' alt='Visa' />";
      $totalAPagar = $precio * (1 - DESCUENTO_VISA);
      $descuento = DESCUENTO_VISA * 100;

      break;
    case 2:
      $imagen = "<img class='img-fluid w-100' src='./img/M.jpg' alt='Tarjeta mastercard' />";
      $totalAPagar = $precio * (1 - DESCUENTO_MASTER);
      $descuento = DESCUENTO_MASTER * 100;

      break;
    case 3:
      $imagen = "<img class='img-fluid w-100' src='./img/N.jpg' alt='Tarjeta Naranja' />";
      $totalAPagar = $precio * (1 - DESCUENTO_NARANJA);
      $descuento = DESCUENTO_NARANJA * 100;

      break;
    case 4:
      $imagen = "<img class='img-fluid w-100' src='./img/S.jpg' alt='Tarjeta sucredito' />";
      $totalAPagar = $precio * (1 - DESCUENTO_SU_CREDITO);
      $descuento = DESCUENTO_SU_CREDITO * 100;

      break;
    case 5:
      $imagen = "<img class='img-fluid w-100' src='./img/T.jpg' alt='Tarjeta titanio' />";
      $totalAPagar = $precio * (1 - DESCUENTO_TITANIO);
      $descuento = DESCUENTO_TITANIO * 100;

      break;
  }

  /**
   * Formatear campos a un estándar, con 2 decimales
   * separados con coma y divisor de miles con punto.
   */
  $printPrecio = number_format($precio, 2, '.', ',');
  $printTotalAPagar = number_format($totalAPagar, 2, '.', ',');

?>

<main class="custom-card">
  <section class="d-flex flex-row">
    <picture class="col-7">
      <?php echo $imagen ?>
    </picture>
    <article class="col-5 p-3 d-flex flex-column gap-2">
      <p>
        Precio compra: <b>$ <?php echo $printPrecio ?></b>
      </p>
      <p>
        Descuento: <b><?php echo $descuento ?>%</b>
      </p>
      <p class="text-danger">
        TOTAL A PAGAR: <b>$ <?php echo $printTotalAPagar ?></b>
      </p>
    </article>
  </section>
</main>

<?php
  /** Importación del pie de página */
  require_once('./php/pie.php');
?>
