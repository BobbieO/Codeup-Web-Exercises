<?php

function pageController()
{
    // $count = !isset($_GET['count']) ? 0 : $_GET['count'];


    $count = $_GET['count'];

    return ['count' => $count];
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Counter</title>
</head>
<body>

<div>
    <h1><?= $count ?></h1>
</div>

<a href="?count=<?= $count + 1 ?>">Up</a>
<a href="?count=<?= $count - 1 ?>">Down</a>

</body>
</html>