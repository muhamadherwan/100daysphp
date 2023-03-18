<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
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
        $name = "Dark Matter";
        $read = false;

        if ($read) {
            $message = "You have read $name";
        } else {
            $message = "You have NOT read $name";
        }
    ?>

<h1>
    <?= $message ?>
</h1>
</body>
</html>
