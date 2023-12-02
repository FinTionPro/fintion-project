<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="../public/css/style.css" />
  <title>Home - FinTion</title>
</head>

<body>
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
  <main class="container d-flex flex-column align-items-center justify-content-center" style="height: 90vh">
    <div class="container d-flex align-items-center justify-content-between first-info" style="margin: auto;">
      <!-- Card -->
      <div class="card text-center">
        <div class="card-header">
          <span>Ingresos</span>
        </div>
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text">$<?php include("../src/ingresos.php") ?></p>
            </div>
          </div>

          <div class="col-md-4">
            <img src="../public/img/flecha-hacia-arriba.png" alt="Flecha hacia arriba" class="card-img" />
          </div>
        </div>

        <div class="card-footer">
          <button class="btn btn-primary">
            <label for="btn-modal">
            Añadir Ingresos
            </label>
          </button>
        </div>

        <input type="checkbox" id="btn-modal">
        <div class="container-modal">
          <div class="content-modal">
            <form action="../src/ingresos.php" method="post">
            Monto:<input type="number" name="monto"> <br>
            Categoria:<input type="number" name="categoria"><br>
            Descripción:<input type="text" name="descripcion"><br>

            <input type="submit" value="Enviar" class="btn-modal">

            <div class="btn-cerrar">
            <label for="btn-modal">Cerrar</label>
          </div>
            </form>
      

            
        </div>
      </div>
      </div>

      <!-- Card -->
      <div class="card text-center">
        <div class="card-header">
          <span>Egresos</span>
        </div>
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text">$<?php include("../src/egresos.php") ?></p>
            </div>
          </div>

          <div class="col-md-4">
            <img src="../public/img/flecha-hacia-abajo.png" alt="Flecha hacia abajo" class="card-img" />
          </div>
        </div>

        <div class="card-footer">
        <button class="btn btn-primary">
            <label for="btn-modal2">
            Añadir Ingresos
            </label>
          </button>
        </div>

        <input type="checkbox" id="btn-modal2">
        <div class="container-modal">
          <div class="content-modal">
            <form action="egresos.php" method="post">
            Monto:<input type="number"> <br>
            Categoria:<input type="text"><br>
            Fecha:<input type="date">
            </form>
            
      

            <div class="btn-cerrar">
            <input type="submit" value="Enviar" class="btn-modal">
            <label for="btn-modal">Cerrar</label>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center second-info" style="margin: auto;">
      <!-- Card -->
      <div class="card text-center balance">
        <div class="card-header">
          <span>Balance</span>
        </div>
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text">$ <?php include("../src/balance.php") ?></p>
            </div>
          </div>

          <div class="col-md-4">
            <img src="../public/img/arriba-abajo.png" alt="Flecha hacia arriba y abajo" class="card-img" />
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>