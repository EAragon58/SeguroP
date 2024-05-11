<?php
include("conexion/conexion.php");

if (isset($_POST["agregar"])) {
    $direccion = $_POST['address'];
    $mesa = $_POST['table'];
    $silla = $_POST['chair'];
    $mantel = $_POST['mantel'];
    $status = $_POST['opciones'];

    $sql = "INSERT INTO products (`table`,chair, tablecloth, asset, `address`, `status`) VALUES ('$mesa', '$silla', '$mantel', 1, '$direccion', '$status')";
    $result = $conn->query($sql);
    if ($result) {
      header('location: index.php');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
?>