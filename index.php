<?php
require_once(dirname(__FILE__) . '/app/controllers/indexController.php');
$creatures = verTodos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="icon" href="./assets/imagenes/logo.jpg" type="image/x-icon">
    <title>RolePlayingGame</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-black text-white">
        <div class="container">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="./assets/imagenes/logo.jpg" width="200" height="auto">
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/RolePlayingGameMVC/app/creature/insert.php">Crear una criatura</a>
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <img src="./assets/imagenes/fotoPrincipal.jpg" alt="Imagen" class="img-fluid" width="2000" height="auto">
                
            </div>
            <div class="col-md-4">
                <h2>Comunidad de usuarios de Heroes</h2>
                <p>La aventura comienza aquí, en tu navegador</p>
                <a href="#" class="btn btn-primary">Juega ahora!</a>
            </div>
        </div>
    </div>
    <div class="row mt-4">
            <?php
                for ($i = 0; $i < sizeof($creatures); $i++) {
                    if (isset($creatures[$i])) {
                        echo $creatures[$i]->cardCreature();
                    }
                }
             ?>
    </div>
</body>
</html>