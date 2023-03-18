<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Recommended Books</title>
</head>
<style>
</style>
<body>

    <?php
        $books = [
            [
                "name" => "Book 1",
                "author" => "James",
                "url" => "http://example.com",
                "year" => "2000"
            ],
            [
                "name" => "Book 2",
                "author" => "Sherlock",
                "url" => "http://example.com",
                "year" => "2001" 
            ],
            [
                "name" =>"Book 3",
                "auhor" => "John",
                "url" => "http://example.com",
                "year" => "2003"
            ]
        ];
    ?>

<ul>
     <?php foreach ($books as $book): ?>
        <li>
            <a href="<?= $book['url'] ?>">
            <?= $book['name'] ?> 
            </a>
            <?= $book['year'] ?>  
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
