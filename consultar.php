<?php include ("header.php");
?>

<h2>Listado de pedidos</h2>

<table class="table table-bordered">
    <th class="" scope="col">ID</th>
    <th class="" scope="col">Producto</th>
    <th class="" scope="col">Fecha pedido</th>
    <th class="" scope="col">Unidades</th>

<?php
require_once('config.php');
try {
    foreach($conn->query('SELECT * from pedidos') as $row) {
        echo("
            <tr>
                <td>".$row['id']."</td>
                <td>".$row['producto']."</td>
                <td>".$row['fecha_pedido']."</td>
                <td>".$row['unidades']."</td>
                <td><a href='eliminar.php?id=".$row['id']."'><ion-icon name='trash-outline'></ion-icon></a></td>
            </tr>");

    }
    $conn = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
</table>

<?php
include ("footer.html");
?>
