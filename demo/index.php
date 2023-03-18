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
                "year" => 2000
            ],
            [
                "name" => "Book 2",
                "author" => "Sherlock",
                "url" => "http://example.com",
                "year" => 2001
            ],
            [
                "name" =>"Book 3",
                "author" => "John",
                "url" => "http://example.com",
                "year" => 2003
            ],
            [
                "name" =>"Book 4",
                "author" => "James",
                "url" => "http://example.com",
                "year" => 2003
            ],
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
        ];

        $filteredBooks = array_filter($books, function ($book) {
            return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
        });

    ?>

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
