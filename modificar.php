<?php
include("conexion/conexion.php");

if (isset($_POST["modificar"])) {
    $id = $_POST['id'];
    $direccion = $_POST['address'];
    $mesa = $_POST['table'];
    $silla = $_POST['chair'];
    $mantel = $_POST['mantel'];
    $status = $_POST['opciones'];

    $sql = "UPDATE products SET `table`= '$mesa',chair = '$silla', tablecloth = '$mantel', `address` = '$direccion', `status` = '$status' WHERE id_products = '$id'";
    if (mysqli_query($conn, $sql)) {
      header('location: index.php');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
?>