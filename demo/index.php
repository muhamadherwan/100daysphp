<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Recommended Books</title>
</head>
<style>
    body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }
</style>
<body>

    <?php
        $books = [
            "Book 1",
            "Book 2",
            "Book 3"
        ];
    ?>

<ul>
    <?php foreach ($books as $book): ?>
        <li><?= $book ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
