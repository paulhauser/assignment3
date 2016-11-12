<?php
  include './php/Unit.php';
  include './php/Personnel.php';
  include './php/Vehicle.php';

  $bob = new Personnel('Firefighter', 'Bob', 10);
  $sue = new Personnel('EMT', 'Sue', 10);

  $engine1 = new Vehicle('Firetruck', 'Engine 1', 100, 4)


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <h1> Oh no, a fire! </h1>

  <div class="action-update">
    <p>
      Your team arrives at the scene.<br>
    </p>
  </div>
  <div class="status-update">
    <p>
      <?
        echo $bob."<br><br>";
        echo $sue."<br><br>";
        echo $engine1."<br><br>";
      ?>
    </p>
  </div>

  <div class="action-update">
    <p>
      Bob gets too close to a fire and is burned.<br>
    </p>
  </div>

  <div class="status-update">
    <p>
      <?
      $bob->hpIncrement(-5);

      echo $bob."<br><br>"
      ?>
    </p>
  </div>

  <div class="action-update">
    <p>
      Bob gets in the firetruck and drinks some magic coffee.<br>
    </p>
  </div>

  <div class="status-update">
    <p>
      <?
      $bob->enterVehicle($engine1);
      $bob->hpIncrement(2);
      echo $engine1."<br><br>";
      ?>
    </p>
  </div>

  <div class="action-update">
    <p>
      Sue jumps in the truck to treat Bob's burn.<br>
    </p>
  </div>
  <div class="status-update">
    <p>
      <?
      $bob->hpIncrement(3);
      $sue->enterVehicle($engine1);
      echo $engine1."<br><br>";
      ?>
    </p>
  </div>

    <div class="action-update">
      <p>
        Bob leaves the truck to fight the fire!<br>
      </p>
    </div>
    <div class="status-update">
      <p>
        <?
        $bob->exitVehicle($engine1);
        echo $engine1."<br><br>";
        ?>
      </p>
    </div>
</body>
</html>
