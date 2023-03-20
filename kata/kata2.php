<!doctype html>
<html lang="">
<head><title>Kata 2</title></head>
<body>
<?php
$linuxs = [
    ['name' =>'kali', 'year' => 2000, 'url' => '#'],
    ['name' => 'ubuntu', 'year' => 2002, 'url' => '#'],
    ['name' => 'fedora', 'year' => 2005, 'url' => '#'],
    ['name' => 'redhat', 'year' => 2006, 'url' => '#']
];

$filteredLinuxs = array_filter($linuxs, function($linux){
    return $linux['year'] >= 2000 && $linux['year'] <= 2005;
});

?>

<ul>
    <?php foreach ($filteredLinuxs as $linux): ?>
        <li>
            <a href="<?= $linux['url'] ?>">
                <?= $linux['name'] ?>&nbsp;
                <?= $linux['year'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>