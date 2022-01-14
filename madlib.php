<?php
function generateStory($singular_noun, $verb, $color, $distance_unit) {
  $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\n
But I ${verb} promises to keep,\n
And ${distance_unit} to go before I sleep,\n
And ${distance_unit} to go before I sleep.";
return $story;
}

echo generateStory("dog", "go", "green", "meters");
echo generateStory("cat", "fly", "yellow", "miles");
echo generateStory("mouse", "run" , "blue", "centimeters");
>
