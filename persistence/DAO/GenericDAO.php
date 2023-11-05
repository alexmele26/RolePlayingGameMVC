<?php
require_once(dirname(__FILE__) . '/../conf/PersistentManager.php');
abstract class GenericDAO {

  //Conexión a BD
  protected $conn = null;
  //Constructor de la clase
  public function __construct() {
    $this->conn = PersistentManager::getInstance()->get_connection();
  }

  abstract protected function createCreature($creature);
  abstract protected function updateCreature($creature);
  abstract protected function deleteCreature($creatureId);
  abstract protected function getCreatureById($creatureId);
  abstract protected function getAllCreatures();



}
