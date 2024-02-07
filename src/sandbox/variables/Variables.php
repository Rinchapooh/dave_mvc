<?php

/*
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

$_variable_1 = 'String variable';
$VARIABLE_1 = 'Another VARIABLE';
$Case_Sensitive_Var = 'In PHP variables are case sensitive';

$one = $two = $three = "Fruit";

$x = 5;
$y = 6;
$z = 7;

//////////////////////////////////////////////
$global_var1 = "1";
$global_var2 = "2";
$global_var3 = 0;
function globaVariables()
{

    global $global_var1, $global_var2;
    global $global_var3;

    $global_var3= $global_var1 + $global_var2;

}

globaVariables();
#echo $global_var3;
/////////////////////////////////////////////


echo "This ", "string ", "was ", "made ", "with multiple parameters.";