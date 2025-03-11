<?php
include_once("client.php");

if (isset($_GET['marca'])) {
    $marca = $_GET['marca'];
    $modelos = $client->ObtenerModelosPorMarca($marca);

}

?>


<h1>Listado de marcas y modelos disponibles</h1>


<ul>
    <?php
    foreach ($modelos as $modelo) {
        ?>
        <li><?php echo $modelo . "\n" ?>

        </li>
        <?php
    }
    ?>
</ul>