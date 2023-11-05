<?php
require 'GenericDAO.php';

class CreatureDAO extends GenericDAO {

    public function createCreature($creature) {
      $query = "INSERT INTO creature (name, descripcion, avatar, attackPower, lifeLevel, weapon) VALUES(?,?,?,?,?,?)";
      $stmt = mysqli_prepare($this->conn, $query);
      $name = $creature->getName();
      $description = $creature->getDescription();
      $avatar = $creature->getAvatar();
      $attackPower = $creature->getAttackPower();
      $lifeLevel = $creature->getLifeLevel();
      $weapon = $creature->getWeapon();

      mysqli_stmt_bind_param($stmt, 'ssssss', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);
      return $stmt->execute();
    }

    public function updateCreature($creature) {
      $query = "UPDATE creature SET name=?, descripcion=?, avatar=?, attackPower=?, lifeLevel=?, weapon=? WHERE idCreature=?";
      $stmt = mysqli_prepare($this->conn, $query);
      $name = $creature->getName();
      $description = $creature->getDescription();
      $avatar = $creature->getAvatar();
      $attackPower = $creature->getAttackPower();
      $lifeLevel = $creature->getLifeLevel();
      $weapon = $creature->getWeapon();
      $id = $creature->getIdCreature();

      mysqli_stmt_bind_param($stmt, 'ssssssi', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon, $id);

      return $stmt->execute();
    }


    public function deleteCreature($creatureId){
      $deleteQuery = "DELETE FROM creature WHERE idCreature=?";
      $stmt = mysqli_prepare($this->conn, $deleteQuery);
      mysqli_stmt_bind_param($stmt, 'i', $id);
      return $stmt->execute();
    }

public function getCreatureById($creatureId) {
  $query = "SELECT name, descripcion, avatar, attackPower, lifeLevel, weapon FROM creature WHERE idCreature=?";
  $stmt = mysqli_prepare($this->conn, $query);
  mysqli_stmt_bind_param($stmt, 'i', $creatureId);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);

  $creature = new Creature();
  while (mysqli_stmt_fetch($stmt)) {
      $creature->setIdCreature($creatureId);
      $creature->setName($name);
      $creature->setDescription($description);
      $creature->setAvatar($avatar);
      $creature->setAttackPower($attackPower);
      $creature->setLifeLevel($lifeLevel);
      $creature->setWeapon($weapon);
  }

  return $creature;
}


  public function getAllCreatures() {
    $query = "SELECT * FROM creature";
        $result = mysqli_query($this->conn, $query);
        $creatures= array();
        while ($creatureBD = mysqli_fetch_array($result)) {

            $creatureCandidate = new Creature();
            $creatureCandidate->setIdCreature($creatureBD["idCreature"]);
            $creatureCandidate->setName($creatureBD["name"]);
            $creatureCandidate->setDescription($creatureBD["descripcion"]);
            $creatureCandidate->setAvatar($creatureBD["avatar"]);
            $creatureCandidate->setAttackPower($creatureBD["attackPower"]);
            $creatureCandidate->setLifeLevel($creatureBD["lifeLevel"]);
            $creatureCandidate->setWeapon($creatureBD["weapon"]);
            
            array_push($creatures, $creatureCandidate);
        }
        return $creatures;
  }
}
?>
