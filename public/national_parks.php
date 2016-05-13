<?php

REQUIRE '../db_connect.php';
REQUIRE '../Input.php';

function pageController($dbc) {

    $data = [];

    $stmt = $dbc->query('SELECT * FROM national_parks');

    $data['parks'] = $stmt->fetchALL(PDO::FETCH_ASSOC);

    $data['parks'] = $stmt->

    return $data;

}

    extract(pageController($dbc));

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>National Parks</title>

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



</body>
</html>


