<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../public/css/style-facu.css">
<title>FinTion</title>
</head>
<body>
    <div class="navbar">
        <p class="navbar-icon">FinTion</p>
    </div>
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
    <script src="../public/js/script.js"></script>
</body>
</html>
