<!-- Window IS the BOM, and DOM is document. Everything belongs to BOM, DOM is a child of BOM.
setInterval() sets the interval between repetitions of an action set;
clearInterval() stops the interval repetitions;
setTimeout() allows code to be executed after a specified delay;
clearTimeout() cancels the setTimeout;
CMD-shift-R is hard refresh from server; little circle arrow is refresh from cache;

Example of cleaner function call within setTimeout:

function alertMessage() {
    alert("Here is a delayed hello");
}

var timeoutId = setTimeout(alertMessage, delay);

No parenthesis needed on line 14's alertMessage bc the setTimeout calls it.

 -->
}


<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>

    <button id="defuser">Defuse the BOM</button>

    <script>
        var detonationTimer = 5;

        // TODO: This function needs to be called once every second
        function updateTimer()
        {
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                document.body.innerHTML = '';
            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

            //testing stopping at 2 sec with an alert msg
        // {
        //     if (detonationTimer == 2) {
        //         alert("Movie Save!");
        //         clearInterval(timer);
        //     }
        // }

            detonationTimer--;
        }

        var timer = setInterval(updateTimer, 1000);

        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM()
        {
            clearInterval(timer);
        }

        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons
        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);
    </script>
</body>
</html>
