<?php
require_once(dirname(__FILE__) . '../../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../Creature.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    editarCreature();
}
function editarCreature() {
    $id = $_POST["idCreature"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $avatar = $_POST["avatar"];
    $attackPower = $_POST["attackPower"];
    $lifeLevel = $_POST["lifeLevel"];
    $weapon = $_POST["weapon"];

    $creature = new Creature();
    $creature->setIdCreature($id);
    $creature->setName($name);
    $creature->setDescription($description);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);

    $creatureDAO = new CreatureDAO();
    $creatureDAO->updateCreature($creature);
}

echo "La edición se realizó con éxito. Espere... ";


header('refresh:3;url=/RolePlayingGameMVC/index.php'); 
?>

