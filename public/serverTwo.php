<?php

include 'Randomize.php';

function pageController() 
{
    Randomize::generatePhrase(); 
    return array('scrollMsg'=>Randomize::generatePhrase());
}

//extract returns an array--both key and value
extract(pageController());

?>


<!DOCTYPE html>
<html>
<head>
    <title>Random Quest Generator <?=$scrollTwo?></title>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="/css/server-name-generator.css">

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

</head>
<body id="background">
    <div class="container">

        <div class="dialogue">
            <!-- to output randomized stuff to proper spot on page -->
            <h1 class="showMe text">Fetch me <?= $scrollMsg;?>!</h1>
                <p class="wizTalk text">We don't have time for menial tasks.</p>
        </div>

        <div class="position">
            <div class="objects"><span class="wizard"><img src="/img/questWizard.png"></span></div>

            <div class="objects"><span class="miniScroll"><img src="/img/rolledScroll.png"></span></div>

            <div class="objects"><span class="warrior"><img src="/img/warrior.png"></span></div>
        </div>

        <div id="attriBtn">
            <p class="small">Some images from Perfect World International, arc &#153</p>
            <button id="newQuest">New Quest</button>
        </div>

    </div>
<script src="/js/jquery.js"></script>
<script src="/js/server-name-generator.js"></script>
</body>
</html>

