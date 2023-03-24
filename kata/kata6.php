<!doctype html>
<html lang="">
<head><body>Kata 6</body></head>

<body>

<?php

    $heroes = [
        ['name' => 'taylor', 'year' => 2000],
        ['name' => 'jeffry', 'year' => 2001],
        ['name' => 'adam', 'year' => 2003],
        ['name' => 'matt', 'year' => 2005],
    ];

    function filterByYear($start, $end){
        return fn($hero) => $hero['year'] >= $start &&
            $hero['year'] <= $end;
    }

    $filterHeroes = array_filter($heroes, filterByYear(2000, 2004));

    function formatHero($hero) {
        return "<li>{$hero['name']} {$hero['year']}</li>";
    }

    $formatHeroes = array_map('formatHero', $filterHeroes);
 ?>

<ul>
    <?= implode('',$formatHeroes) ?>
</ul>
</body>
</html>