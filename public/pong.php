<?php

function pageController()
{ 
    $count = !isset($_GET['count']) ? 0 : $_GET['count'];
    return ['count' => $count];
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Pong's Ping Pong</title>
</head>
<body>

<div>
    <h1>Pong</h1>
</div>

<div>
    <h2><?= $count ?></h2>
</div>

<a href="ping.php?count=<?= $count + 1 ?>">HIT</a>
<a href="ping.php?count=0">MISS</a>

</body>
</html>