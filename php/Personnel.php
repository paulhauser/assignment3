<?php
	// this file will extend Unit.php

	class Personnel extends Unit {
    var $occupant_of;

    public function __construct($t, $n, $h) {
      $this->type = $t;
      $this->name = $n;
      $this->hp = $h;
    }

    public function enterVehicle($vehicle) {
      $this->occupant_of = $vehicle->getName();
      $vehicle->addOccupant($this);
    }

    public function exitVehicle($vehicle) {
      $this->occupant_of = $vehicle->getName();
      $vehicle->removeOccupant($this);
    }

	}

?>
