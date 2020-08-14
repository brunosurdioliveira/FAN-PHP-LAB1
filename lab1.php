<!-- 
    Name: Bruno Surdi Oliveira
    Date: May 2020
    Purpose: Lab 1 - This lab will have you set up and executing PHP code. Learn some basic syntax rules like opening and closing tags, php statements, literals and variables, retreiving query string variables and more.  
-->

"Hello World"
<!-- Open the php tag -->
<?php 
    // Output this first string with echo
    echo '<br>This is from PHP now <br>';

    // Use period (.) to concatenate strings
    echo 'This is the first string ' . 'this is the second string ' . 'this is my last string <br>';

    // Date
    // Concatenate string with date (using PHP date() function)
    echo 'We are in the month of ' . date("F");
    // Other representation of date - year
    echo '<br>The year is ' . date("Y");
    // Representation of full date
    echo '<br>Full Date: ' . date("r") . "<br>";

    // Variable through the URL query string 
    // The value must be passed to the url after the .php - using ?my_var=amazing 
    // Use $_REQUEST['your variable name'] to access the variable
    echo 'The value in the query string for my_var is ' . $_REQUEST['my_var'];

    // Create a variable and assign a value
    // To create and call a variable use '$'
    $favorite_ice_cream = 'Vanilla';
    echo '<br>My favorite flavour of ice cream is ' . $favorite_ice_cream . "<br>";

    // Create a variable, assign one data type
    $dog_type = 'Poodle';
    echo 'My Dog is a ' . $dog_type . '<br>'; // output is: My Dog is a Poodle
    // Now, chage the data of $dog_type
    $dog_type = 12;
    echo 'My Dog is a ' . $dog_type . "<br>"; // output is: My Dog is a 12.

    // Define a PHP constant - use this sintax: define("name of your constant", "your constant data")
    define("ERROR_MSG","You have encountered an error, click the back button and try again");
    echo ERROR_MSG;

    // Define a variable in the global space
    $a = 12;
    // Access that variable inside a local scope (like a function)
    function local() {
        $a = 'I like dogs';
        echo '<br>value of $a is ' . $a;
        echo '<br>value of $a in the global space is ' . $GLOBALS['a'];
    }
    // Call the function
    local();
?>
