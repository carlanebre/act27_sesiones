<?php
include("header.php");
require_once('config.php');
session_start();
echo "<h1>Eliminar</h1>";
if (isset($_GET['id'])){
    $_SESSION['id_pedido']=$_GET['id'];
}
if (isset($_GET['id'])){
    if (isset($_POST['si'])) {
        $querys = "DELETE FROM pedidos WHERE id = {$_GET['id']}";
        $resultado = $conn->query($querys);
        session_destroy();
        header('location: consultar.php');
    }elseif(isset($_POST['no'])){
        session_destroy();
        header('location: consultar.php');
    }
    foreach($conn->query('SELECT * from pedidos where id=' . $_GET['id'].'') as $row) {
        echo '<div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">'.$row['producto'].'</h5>
          <p class="card-text">'.$row['fecha_pedido'].'</p>
          <p class="card-text">'.$row['unidades'].'</p>
          <p class="card-text">'.$row['id'].'</p>
        </div>
      </div>';
     }
     ?>
     <h3>¿Estás seguro de que quieres borrar el pedido: <?php echo $_GET['id']; ?>?</h3>
     <form action="" method="post">
         <button type="submit" class="btn btn-secondary" name="no">No</button>
         <button type="submit" class="btn btn-primary" name="si">Sí</button>
     </form>
     
    <?php
}else{
    echo "<h3>No has seleccionado nada, vuelve a 'Consultar'</h3>";
}

?>


<?php
include ("footer.html");
?>