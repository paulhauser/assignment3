<?php
	// this file will extend Unit.php

	class Vehicle extends Unit {
    var $occupants;

    public function __construct($t, $n, $h, $c) {
      $this->type = $t;
      $this->name = $n;
      $this->hp = $h;
      $this->capacity = $c;
      $this->occupants = array();
    }

    public function addOccupant($person) {
      array_push($this->occupants, $person);
    }

    public function removeOccupant($person) {
      $i = 0;
      $j = -1;
      foreach($this->occupants as $element) {
        if($element->name === $person->name) {
          $j = $i;
        }
        $i++;
      }

      if($j != -1) {
        unset($this->occupants[$j]);
      }
    }

    public function __toString() {
      $s = implode(", ", $this->occupants);
      if(count($this->occupants) === 0) {
        $s = "empty";
      }

      return $this->getName() . ", " . $this->getType() . ", hp:" .
        $this->hp . "<br>&nbsp;contains: " . $s;
    }
	}

?>
