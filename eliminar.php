<?php
include("conexion/conexion.php");

if (isset($_POST["eliminar"])) {
    $id = $_POST['id'];
    $sql = "UPDATE products SET asset = 0 WHERE id_products = '$id'";
    if (mysqli_query($conn, $sql)) {
      header('location: index.php');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
?>