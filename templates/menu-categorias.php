<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="../public/css/style-facu.css">
<title>FinTion</title>
</head>
<body>
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
    <div class="cards-container">
        <div class="card" id="card1">Ingresos</div>
        <div class="card" id="card2">Egresos</div>
    </div>
    <div class="cards-container2">
        <div class="card" id="addCategory1" onclick="toggleForm('formContainer1', 'addCategory1')">Agregar categoria</div>
        <div class="card" id="addCategory2" onclick="toggleForm('formContainer2', 'addCategory2')">Agregar categoria</div>
    </div>
    <div class="form-container" id="formContainer1" style="display: none;">
        <form class="form" method="post" action="../src/categoria.php">
            <div class="form-content">
                <input type="text" placeholder="Categoria" name="categoria-ingreso">
                <br><br>
                <input type="text" placeholder="Descripción" name="descripcion-ingreso">
                <br><br>
                <input type="submit" value="Añadir">
            </div>
        </form>
    </div>
    <div class="form-container" id="formContainer2" style="display: none;">
         <form class="form" method="post" action="../src/categoria_egreso.php">
            <div class="form-content">
                <input type="text" placeholder="Categoria" name="categoria-egreso">
                <br><br>
                <input type="text" placeholder="Descripción" name="descripcion-egreso">
                <br><br>
                <input type="submit" value="Añadir">
            </div>
        </form>
    </div>
    <div class="cards-container3">
        <div class="cards" id="cardsContainer3"><?php include("../src/categoria.php") ?></div>
        <div class="cards" id="cardsContainer3"><?php include("../src/categoria_egreso.php") ?></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="../public/js/script.js"></script>
</body>
</html>
