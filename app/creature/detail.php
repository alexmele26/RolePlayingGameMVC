<?php
require_once(dirname(__FILE__) . '../../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../Creature.php');
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $creatureDAO = new CreatureDAO();
    $creature = $creatureDAO->getCreatureById($id);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Datalles</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-light bg-secondary text-white">
            <div class="container">
                <a class="navbar-brand" href="/RolePlayingGameMVC/index.php">
                    <img src="/RolePlayingGameMVC/assets/imagenes/logo.jpg" alt="Logo" width="100" height="auto">
                </a>
            </div>
        </nav>
        <div class="container">
        <div class="card">
            <div class="card-block">
                <h2 class="card-title"><?php echo (isset($creature) ? $creature->getName() : ""); ?></h2>
                <p class="card-text description">Nombre: <?php echo (isset($creature) ? $creature->getDescription() : ""); ?></p>
                <p class="card-text description">Avatar:
                    <img src="<?php echo (isset($creature) ? $creature->getAvatar() : ""); ?>" alt="Imagen de la criatura" width="100" height="auto">
                </p>
                <p class="card-text description">Descripción: <?php echo (isset($creature) ? $creature->getDescription() : ""); ?></p>
                <p class="card-text description">Poder de ataque: <?php echo (isset($creature) ? $creature->getAttackPower() : ""); ?></p>
                <p class="card-text description">Nivel de Vida: <?php echo (isset($creature) ? $creature->getLifeLevel() : ""); ?></p>
                <p class="card-text description">Arma: <?php echo (isset($creature) ? $creature->getWeapon() : ""); ?></p>
            </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
    </body>
</html>

