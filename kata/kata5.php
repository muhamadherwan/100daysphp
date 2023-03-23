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

function filterByYear($startYear, $endYear) {
    return fn($story) => $story['year'] >= $startYear && $story['year'] <= $endYear;
}

$filteredStories = array_filter($stories, filterByYear(2000, 2001));

function formatStory($story) {
    return "<li>{$story['name']} {$story['year']}</li>";
}

$formattedStories = array_map('formatStory', $filteredStories);
?>

<ul>
    <?= implode('', $formattedStories) ?>
</ul>

</body>
</html>
