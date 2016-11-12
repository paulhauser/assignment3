<?php
	// This is the file for the parent class

	class Unit {
    var $name;
    var $type;
    var $hp;


    public function hpIncrement($n) {
      $this->hp += $n;
    }

    public function getType() {
      return $this->type;
    }

    public function getName() {
      return $this->name;
    }

    public function getHp() {
      return $this->hp;
    }

    public function __toString() {
      return $this->getName() . ", " . $this->getType() . ", hp:" .
        $this->hp;
    }
	}

?>
