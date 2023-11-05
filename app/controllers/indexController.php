<?php
require_once(dirname(__FILE__) . '/../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../app/Creature.php');

function verTodos() {
    $creatureDAO = new CreatureDAO();
    return $creatureDAO->getAllCreatures();
}
?>
