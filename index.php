<?php
include ("conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
  <title>Document</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Mesas</th>
        <th scope="col">Sillas</th>
        <th scope="col">Manteles</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM products";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<tr>';
          echo '<th scope="row">' . $row["id_products"] . '</th>';
          echo '<td>' . $row["table"] . '</td>';
          echo '<td>' . $row["chair"] . '</td>';
          echo '<td>' . $row["tablecloth"] . '</td>';
          echo '</tr>';
        }
      } else {
        echo "0 resultados";
      }
      ?>
    </tbody>
  </table>

  <section>
  <button id="mostrarVentana" class="btn btn-primary">Primary</button>
</section>

<div class="ventana-flotante" id="ventanaFlotante">
  <div class="contenido">
    <span class="cerrar" id="cerrarVentana">&times;</span>
    <form>
  <div class="mb-3">
    <label for="table" class="form-label">Mesas</label>
    <input type="text" class="form-control" id="table" maxlength="2" required>
  </div>
  <div class="mb-3">
    <label for="chair" class="form-label">Sillas</label>
    <input type="text" class="form-control" id="chair" maxlength="3" required>
  </div>
  <div class="mb-3">
    <label for="mantel" class="form-label">Manteles</label>
    <input type="text" class="form-control" id="mantel" maxlength="2" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>

<script src="scripts/ventana.js"></script>
<script src="scripts/validacion.js"></script>
</body>
</html>