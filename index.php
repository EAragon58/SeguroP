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
  <title>Administracion de mesas</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Mesas</th>
        <th scope="col">Sillas</th>
        <th scope="col">Manteles</th>
        <th scope="col">Direccion</th>
        <th scope="col">Estado</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM products WHERE asset = 1";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<tr>';
          echo '<th scope="row">' . $row["id_products"] . '</th>';
          echo '<td>' . $row["table"] . '</td>';
          echo '<td>' . $row["chair"] . '</td>';
          echo '<td>' . $row["tablecloth"] . '</td>';
          echo '<td>' . $row["address"] . '</td>';
          echo '<td>' . $row["status"] . '</td>';
          echo '</tr>';
        }
      } else {
        echo "0 resultados";
      }
      ?>
    </tbody>
  </table>

  <!--Vnetana emergente para agregar-->
  <section>
    <button id="mostrarVentana" class="btn btn-primary">Agregar</button>
    <button id="mostrarEliminar" class="btn btn-primary">Eliminar</button>
    <button id="mostrarModificar" class="btn btn-primary">Modificar</button>
  </section>

  <div class="ventana-flotante" id="ventanaFlotante">
    <div class="contenido">
      <span class="cerrar" id="cerrarVentana">&times;</span>
      <form action="insertar.php" method="post">
        <div class="mb-3">
          <label for="address" class="form-label">Direccion</label>
          <input type="text" class="form-control" id="address" name="address" maxlength="20" required>
        </div>
        <div class="mb-3">
          <label for="table" class="form-label">Mesas</label>
          <input type="text" class="form-control" id="table" name="table" maxlength="2" required>
        </div>
        <div class="mb-3">
          <label for="chair" class="form-label">Sillas</label>
          <input type="text" class="form-control" id="chair" name="chair" maxlength="3" required>
        </div>
        <div class="mb-3">
          <label for="mantel" class="form-label">Manteles</label>
          <input type="text" class="form-control" id="mantel" name="mantel" maxlength="2" required>
        </div>
        <select class="form-select" id = "opciones" name = "opciones">
          <option value="Pendiente">Pendiente</option>
          <option value="Entregado">Entregado</option>
          <option value="Recogido">Recogido</option>
        </select>
        <button type="submit" name="agregar" class="btn btn-primary">Agregar</button>
      </form>
    </div>
  </div>
  <!--Fin de la ventana de agregar-->

  <!--Venetana emergente para modificar-->

  <div class="ventana-flotante" id="ventanamodificar">
    <div class="contenido">
      <span class="cerrar" id="cerrarVentanaM">&times;</span>
      <form action="modificar.php" method="post">
        <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input type="text" class="form-control" id="id" name="id" maxlength="2" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Direccion</label>
          <input type="text" class="form-control" id="address" name="address" maxlength="20">
        </div>
        <div class="mb-3">
          <label for="table" class="form-label">Mesas</label>
          <input type="text" class="form-control" id="table" name="table" maxlength="2">
        </div>
        <div class="mb-3">
          <label for="chair" class="form-label">Sillas</label>
          <input type="text" class="form-control" id="chair" name="chair" maxlength="3">
        </div>
        <div class="mb-3">
          <label for="mantel" class="form-label">Manteles</label>
          <input type="text" class="form-control" id="mantel" name="mantel" maxlength="2">
        </div>
        <select class="form-select" id = "opciones" name = "opciones">
          <option value="Pendiente">Pendiente</option>
          <option value="Entregado">Entregado</option>
          <option value="Recogido">Recogido</option>
        </select>
        <button type="submit" name="modificar" class="btn btn-primary">Modificar</button>
      </form>
    </div>
  </div>
  <!--Fin de la ventana de modificar-->

  <div class="ventana-flotante" id="ventanaeliminar">
    <div class="contenido">
      <span class="cerrar" id="cerrarVentanaE">&times;</span>
      <form action="eliminar.php" method="post">
        <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input type="text" class="form-control" id="id" name="id" maxlength="2" required>
        </div>
        <button type="submit" name="eliminar" class="btn btn-primary">Modificar</button>
      </form>
    </div>
  </div>
  <!--Fin de la ventana de eliminar-->

  <script src="scripts/ventana.js"></script>
  <script src="scripts/validacion.js"></script>
</body>

</html>