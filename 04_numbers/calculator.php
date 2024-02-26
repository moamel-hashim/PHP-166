<?php

$milesDriven = $_POST['miles_driven'];
$gallonsUsed = $_POST['gallons_used'];
$priceGallon = $_POST['price_gallon'];

$miles_per_gallon = $milesDriven/ $gallonsUsed;

$milesDriven = number_format($milesDriven);
$priceGallon = number_format($priceGallon, 2);

$cost = $gallonsUsed * $priceGallon;

$miles_per_gallon = number_format($miles_per_gallon, 2);


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trip Calculations</title>
</head>
<body>
<header>
  <h1>Trip Calculations</h1>
</header>
<section>
  <h3>Values Entered</h3>
  <p>Miles Driven: <?php echo "$milesDriven"?></p>
  <p>Gallons Used: <?php echo "$gallonsUsed"?></p>
  <p>Price per Gallon: <?php echo "$" . "$priceGallon"?></p>
</section>
<section>
  <h3>Your Results</h3>
  <p>Miles per Gallon: <?php echo "$miles_per_gallon" ?></p>
  <p>Cost of the trip: <?php echo "$" . "$cost" ?></p>
</section>
</body>
</html>
