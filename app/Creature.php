<?php

class Creature {

    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;

    public function __construct() {
        
    }
    public function getIdCreature() {
        return $this->idCreature;
    }

    public function setIdCreature($idCreature): void {
        $this->idCreature = $idCreature;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function setAvatar($avatar): void {
        $this->avatar = $avatar;
    }

    public function getAttackPower() {
        return $this->attackPower;
    }

    public function setAttackPower($attackPower): void {
        $this->attackPower = $attackPower;
    }

    public function getLifeLevel() {
        return $this->lifeLevel;
    }

    public function setLifeLevel($lifeLevel): void {
        $this->lifeLevel = $lifeLevel;
    }

    public function getWeapon() {
        return $this->weapon;
    }

    public function setWeapon($weapon): void {
        $this->weapon = $weapon;
    }


    function cardCreature() {
        $result = '<div class="d-flex">';
        $result .= '<div class="card w-25">';
        $result .= '<h2 class="card-title">'. $this->name.'</h2>';
        $result .= '<img src="'.$this->avatar.'" class="card-img-top" alt="Imagen de la criatura '. $this->name.'">';
        $result .= '<p class="card-text">'. $this->description.'</p>';
        $result .= '<a href="/RolePlayingGameMVC/app/creature/detail.php?id=' . $this->getIdCreature() . '" class="btn btn-secondary">Mostrar más</a>';
        $result .= '<a href="/RolePlayingGameMVC/app/creature/edit.php?id=' . $this->getIdCreature() . '" class="btn btn-primary">Modificar</a>';
        $result .= '<a href="/RolePlayingGameMVC/app/controllers/deleteController.php?id='.$this->getIdCreature().'" class="btn btn-danger">Eliminar</a>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';


        return $result;
    }
}
?>