// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'violet'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

if (color == "red") {
    console.log("You picked red! Red is the color of apples.");
} else if (color == "orange") {
    console.log("You picked orange! Orange is the color of the fruit oranges.");
} else if (color == "yellow") {
    console.log("You picked yellow! Yellow is the color of bananas.")
} else if (color == "green") {
    console.log("You picked green! Green is the color of the inside of kiwis.")
} else if (color == "blue") {
    console.log("You picked blue! Blue is the color of the sky on good days.")
} else {
    console.log("You picked indigo or violet. I do not know anything by that color.");
}

// var message = (color == favorite) ? "We have the same favorite color of violet!" : "That is not the same as mine.";
// console.log(message);

console.log( (color == favorite) ? "We have the same favorite color of violet!" : "That is not the same favorite as mine." );



// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
