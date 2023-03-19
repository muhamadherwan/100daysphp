<!doctype html>
<html lang="">
<head><title>Cars Filter</title></head>
<body>

<?php

  $cars = [
    [
      "brand" => "honda",
      "year" => 2000
    ],
    [
      "brand" => "bmw",
      "year" => 2000
    ],
    [
      "brand" => "toyota",
      "year" => 2002
    ],
    [
      "brand" => "zonda",
      "year" => 2003
    ]  
  ];

  $filteredCars = array_filter($cars, function($car){
    return $car['year'] >= 2000 && $car['year'] <= 2002;
  });

?>

<ul>

<?php foreach ($filteredCars as $car): ?>
  <li>
      <a href="<?= $car['url'] ?>">
        <?= $car['brand'] ?>
      </a>
      <?= $car['year'] ?>
  </li>
<?php endforeach; ?>
</ul>

</body>
</html>
