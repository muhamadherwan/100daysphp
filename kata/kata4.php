<!doctype html>
<html lang="">
<head><title>Kata4</title></head>
<body>
<?php
$stories = [
    ['name' => 'mando', 'year' => 2000],
    ['name' => 'mr.robot', 'year' => 2001],
    ['name' => 'moriarty', 'year' => 2003]
];

//$filteredStories = array_filter( $stories, function($story){
//    return $story['year'] >= 2000 && $story['year'] <= 2001;
//});

$filteredStories = array_filter($stories, fn($story) => $story['year'] >= 2000 && $story['year'] <= 2001);

?>

<ul>
    <?php foreach ($filteredStories as $story): ?>
    <li>
        <?= $story['name'] ?>
        <?= $story['year'] ?>
    </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
