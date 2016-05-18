<?php

REQUIRE '../library/Model.php';

$model = new Model ();

//testing setter
$model->color = 'blue';

//testing getter
echo $model->size . PHP_EOL;

?>
