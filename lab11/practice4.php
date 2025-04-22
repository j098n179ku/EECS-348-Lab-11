<?php 
if ($_POST) { //checks for when post has been sent over. referenced code from here https://www.geeksforgeeks.org/program-to-print-multiplication-table-of-any-number-in-php/ to help make the table
    $num = $_POST["usernum"]; //grab the number that was submitted by the user
    for ($x = 1; $x <= $num; $x++) //loops through the column from 1 to the user number
    { 
        for ($y = 1; $y <= $num; $y++) //loops through the rows from 1 to the user number
        { 
            echo "$x*$y = " . $x * $y . "<br>";  //prints out the multiplication table
        }
    } 
} 
?>