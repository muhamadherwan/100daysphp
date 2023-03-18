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
            ],
            [
                "name" =>"Book 4",
                "author" => "James",
                "url" => "http://example.com",
                "year" => "2003"
            ]
        ];

        function filterByAuthor($books, $author) {
            $filteredBooks = [];

            foreach ($books as $book ) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }
    ?>

<ul>
     <?php foreach (filterByAuthor($books, 'James') as $book): ?>
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
