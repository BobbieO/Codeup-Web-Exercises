<?php

function randomize() {


    $favoriteThings = ["dogs", "pizza", "books", "key lime pie", "music", "science fiction", "fantasy", "winter"];

    //array of indexes of five random things
    // $fiveRandThings = array_rand($favoriteThings, 5);

    //get values instead of indexes
    // $fiveRandValues = $favoriteThings[$fiveRandThings];

    //implode array into a string
    // $fiveRandString = implode(", ", $fiveRandValues);

    // var_dump($fiveRandThings);

//something in the above is broken.

    //returns only the first item.
    foreach($favoriteThings as $oneThing) {
        return $oneThing;
    }


}

echo(randomize());

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Things</title>

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="/css/my-favorite-things.css">

</head>
<body>

<div>
    <h2>My Favorite Things</h2>
    <div>
        <table class="shadow">
            <tr>
                <th>Some of My Favorite Things, in No Particular Order</th>
            </tr>

            <tr>
                <td><?php echo(randomize())?></td>
            </tr>

            <tr>
                <td>and another thing</td>
            </tr>

            <tr>
                <td>something else</td>
            </tr>

            <tr>
                <td>and this thing</td>
            </tr>

            <tr>
                <td>this one too</td>
            </tr>

        </table>
    </div>
</div>
</body>
</html>