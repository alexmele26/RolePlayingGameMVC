<?php
require_once(dirname(__FILE__) . '../../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../Creature.php');
$creatureDAO = new CreatureDAO();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    eliminarCreature();
}

function eliminarCreature() {
    $id = $_GET["id"];

    $creatureDAO = new CreatureDAO();
    $creatureDAO->deleteCreature($id);

    echo "La eliminación se realizó con éxito. Espere... ";

    header('refresh:3;url=/RolePlayingGameMVC/index.php'); 
}
?>

