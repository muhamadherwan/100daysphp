<!doctype html>
<html lang="">
<head><title>Kata3</title></head>
<body>
<?php
$books = [
    ['title' => 'book1', 'year' => 2000, 'url' =>'#'],
    ['title' => 'book2', 'year' => 2003, 'url' => '#'],
    ['title' => 'book3', 'year' => 2005, 'url' => '#'],
    ['title' => 'book4', 'year' => 2005, 'url' => '#']
];

$filteredBooks = array_filter( $books, function($book){
    return $book['year'] >= 2000 && $book['year'] <= 2004;
});
?>

<ul>
    <?php foreach ($filteredBooks as $book): ?>
    <li>
        <a href="<?= $book['url'] ?>">
            <?= $book['title'] ?>&nbsp;
            <?= $book['year'] ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
</body>
</html>