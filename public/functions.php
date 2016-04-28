<?php
function pageController() {

    function inputHas($key) {
        if($key) {
            return true;
        } else {
            return false;
        }
    }

    function inputGet($key) {
        if (isset($key['value'])) {
            return $value;
        } else {
            return null;
        }
    }

    function escape($input) {
        return htmlspecialchars(strip_tags($input));
    }


}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Functions</title>
</head>
<body>
      <? php require_once '/ping.php'; ?> 
      <? php require_once '/pong.php'; ?> 
      <? php require_once '/login.php'; ?> 

</body>
</html>

