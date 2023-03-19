<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Recommended Books</title>
</head>
<style>
</style>
<body>

<ul>
    <?php foreach ($filteredBooks as $book): ?>
        <li>
            <a href="<?= $book['url'] ?>">
                <?= $book['name'] ?>
            </a>
            <?= $book['year'] ?>
            by <?= $book['author'] ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
