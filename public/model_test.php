<?php

REQUIRE '../library/Model.php';
REQUIRE '../library/User.php';

$model = new Model ();

//testing setter
$model->color = 'blue';

//testing getter
echo $model->size . PHP_EOL;

//testing user
echo User::getTableName() . PHP_EOL;

?>
