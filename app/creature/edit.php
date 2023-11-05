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
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <title>Edit</title>
    </head>
    <body>
        <nav class="navbar navbar-light bg-secondary text-white">
            <div class="container">
                <a class="navbar-brand" href="/RolePlayingGameMVC/index.php">
                    <img src="../../assets/imagenes/logo.jpg" alt="Logo" width="100" height="auto">
                </a>
                <h5>Modificar Criaturas</h5>
            </div>
        </nav>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="/RolePlayingGameMVC/app/controllers/editController.php">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $creature->getName(); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-2 control-label">Descripcion</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Descripcion" value="<?php echo $creature->getDescription(); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                                    <div class="col-sm-10">
                                        <input type="textbox" class="form-control" id="avatar" name="avatar" placeholder="Avatar" value="<?php echo $creature->getAvatar(); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="attackPower" class="col-sm-2 control-label">Poder de Ataque</label>
                                    <div class="col-sm-10">
                                        <input type="textbox" class="form-control" id="attackPower" name="attackPower" placeholder="Poder de ataque" value="<?php echo $creature->getAttackPower(); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lifeLevel" class="col-sm-2 control-label">Nivel de Vida</label>
                                    <div class="col-sm-10">
                                        <input type="textbox" class="form-control" id="lifeLevel" name="lifeLevel" placeholder="Nivel de Vida" value="<?php echo $creature->getLifeLevel(); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="weapon" class="col-sm-2 control-label">Arma</label>
                                    <div class="col-sm-10">
                                        <input type="textbox" class="form-control" id="weapon" name="weapon" placeholder="Arma" value="<?php echo $creature->getWeapon(); ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="idCreature" value="<?php echo $creature->getIdCreature(); ?>">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-secondary">Editar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>