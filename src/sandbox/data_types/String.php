
<?php

# Double quotas returns the value of the variable

$x = "John";
echo "Hello $x";

#Single quoted strings does not perform such actions, it returns the string like it was written,
# with the variable name:

$y = "John";
echo 'Hello $y';

# strlen return length of the string "Hello world!":
echo strlen("Hello world!");

#The php str_word_count() function  counts the number of words in a string.
echo str_word_count("Hello World!");

#The php strpos() function searches for a specific text within a string.
echo strpos("Hello world!", "world");

# PHP string functions https://www.w3schools.com/php/php_ref_string.asp

$string = "Hello World!";

echo strtoupper($string);
echo strtolower($string);
echo '<br>';
echo str_replace("World", "Dolly", $string);
print_r(explode(" ", $string));

//////////////////////////////////////////////////////////////////////

echo "We are the so-called \"Vikings\" from the north. ";

////////////

echo PHP_INT_MAX;