# FAN-PHP-LAB1
Lab1 de PHP fundamentals
Purpose
This lab will have you set up and executing PHP code. Learn some basic syntax rules like opening and closing tags, php statements, literals and variables, retreiving query string variables and more. 

Evaluation
2% of your final grade ( 8 marks )

Submission Due date
When complete, submit your PHP document to the Dropbox labelled Lab 1 before May 17 at 10pm

Required Tools
Google Chrome web browser
Text editor with Syntax highlighting. https://atom.io/ or https://www.sublimetext.com/ or Visual Studio Code or other
Xampp 7.4.1
Instructions
Prepare for Coding

Create a new document in your editor titled firstname_lastname_week2.php.
Type in "Hello world" and save the document in the htdocs folder under c:\xampp\
Start the Apache web server, it will bind to port 80 on your computer or VM and listen for incoming requests
Open a web browser and open http://localhost/firstname_lastname_week2.php and your new page should display.
You are ready to develop
resize your web browser to one side of your screen and resize your editor to the other 1/2 so you can see both windows at the same time.
You will make a change in code, save your file and click F5 in your web browser to reload the changes. Learn to do this cycle as fast as you can, doing many little changes instead of large changes. The rule is only change 1 thing before saving and testing. This will ensure you have only have to debug 1 change at a time. Life will become some much easier :)
PHP tags, statements and literals

Save and reload on every single change
Do NOT copy and paste my instructions, type every thing, it will help you develop the process of fixing your own syntax, and increase your typing skills
In your file, below the hello world text, place the opening and closing PHP tags. Save and reload, you should not see any errors, or any change
Inside your PHP tags type
echo 'This is from PHP now<br>';
Save and reload
Adding all of the following, save and reload after each entry
Output a series of strings concatenated together
echo 'This is the first string ' . 'this is the second string' . 'this is my last string'; 
Output a string concatenate the current month using the PHP date() function
echo 'We are in the month of ' . date("F");
Feel free to try some other date formats https://www.php.net/manual/en/function.date.php
Pass a variable through the URL query string and output it
echo 'The value in the query string for  my_var is ' . $_REQUEST['my_var'];
In the url of your webpage at the end after .php add the following
?my_var=amazing
Click enter to submit the page with the query string. If it works, change the word amazing, to some other word and repeat
Create a variable and assign a value to it
$favorite_ice_cream = 'Vanilla';
echo 'My favorite flavour of ice cream is ' . $favorite_ice_cream;
Create a variable, assign one data type then assign a dfferent data type to observe that PHP doesn't care if you change them
$dog_type = 'Poodle';
echo 'My Dog is a ' . $dog_type;
$dog_type = 12;
echo 'My Dog is a ' . $dog_type; //This does not make sense.. but PHP does not care
Define a PHP constant and output it
define("ERROR_MSG","You have encountered an error, click the back button and try again");
echo ERROR_MSG;
Define a variable in the global space, access that variable inside a local scope
$a = 12;
function local() {
$a = 'I like dogs';
echo 'value of $a is ' . $a;
echo 'value of $a in the global space is ' . $GLOBALS['a'];
}
Call the function
local();
Save and Submit your file to the dropbox before next tuesday.