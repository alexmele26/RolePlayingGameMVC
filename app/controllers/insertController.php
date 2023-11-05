<?php
require_once(dirname(__FILE__) . '../../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../Creature.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   crearCreature();
}

function crearCreature() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["name"];
        $descripcion = $_POST["description"];
        $avatar = $_POST["avatar"];
        $attackPower = $_POST["attackPower"];
        $lifeLevel = $_POST["lifeLevel"];
        $weapon = $_POST["weapon"];}
      
    $creature = new Creature();
    $creature->setName($nombre);
    $creature->setDescription($descripcion);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);
    $creatureDAO = new CreatureDAO();
    $creatureDAO->createCreature($creature);
 
    echo "La creación se realizó con éxito. Espere... ";

    header('refresh:3;url=/RolePlayingGameMVC/index.php'); 
}
?>

