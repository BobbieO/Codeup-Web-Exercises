<?php

REQUIRE '../db_connect.php';
REQUIRE '../Input.php';

function pageController($dbc) {

    $data = [];

    $data['page'] = Input::has('page') ? Input::get('page') : 1;

    $offset = ($data['page'] - 1) * 4; 

    $stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT 4 OFFSET :offset');

    $stmt->bindValue(':offset', 4, PDO::PARAM_INT);
    $stmt->execute();

    
    $data['parks'] = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $data;
}
    extract(pageController($dbc));
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>National Parks</title>

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css'>

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="/css/national_parks.css">

</head>
<body>

<div>
    <p>You are on page <?=$page;?> </p>
    <h2>National Parks of the United States</h2>
    <div>
        <table class="shadow">
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Date Established</th>
                <th>Acreage</th>
                <th>Description</th>
            </tr>

            <?php foreach($parks as $park) : ?>
                <tr><td><?= $park['name']; ?></td>
                <td><?= $park['location']; ?></td>
                <td><?= date_format(date_create($park['date_established']), 'm-d-Y' ); ?></td>
                <td><?= $park['area_in_acres']; ?></td>
                <td><?= $park['description']; ?></td></tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>

<footer class="footer"> 
    <?php if($page >= 2): ?> 
        <a href="?page=<?= $page - 1 ?>" class="btn btn-default">Previous</a>
    <?php endif; ?>

    <?php if($page < count($parks) ): ?>
        <a href="?page=<?= $page + 1 ?>" class="btn btn-default">Next</a>
    <?php endif; ?>
</footer>

</body>
</html>


