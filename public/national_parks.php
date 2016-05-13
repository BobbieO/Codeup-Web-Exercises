<?php

REQUIRE '../db_connect.php';
REQUIRE '../Input.php';

function pageController($dbc) {

    $data = [];

    $data['page'] = Input::has('page') ? Input::get('page') : 1;

    $offset = ($data['page'] - 1) * 4; 

    $stmt = $dbc->query('SELECT * FROM national_parks LIMIT 4 OFFSET ' . $offset);
    
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
    <p>You are on page <?=$page;?> </p>

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="/css/national_parks.css">

</head>
<body>

<div>
    <h2>National Parks of the United States</h2>
    <div>
        <table class="shadow">
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Date Established</th>
                <th>Acreage</th>
            </tr>

            <?php foreach($parks as $park) : ?>
                <tr><td><?= $park['name']; ?></td>
                <td><?= $park['location']; ?></td>
                <td><?= $park['date_established']; ?></td>
                <td><?= $park['area_in_acres']; ?></td></tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>

<footer class="footer"> 
    <?php if($page>=2): ?> 
        <a href="?page=<?= $page - 1 ?>" class="btn btn-default">Previous</a>
    <?php endif; ?>

    <?php if($page < count($parks) ): ?>
        <a href="?page=<?= $page + 1 ?>" class="btn btn-default">Next</a>
    <?php endif; ?>
</footer>

</body>
</html>


