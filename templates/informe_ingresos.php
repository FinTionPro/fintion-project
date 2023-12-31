<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Ingresos - FinTion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../public/css/informe.css">
</head>

<body>
    <!-- navbar -->
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

    <!-- botones de coso -->
    <HEader class="bottons">
        <div class="card" id="active" style="width: 18rem;">
            <a href="#" class="cen">
                <div class="card-body">
                    <h5 class="card-title">
                        Ingresos
                    </h5>
                </div>
            </a>
        </div>

        <div class="card" style="width: 18rem;">
            <a href="informe_egresos.php" class="cen">
                <div class="card-body">
                    <h5 class="card-title">
                        Egresos
                    </h5>
                </div>
            </a>
        </div>

        <div class="card" style="width: 18rem;">
            <a href="informe_balance.php" class="cen">
                <div class="card-body">
                    <h5 class="card-title">
                        Balance
                    </h5>
                </div>
            </a>
        </div>
    </HEader>

    <!-- tabla -->
    <div class="container d-flex align-items-center justify-content-between"
        style="margin: auto; text-align: center; max-width: 960px;">
        <div class="card" id="tabla">
            <div class="card-header" id="card1">
                Ingresos y Categoria
            </div>
            <ul class="list-group list-group-flush">
                <?php include("../src/informe_ingreso.php"); ?>
            </ul>
        </div>

        <!-- resultado -->
        <div class="card" id="tabla2">
            <div class="card-header" id="card2">
                Total de Ingresos
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item" id="cuentas"> $ <?php echo number_format($totalIngresos, 2); ?></li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>