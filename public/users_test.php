<?php

REQUIRE '../library/User.php';

$user = new User;

$user->name = 'Julie';
$user->email = 'Julie@gmail.com';
$user->password = 'NewPass';
$user->save();

$user->name = 'Sally';
$user->password = 'butterfly';
$user->save();

echo "the id of the last inserted row in the db is " . $user->id . PHP_EOL;

// echo "All users below " . PHP_EOL;
// $allUsers = User::all();
// var_dump($allUsers);

echo "first user below " . PHP_EOL;
$user = User::find(1);
$user->email = 'Bob@mail.com';
$user->save();

?>

