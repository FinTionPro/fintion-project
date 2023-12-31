<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport"
    content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
  <meta>
  <title>Document</title>
  <link href="ruta/a/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/css/style.css">
  <link rel="stylesheet" href="../public/css/styles.css">
</head>

<body>
  <form action="../src/conexion-presupuesto.php"></form>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="home.php" style="color: #fff;">FinTion</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon hamburguer"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="informe_ingresos.php" style="color: #fff;">Informe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu-categorias.php" style="color: #fff;">Categoria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="presupuesto.php" style="color: #fff;">Presupuesto</a>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: #fff;">Usuario</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container d-flex flex-column align-items-center justify-content-center" style="margin-top: 200px;">
    <div class="container d-flex justify-content-between" style="margin: auto; text-align: center;">
      <div class="card" id="tabla">
        <div class="card-header" id="card1">
          Historial
        </div>
        <ul class="list-group list-group-flush">
          <?php include("../src/conexion-presupuesto.php")?>
        </ul>

      </div>
      <div class="boton-modal">
        <label for="btn-modal">
          Crear Presupusto
        </label>
      </div>

    </div>
  </div>

  <!--Boton-->




  <!--Fin de Boton-->
  <!--Ventana Modal-->
  <input type="checkbox" id="btn-modal">
  <div class="container-modal">
    <div class="content-modal">
      <form action="../src/conexion-presupuesto.php" method="post">
      Monto:<input type="number" name="monto"> <br>
      <input type="submit" value="Enviar" class="btn-modal">
      </form>
      

      <div class="btn-cerrar">
        
        <label for="btn-modal">Cerrar</label>
      </div>
    </div>
  </div>
  <!--Fin de Ventana Modal-->
  <!-- Contenido de tu sitio web -->


  <script src="ruta/a/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>