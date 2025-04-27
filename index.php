<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>PHP</title>
</head>
<body>
    <p id="top"></p>
    <a id="bottom_button" class="quick_button" href="#bottom"><button>\/</button></a>
    <a id="top_button" class="quick_button" href="#top"><button>/\</button></a>

    <div class="content">
        <div id="php_tutorial">
            <h2>PHP Array</h2>
            <div> 
                <pre class="example">
                    &lt;?php
                        $cars = array("Volvo","BMW","Toyota");
                        var_dump($cars);
                    ?&gt;

                    // Outputs:
                    // array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }
                </pre><hr>
            </div>
            <h2>PHP Objects</h2>
            <div>
                <pre class="example">
                    &lt;?php
                        class Car {
                        public $color;
                        public $model;
                        public function __construct($color, $model) {
                            $this-&gt;color = $color;
                            $this-&gt;model = $model;
                        }
                        public function message() {
                            return "My car is a " . $this-&gt;color . " " . $this->model . "!";
                        }
                        }

                        $myCar = new Car("black", "Volvo");
                        echo $myCar -&gt; message();
                        echo "&lt;br&gt;";
                        $myCar = new Car("red", "Toyota");
                        echo $myCar -&gt; message();
                    ?&gt;
                </pre><hr>
            </div>
            <h2>PHP String</h2>
            <ul>
                <li>echo strlen("Hello world!"); // outputs 12</li>
                <li>echo str_word_count("Hello world!"); // outputs 2</li>
                <li>echo strrev("Hello world!"); // outputs !dlrow olleH</li>
                <li>echo strpos("Hello world!", "world"); // outputs 6</li>
                <li>echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!</li>
            </ul><hr>
            

            <h2>PHP Numbers</h2>
            <div> 
                <h3>PHP Predefined Constants for Integers</h3>
                <ul>
                    <li>PHP_INT_MAX - The largest integer supported</li>
                    <li>PHP_INT_MIN - The smallest integer supported</li>
                    <li>PHP_INT_SIZE -  The size of an integer in bytes</li>
                </ul>
                <h3>PHP Function to Find if Var is an Integer</h3>
                <ul>
                    <li>is_int()</li>
                    <li>is_integer() - alias of is_int()</li>
                    <li>is_long() - alias of is_int()</li>
                </ul><hr>
            </div>


            <h2>PHP Floats</h2>
            <div> 
                <h3>PHP Predefined Constants for Floats</h3>
                <ul>
                    <li>PHP_FLOAT_MAX - The largest representable floating point number</li>
                    <li>PHP_FLOAT_MIN - The smallest representable positive floating point number</li>
                    <li>PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss</li>
                    <li>PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0</li>
                </ul>
                <h3>PHP Function to Find if Var is an Float</h3>
                <ul>
                    <li>is_float()</li>
                    <li>is_double() - alias of is_float()</li>
                </ul><hr>
            </div>


            <h2>PHP Infinity</h2>
            <div>
                <h3>PHP Function to Find if Var is Finite or Infinite</h3>
                <ul>
                    <li>is_finite()</li>
                    <li>is_infinite()</li>
                </ul><hr>

                <p>However, the PHP var_dump() function returns the data type and value:</p><hr>


                <h2>PHP NaN</h2>
                <h3>PHP Function to Find if Var is not a number</h3>
                <ul>
                    <li>is_nan()</li>
                </ul><hr>


                <h2>PHP Numerical Strings</h2>
                <h3>PHP Function to Find if Var is numeric</h3>
                <ul>
                    <li>is_numeric()</li>
                </ul><hr>

                
                <h2>PHP Casting Strings and Floats to Integers</h2>
                <p>The (int), (integer), or intval() function are often used to convert a value to an integer.</p><hr>
            </div>


            <h2>PHP Math</h2>
            <ul>
                <li>echo(pi()); // returns 3.1415926535898</li>
                <li>echo(min(0, 150, 30, 20, -8, -200));  // returns -200</li>
                <li>echo(max(0, 150, 30, 20, -8, -200));  // returns 150</li>
                <li>echo(abs(-6.7));  // returns 6.7 // returns the absolute (positive) value of a number</li>
                <li>echo(sqrt(64));  // returns 8 // returns the square root of a number</li>
                <li>echo(round(0.60));  // returns 1 //  rounds a floating-point number to its nearest integer</li>
                <li>echo  (rand()); // generates a random number // to be more specific, echo(rand(10, 100));</li>
            </ul>


            <h2>PHP Constants</h2>
            <ul>
                <li>define(var_name, value, case-insensitive(true or false));</li>
                <li>define("cars", [ "Alfa Romeo", "BMW", "Toyota" ]);</li>
            </ul>
            <hr>


            <h2>PHP Operators</h2>
            <div>
                <h3>PHP Assignment Operators</h3>
                <ul>
                    <li>$x = $y</li>
                    <li>$x + $y</li>
                    <li>$x - $y</li>
                    <li>$x * $y</li>
                    <li>$x / $y</li>
                    <li>$x % $y // returns the remainder</li>
                    <li>$x ** $y // $x to the power of $y</li>
                </ul>


                <h3>PHP Comparison Operators</h3>
                <ul>
                    <li>$x == $y</li>
                    <li>$x === $y // returns true if $x is equal to $y, and they are of the same type</li>
                    <li>$x != $y || $x <> $y</li>
                    <li>$x !== $y // Returns true if $x is not equal to $y, or they are not of the same type</li>
                    <li>$x > $y</li>
                    <li>$x < $y</li>
                    <li>$x >= $y</li>
                    <li>$x <= $y</li>
                    <li>$x <=> $y // Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y.</li>
                </ul>
                    
                    
                <h3>PHP Increment / Decrement Operators</h3>
                <ul>
                    <li>++$x // Increments $x by one, then returns $x</li>
                    <li>$x++</li>
                    <li>--$x</li>
                    <li>$x--</li>
                </ul>
                

                <h3>PHP Logical Operators</h3>
                <ul>
                    <li>$x and $y || $x && $y</li>
                    <li>$x or $y || $x || $y</li>
                    <li>$x xor $y // True if either $x or $y is true, but not both</li>
                    <li>!$x</li>
                </ul>   

                    
                <h3>PHP String Operators</h3>
                <ul>
                    <li>$txt1 . $txt2 // Concatenation of $txt1 and $txt2</li>
                    <li>$txt1 .= $txt2 // Appends $txt2 to $txt1</li>
                </ul>


                <h3>PHP Array Operators</h3>
                <ul>
                    <li>$x + $y</li>
                    <li>$x == $y</li>
                    <li>$x === $y // Returns true if $x and $y have the same key/value pairs in the same order and of the same types</li>
                    <li>$x != $y</li>
                    <li>$x <> $y // Returns true if $x is not equal to $y</li>
                    <li>$x !== $y // Returns true if $x is not identical to $y</li>
                </ul>


                <h3>PHP Conditional Assignment Operators</h3>
                <ul>
                    <li>$x = expr1 ? expr2 : expr3 // Returns the value of $x. The value of $x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE</li>
                    <li>$x = expr1 ?? expr2 // Returns the value of $x. The value of $x is expr1 if expr1 exists, and is not NULL. If expr1 does not exist, or is NULL, the value of $x is expr2.</li>
                </ul>
            </div>
            <hr>



            <h2>PHP if...else...elseif Statements</h2>
            <div>
                <pre class="example">
                    &lt;?php
                        $t = date("H");

                        if ($t < "10") {
                        echo "Have a good morning!";
                        } elseif ($t < "20") {
                        echo "Have a good day!";
                        } else {
                        echo "Have a good night!";
                        }
                    ?&gt;
                </pre>
            </div>
            <hr>



            <h2>PHP Switch Statement</h2>
            <div>
                <pre class="example">
                    &lt;?php
                        $favcolor = "red";

                        switch ($favcolor) {
                        case "red":
                            echo "Your favorite color is red!";
                            break;
                        case "blue":
                            echo "Your favorite color is blue!";
                            break;
                        case "green":
                            echo "Your favorite color is green!";
                            break;
                        default:
                            echo "Your favorite color is neither red, blue, nor green!";
                        }
                    ?&gt; 
                </pre>
            </div>
            <hr>



            <h2>PHP Loops</h2>
            <div>
                <h3>PHP while loop</h3>
                <pre class="example">
                    &lt;?php
                        $x = 1;

                        while($x &lt;= 5) {
                        echo "The number is: $x &lt;br&gt;";
                        $x++;
                        }
                    ?&gt;
                </pre>


                <h3>PHP do...while loop</h3>
                <pre class="example">
                    &lt;?php
                        $x = 1;

                        do {
                        echo "The number is: $x &lt;br&gt;";
                        $x++;
                        } while ($x &lt;= 5);
                    ?&gt;
                </pre>


                <h3>PHP for loop</h3>
                <pre class="example">
                    &lt;?php
                        for ($x = 0; $x &lt;= 10; $x++) {
                        echo "The number is: $x &lt;br&gt;";
                        }
                    ?&gt;
                </pre>


                <h3>PHP foreach loop</h3>
                <pre class="example">
                    &lt;?php
                        $colors = array("red", "green", "blue", "yellow");

                        foreach ($colors as $value) {
                        echo "$value &lt;br&gt;";
                        }
                    ?&gt;
                </pre>

                <p>The following example will output both the keys and the values of the given array ($age):</p>
                <pre class="example">
                    &lt;?php
                        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

                        foreach($age as $x => $val) {
                        echo "$x = $val&lt;br&gt;";
                        }
                    ?&gt;
                </pre>


                <h3>PHP Break and Continue</h3>
                <p>break - breaks the loop</p>
                <p>continue - skips</p>
            </div>



            <h2>PHP Arrays</h2>
            <div>
                <h3>Arrays</h3>
                <pre class="example">
                    &lt;?php
                        $cars = array("Volvo", "BMW", "Toyota");
                        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
                    ?&gt;
                </pre>

                <h4>count()</h4>
                <p>The <span class="code">count()</span> function is used to return the length (the number of elements) of an array:</p>
                <pre class="example">
                    &lt;?php
                        $cars = array("Volvo", "BMW", "Toyota");
                        echo count($cars);
                    ?&gt;
                </pre>

                
                <h3>PHP Indexed Arrays</h3>
                <pre class="example">
                    &lt;?php
                        $cars = array("Volvo", "BMW", "Toyota");
                        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
                    ?&gt;
                </pre>

                <h4>Loop Through an Indexed Array</h4>
                <pre class="example">
                    &lt;?php
                        $cars = array("Volvo", "BMW", "Toyota");
                        $arrlength = count($cars);

                        for($x = 0; $x < $arrlength; $x++) {
                        echo $cars[$x];
                        echo "&lt;br&gt;";
                        }
                    ?&gt;
                </pre>

                        
                <h3>PHP Associative Arrays</h3>
                <pre class="example">
                    &lt;?php
                        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                        echo "Peter is " . $age['Peter'] . " years old.";
                    ?&gt;
                </pre>

                <p>or</p>
                <pre class="example">
                    &lt;?php
                        $age['Peter'] = "35";
                        $age['Ben'] = "37";
                        $age['Joe'] = "43";
                        echo "Peter is " . $age['Peter'] . " years old.";
                    ?&gt;
                </pre>

                <h4>Loop Through an Associative Array</h4>
                <pre class="example">
                    &lt;?php
                        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

                        foreach($age as $x => $x_value) {
                        echo "Key=" . $x . ", Value=" . $x_value;
                        echo "&lt;br&gt;";
                        }
                    ?&gt;
                </pre>


                <h3>PHP Multidimensional Arrays</h3>
                <p>A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).</p>
                <p>First, take a look at the following table:</p>
                <table class="desc">
                    <tr>
                        <th>Name</th>
                        <th>Stock</th>
                        <th>Sold</th>
                    </tr>
                    <tr>
                        <td>Volvo</td>
                        <td>22</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>BMW</td>
                        <td>15</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>Saab</td>
                        <td>5</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Land Rover</td>
                        <td>17</td>
                        <td>15</td>
                    </tr>
                </table>

                <pre class="example">
                    &lt;?php
                    $cars = array (
                    array("Volvo",22,18),
                    array("BMW",15,13),
                    array("Saab",5,2),
                    array("Land Rover",17,15)
                    );

                    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".&lt;br&gt;";
                    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".&lt;br&gt;";
                    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".&lt;br&gt;";
                    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".&lt;br&gt;";
                    ?&gt;
                </pre>
                
                <p>We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):</p>
                <pre class="example">
                    &lt;?php
                        $cars = array (
                        array("Volvo",22,18),
                        array("BMW",15,13),
                        array("Saab",5,2),
                        array("Land Rover",17,15)
                        );
                            
                        for ($row = 0; $row < 4; $row++) {
                            echo "&lt;p&gt;&lt;b&gt;Row number $row&lt;/b&gt;&lt;/p&gt;";
                            echo "&lt;ul&gt;";
                            for ($col = 0; $col &lt; 3; $col++) {
                                echo "&lt;li&gt;".$cars[$row][$col]."&lt;/li&gt;";
                            }
                            echo "&lt;/ul&gt;";
                        }
                    ?&gt;
                </pre>


                <h3>PHP - Sort Functions For Arrays</h3>
                <ul>
                    <li><span class="code">sort()</span> - sort arrays in ascending order</li>
                    <li><span class="code">rsort()</span> - sort arrays in descending order</li>
                    <li><span class="code">asort()</span> - sort associative arrays in ascending order, according to the value</li>
                    <li><span class="code">ksort()</span> - sort associative arrays in ascending order, according to the key</li>
                    <li><span class="code">arsort()</span> - sort associative arrays in descending order, according to the value</li>
                    <li><span class="code">krsort()</span> - sort associative arrays in descending order, according to the key</li>
                </ul>

                <p>The following example sorts the elements of the $cars array in ascending alphabetical order:</p>
                <pre class="example">
                    &lt;?php
                        $cars = array("Volvo", "BMW", "Toyota");
                        sort($cars);
                    ?&gt;
                </pre>
            </div>

            

            <h2>PHP Global Variables - Superglobals</h2>
            <div>
                <h3>PHP Global Variables - Superglobals</h3>
                <ul>
                    <li>$GLOBALS</li>
                    <li>$_SERVER</li>
                    <li>$_REQUEST</li>
                    <li>$_POST</li>
                    <li>$_GET</li>
                    <li>$_FILES</li>
                    <li>$_ENV</li>
                    <li>$_COOKIE</li>
                    <li>$_SESSION</li>
                </ul>
                

                <h3>PHP Superglobals - #GLOBALS</h3>
                <p>Super global variables are built-in variables that are always available in all scopes.</p>

                <h4>PHP $GLOBALS</h4>
                <p>$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).</p>
                <p>PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.</p>
                <p>The example below shows how to use the super global variable $GLOBALS:</p>
                <pre class="example">
                    &lt;?php
                        $x = 75;
                        $y = 25;
                        
                        function addition() {
                        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                        }
                        
                        addition();
                        echo $z;
                    ?&gt;
                </pre>

                <p>In the example above, since z is a variable present within the $GLOBALS array, it is also accessible from outside the function!</p>


                <h3>PH Superglobal - $_SERVER</h3>
                <p>Super global variables are built-in variables that are always available in all scopes.</p>

                <h4>PHP $_SERVER</h4>
                <p>$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.</p>
                <p>The example below shows how to use some of the elements in $_SERVER:</p>
                <pre class="example">
                    &lt;?php
                        echo $_SERVER['PHP_SELF'];
                        echo "&lt;br&gt;";
                        echo $_SERVER['SERVER_NAME'];
                        echo "&lt;br&gt;";
                        echo $_SERVER['HTTP_HOST'];
                        echo "&lt;br&gt;";
                        echo $_SERVER['HTTP_REFERER'];
                        echo "&lt;br&gt;";
                        echo $_SERVER['HTTP_USER_AGENT'];
                        echo "&lt;br&gt;";
                        echo $_SERVER['SCRIPT_NAME'];
                    ?&gt;
                </pre>

                <p>The following table lists the most important elements that can go inside $_SERVER:</p>
                <table class="desc">
                    <tr>
                        <th>Element/pre</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>$_SERVER['PHP_SELF']</td>
                        <td>Returns the filename of the currently executing script</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['GATEWAY_INTERFACE']</td>
                        <td>Returns the version of the Common Gateway Interface (CGI) the server is using</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['SERVER_ADDR']</td>
                        <td>Returns the IP address of the host server</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['SERVER_NAME']</td>
                        <td>Returns the name of the host server (such as www.w3schools.com)</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['SERVER_SOFTWARE']</td>
                        <td>Returns the server identification string (such as Apache/2.2.24</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['SERVER_PROTOCOL']</td>
                        <td>Returns the server identification string (such as Apache/2.2.24)</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['REQUEST_METHOD']</td>
                        <td>Returns the name and revision of the information protocol (such as HTTP/1.1)</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['REQUEST_TIME']</td>
                        <td>	Returns the timestamp of the start of the request (such as 1377687496)</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['QUERY_STRING']</td>
                        <td>Returns the query string if the page is accessed via a query string</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['HTTP_ACCEPT']</td>
                        <td>Returns the Accept header from the current request</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['HTTP_ACCEPT_CHARSET']</td>
                        <td>Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['HTTP_HOST']</td>
                        <td>Returns the Host header from the current request</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['HTTP_REFERER']</td>
                        <td>Returns the complete URL of the current page (not reliable because not all user-agents support it)</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['HTTPS']</td>
                        <td>Is the script queried through a secure HTTP protocol</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['REMOTE_ADDR']</td>
                        <td>Returns the IP address from where the user is viewing the current page</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['REMOTE_HOST']</td>
                        <td>Returns the Host name from where the user is viewing the current page</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['REMOTE_PORT']</td>
                        <td>Returns the port being used on the user's machine to communicate with the web server</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['SCRIPT_FILENAME']</td>
                        <td>Returns the absolute pathname of the currently executing script</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['SERVER_ADMIN']</td>
                        <td>Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['SERVER_PORT']</td>
                        <td>Returns the port on the server machine being used by the web server for communication (such as 80)</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['SERVER_SIGNATURE']</td>
                        <td>Returns the server version and virtual host name which are added to server-generated pages</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['PATH_TRANSLATED']</td>
                        <td>Returns the file system based path to the current script</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['SCRIPT_NAME']</td>
                        <td>Returns the path of the current script</td>
                    </tr>
                    <tr>
                        <td>$_SERVER['SCRIPT_URI']</td>
                        <td>Returns the URI of the current page</td>
                    </tr>
                </table>


                <h3>PHP Superglobal - $_REQUEST</h3>
                <p>PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.</p>
                <p>The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <span class="code">&lt;form&gt;</span> tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the value of the input field:</p>
                <pre class="example">
                    &lt;form method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;"&gt;
                        Name: &lt;input type="text" name="fname"&gt;
                        &lt;input type="submit"&gt;
                    &lt;/form&gt;

                    &lt;?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // collect value of input field
                            $name = $_REQUEST['fname'];
                            if (empty($name)) {
                                echo "Name is empty";
                            } else {
                                echo $name;
                            }
                        }
                    ?&gt;
                </pre>


                <h3>PHP Superglobal - $_POST</h3>
                <p>PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.</p>
                <p>The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <span class="code">&lt;form&gt;</span> tag. In this example, we point to the file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_POST to collect the value of the input field:</p>
                <pre class="example">
                    &lt;form method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;"&gt;
                        Name: &lt;input type="text" name="fname"&gt;
                        &lt;input type="submit"&gt;
                    &lt;/form&gt;

                    &lt;php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // collect value of input field
                            $name = $_POST['fname'];
                            if (empty($name)) {
                                echo "Name is empty";
                            } else {
                                echo $name;
                            }
                        }
                    ?&gt;
                </pre>


                <h3>PHP Superglobal - $_GET</h3>
                <p>PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".</p>
                <p>$_GET can also collect data sent in the URL.</p>
                <p>Assume we have an HTML page that contains a hyperlink with parameters:</p>
                <pre class="example">
                    &lt;a href="test_get.php?subject=PHP&web=W3schools.com"&gt;Test $GET&lt;/a&gt;
                </pre></pre>

                <p>When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", and you can then access their values in "test_get.php" with $_GET.</p>
                <p>The example below shows the code in "test_get.php":</p>
                <pre class="example">
                    &lt;php
                        echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
                    ?&gt;
                </pre>
            </div>



            <h2>PHP Regualr Expressions</h2>
            <div>
                <h3>What is a Regular Expression?</h3>
                <p>A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.</p>
                <p>A regular expression can be a single character, or a more complicated pattern.</p>
                <p>Regular expressions can be used to perform all types of text search and text replace operations.</p>

                <h4>Syntax</h4>
                <p>In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers.</p>
                <pre class="example">
                    $exp = "/w3schools/i";
                </pre></pre>

                <p>In the example above, / is the <strong>delimiter</strong>, w3schools is the <strong>pattern</strong> that is being searched for, and i is a <strong>modifier</strong> that makes the search case-insensitive.</p>
                <p>The delimiter can be any character that is not a letter, number, backslash or space. The most common delimiter is the forward slash (/), but when your pattern contains forward slashes it is convenient to choose other delimiters such as # or ~.</p>
                
                <h4>Regular Expression Functions</h4>
                <p>PHP provides a variety of functions that allow you to use regular expressions. The <span class="code">preg_match()</span>, <span class="code">preg_match_all()</span> and <span class="code">preg_replace()</span> functions are some of the most commonly used ones:</p>
                <table class="desc">
                    <tr>
                        <th>Function</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>preg_match()</td>
                        <td>Returns 1 if the pattern was found in the string and 0 if not</td>
                    </tr>
                    <tr>
                        <td>preg_match_all()</td>
                        <td>Returns the number of times the pattern was found in the string, which may also be 0</td>
                    </tr>
                    <tr>
                        <td>preg_replace()</td>
                        <td>Returns a new string where matched patterns have been replaced with another string</td>
                    </tr>
                </table>

                <h4>Using preg_match()</h4>
                <p>The <span class="code">preg_match()</span> function will tell you whether a string contains matches of a pattern.</p>
                <h5>Example</h5>
                <p>Use a regular expression to do a case-insensitive search for "w3schools" in a string:</p>
                <pre class="example">
                    &lt;?php
                        $str = "Visit W3Schools";
                        $pattern = "/w3schools/i";
                        echo preg_match($pattern, $str); // Outputs 1
                    ?&gt;
                </pre>

                <h4>Using pre_match_all()</h4>
                <p>The <span class="code">preg_match_all()</span> function will tell you how many matches were found for a pattern in a string.</p>
                <h5>Example</h5>
                <p>Use a regular expression to do a case-insensitive count of the number of occurrences of "ain" in a string:</p>
                <pre class="example">
                    &lt;?php
                        $str = "The rain in SPAIN falls mainly on the plains.";
                        $pattern = "/ain/i";
                        echo preg_match_all($pattern, $str); // Outputs 4
                    ?&gt;
                </pre>

                <h4>Using preg_replace()</h4>
                <p>The <span class="code">preg_replace()</span> function will replace all of the matches of the pattern in a string with another string.</p>
                <h5>Example</h5>
                <p>Use a case-insensitive regular expression to replace Microsoft with W3Schools in a string:</p>
                <pre class="example">
                    &lt;?php
                        $str = "Visit Microsoft!";
                        $pattern = "/microsoft/i";
                        echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
                    ?&gt;
                </pre>

                <h4>Regular Expression Modifiers</h4>
                <p>Modifiers can change how a search is performed.</p>
                <table class="desc">
                    <tr>
                        <th>Modifier</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>i</td>
                        <td>Performs a case-insensitive search</td>
                    </tr>
                    <tr>
                        <td>m</td>
                        <td>Performs a multiline search (patterns that search for the beginning or end of a string will match the beginning or end of each line)</td>
                    </tr>
                    <tr>
                        <td>u</td>
                        <td>Enables correct matching of UTF-8 encoded patterns</td>
                    </tr>
                </table>

                <h4>Regular Expression Patterns</h4>
                <p>Brackets are used to find a range of characters:</p>
                <table class="desc">
                    <tr>
                        <th>Expression</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>[abc]</td>
                        <td>Find one character from the options between the brackets</td>
                    </tr>
                    <tr>
                        <td>[^abc]</td>
                        <td>	Find any character NOT between the brackets</td>
                    </tr>
                    <tr>
                        <td>[0-9]</td>
                        <td>	Find one character from the range 0 to 9</td>
                    </tr>
                </table>

                <h4>Metacharacters</h4>
                <p>Metacharacters are characters with a special meaning:</p>
                <table class="desc">
                    <tr>
                        <th>Metacharacter</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>|</td>
                        <td>Find a match for any one of the patterns separated by | as in: cat|dog|fish</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td>Find just one instance of any character</td>
                    </tr>
                    <tr>
                        <td>^</td>
                        <td>Finds a match as the beginning of a string as in: ^Hello</td>
                    </tr>
                    <tr>
                        <td>$</td>
                        <td>Finds a match at the end of the string as in: World$</td>
                    </tr>
                    <tr>
                        <td>\d</td>
                        <td>Find a digit</td>
                    </tr>
                    <tr>
                        <td>\s</td>
                        <td>Find a whitespace character</td>
                    </tr>
                    <tr>
                        <td>\b</td>
                        <td>Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b</td>
                    </tr>
                    <tr>
                        <td>\uxxxx</td>
                        <td>Find the Unicode character specified by the hexadecimal number xxxx</td>
                    </tr>
                </table>

                <h4>Quantifiers</h4>
                <p>Quantifiers define quantities</p>
                <table class="desc">
                    <tr>
                        <th>Quatifier</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>n+</td>
                        <td>Matches any string that contains at least one n</td>
                    </tr>
                    <tr>
                        <td>n*</td>
                        <td>Matches any string that contains zero or more occurrences of n</td>
                    </tr>
                    <tr>
                        <td>n?</td>
                        <td>Matches any string that contains zero or one occurrences of n</td>
                    </tr>
                    <tr>
                        <td>n{x}</td>
                        <td>Matches any string that contains a sequence of X n's</td>
                    </tr>
                    <tr>
                        <td>n{x,y}</td>
                        <td>Matches any string that contains a sequence of X to Y n's</td>
                    </tr>
                    <tr>
                        <td>n{x,}</td>
                        <td>Matches any string that contains a sequence of at least X n's</td>
                    </tr>
                </table>
                <p><strong>Note:</strong> If your expression needs to search for one of the special characters you can use a backslash ( \ ) to escape them. For example, to search for one or more question marks you can use the following expression: $pattern = '/\?+/';</p>

                <h4>Grouping</h4>
                <p>You can use parentheses ( ) to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match.</p>
                <h5>Example</h5>
                <p>Use grouping to search for the word "banana" by looking for ba followed by two instances of na:</p>
                <pre class="example">
                    &lt;?php
                        $str = "Apples and bananas.";
                        $pattern = "/ba(na){2}/i";
                        echo preg_match($pattern, $str); // Outputs 1
                    ?&gt;
                </pre></pre>
            </div>
        </div>
        <div id="php_forms">
            <div id="php_form_handling">
                <h2>PHP Form Handling</h2>
                <p>The PHP superglobals $_GET and $_POST are used to collect form-data.</p>

                <h3>PHP - A Simple HTML Form</h3>
                <p>The example below displays a simple HTML form with two input fields and a submit button:</p>
                <pre class="example">
                    <h4>Example</h4>
                    &lt;form action="welcome.php" method="post"&gt;
                        Name: &lt;input type="text" name="name">&lt;br&gt;
                        E-mail: &lt;input type="text" name="email">&lt;br&gt;
                        &lt;input type="submit"&gt;
                    &lt;/form&gt;
                </pre>

                <p>When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.</p>
                <p>To display the submitted data you could simply echo all the variables. The "welcome.php" looks like this:</p>
                <pre class="example">
                    Welcome &lt;?php echo $_POST["name"]; ?>&lt;br&gt;
                    Your email address is: &lt;?php echo $_POST["email"]; ?"&gt;
                </pre>

                <p>The output could be something like this:</p>
                <samp class="output">3
                    Welcome John 
                    Your email address is john.doe@example.com
                </samp>

                <p>The same result could also be achieved using the HTTP GET method:</p>
                <pre class="example">
                    <h4>Example</h4>
                    &lt;form action="welcome_get.php" method="get"&gt;
                        Name: &lt;input type="text" name="name">&lt;br&gt;
                        E-mail: &lt;input type="text" name="email">&lt;br&gt;
                        &lt;input type="submit"&gt;
                    &lt;/form&gt;
                </pre>

                <p>and "welcome_get.php" looks like this:</p>
                <pre class="example">
                    Welcome &lt;?php echo $_GET["name"]; ?>&lt;br&gt;
                    Your email address is: &lt;?php echo $_GET["email"]; ?"&gt;
                </pre>

                <p>The code above is quite simple. However, the most important thing is missing. You need to validate form data to protect your script from malicious code.</p>

                <div class="note">
                    <h4>Think SECURITY when processing PHP forms!</h4>
                    <p>This page does not contain any form validation, it just shows how you can send and retrieve form data.</p>
                    <p>However, the next pages will show how to process PHP forms with security in mind! Proper validation of form data is important to protect your form from hackers and spammers!</p>
                </div>

                
                <h3>GET vs. POST</h3>
                <p>Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.</p>
                <p>Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.</p>
                <p>$_GET is an array of variables passed to the current script via the URL parameters.</p>
                <p>$_POST is an array of variables passed to the current script via the HTTP POST method.</p>


                <h3>When to use GET?</h3>
                <p>Information sent from a form with the GET method is <strong>visible to everyone</strong> (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.</p>
                <p>GET may be used for sending non-sensitive data.</p>
                <p><strong>Note:</strong> GET should NEVER be used for sending passwords or other sensitive information!</p>

                
                <h3>When to use POST?</h3>
                <p>Information sent from a form with the POST method is <strong>invisible to others</strong> (all names/values are embedded within the body of the HTTP request) and has <strong>no limits</strong> on the amount of information to send.</p>
                <p>Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.</p>
                <p>However, because the variables are not displayed in the URL, it is not possible to bookmark the page.</p>
                
                <p class="note">Developers prefer POST for sending form data.</p><hr>
            </div>
            <div id="php_form_validation">
                <h2>PHP Form Validation</h2>
                <p>This and the next chapters show how to use PHP to validate form data.</p>

                <h3>PHP Form Validation</h3>
                <div class="note">
                    <p><strong>Think SECURITY when processing PHP forms!</strong></p>
                    <p>These pages will show how to process PHP forms with security in mind. Proper validation of form data is important to protect your form from hackers and spammers!</p>
                </div>

                <p>The HTML form wel= will be working at in these chapters, contains various input fields: required and optional text felds, radio buttons, and a submit button:</p>
                <iframe src="test.php" frameborder="10" width="400px" height="400px"></iframe>

                <p>The validation rules for the form above are as follows:</p>
                <table class="desc">
                    <tr>
                        <th>Field</th>
                        <th>Validation Rules</th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>Required. + Must only contain letters and whitespace</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>Required. + Must contain a valid email address (with @ and .)</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td>Optional. If present, it must contain a valid URL</td>
                    </tr>
                    <tr>
                        <td>Comment</td>
                        <td>	Optional. Multi-line input field (textarea)</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>	Required. Must select one</td>
                    </tr>
                </table>
                <p>First we will look at the plain HTML code for the form:</p>


                <h3>Text Fields</h3>
                <p>The name, email, and website fields are text input elements, and the comment field is a textatea. The HTML code looks like this:</p>
                <pre class="example">
                    Name: &lt;input type="text" name="name"&gt;
                    E-mail: &lt;input type="text" name="email"&gt;
                    Website: &lt;input type="text" name="website"&gt;
                    Comment: &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;/textarea&gt;
                </pre>


                <h3>Radio Buttons</h3>
                <p>The gender fields are radio buttons and the HTML code looks like this:</p>
                <pre class="example">
                    Gender: 
                    &lt;input type="radio" name="gender" value="female""&gt;Female
                    &lt;input type="radio" name="gender" value="male"&gt;Male
                    &lt;input type="radio" name="gender" value="other"&gt;Other
                </pre>


                <h3>The Form Element</h3>
                <p>The HTML Code of the form looks like this:</p>
                <pre class="example"> 
                    &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?%gt;"&gt;
                </pre>
                <p>When the form is submitted, the form data is sent with method="post".</p>

                <div class="note">
                    <p><strong>What is the $_SERVER["PHP_SELF"] variables?</strong></p>
                    <p>The #_SERBER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.</p>
                </div>

                <p>So the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form.</p>

                <div class="note">
                    <p><strong>What is the htmlspecialchars() function?</strong></p>
                    <p>The htmlspecialchars() function converts special characters to HTML entities. This means that it will repace HTML characters like &lt; and &gt; with (and_sign)lt; and (and_sign)gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.</p>
                </div>


                <h3>Big Note on PHP Form Security</h3>
                <p>The #_SERVER["PHP_SELF"] variavle can be used by hackers!</p>
                <p>If PHP_SELF is used in your page then a user can enter a slash(/) and then some Cross Stire Scripting (XSS) commands to execute.</p>

                <p class="note"><strong>Cross-site scripting (XSS) is a type of computer security vulnerability typically found in Web applications. XSS enables attackers to inject client-side script into Web pages viewed by other users.</strong></p>

                <p>Assume we have the following form in a page named "test_form.php":</p>
                <pre class="example">
                    &lt;form method="post" action="&lt;?php echo #_SERVER["PHP_SELF"];?&gt;"&gt;
                </pre>

                <p>Now, if a user enters the  normal URL in the address bar like "http://www.example.com/test_form.php", t he above code will be translated to:</p>
                <pre class="example">
                    &lt;form method="post" action="test_form.php"&gt;
                </pre>

                <p>So far, so good.</p>
                <p>However, consider that a user enters the following URL in the address bar:</p>
                <pre class="example">
                    http://www.example.com/test_form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
                </pre>

                <p>In this case, the above code will be  translated to:</p>
                <pre class="example">
                    &lt;form method="post" action="test_form.php/"&gt;
                    &lt;script&gt;alert('hacked')&lt;/script&gt;
                </pre>

                <p>This code adds a script tag and an alert command. And when the page loads, the JavaScript code will be executed (the user will see an alert box). This is just a simple and harmless example how the PHP_SELF variable can be exploited.</p>
                <p>Be aware of that <strong>any JavaScript code can be added inside the &lt;script&gt; tag!</strong> A hacker can redirect the user to a file on another server, and that file can hold malicious code that can alter the global variables or submit the form to another address to save the user data, for example.</p>


                <h3>How to Avoid #_SERVER["PHP_SELF"] Expolits?</h3>
                <p>$_SERVER["PHP_SELF"] exploits can be avoided by using the htmlspecialchars() function.</p>
                <p>The form code should look like this:</p>
                <pre class="example">
                    &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;
                </pre>

                <p>The htmlspecialchars() function converts special characters to HTML entities. Now if the user tries to exploit the PHP_SELF variable, it will result in the following output:</p>
                <pre class="example">
                    &lt;form method="post" action="test_form.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;"&gt;
                </pre>

                <p>The exploit attempt fails, and no harm is done!</p>


                <h3>Validate Form Data With PHP</h3>
                <p>The first thing we will do is to pass all variables through PHP's htmlspecialchars() function.</p>
                <p>When we use the htmlspecialchars() function; then if a user tries to submit the following in a text field:</p>
                <p>&lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;</p>
                <p>- this would not be executed, because it would be saved as HTML escaped code, like this:</p>
                <p>&lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;</p>
                <p>The code is now safe to be displayed on a page or inside an e-mail.</p>
                <p>We will also do two more things when the user submits the form</p>
                <ol>
                    <li>Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)</li>
                    <li>Remove backslashes (\) from the user input data (with the PHP stripslashes() function)</li>
                </ol>
                <p>The next step is to create a function that will do all the checking for us (which is much more convenient than writing the same code over and over again).</p>
                <p>We will name the function test_input().</p>
                <p>Now, we can check each $_POST variable with the test_input() function, and the script looks like this:</p>
                <pre class="example">
                    &lt;?php
                        // define variables and set to empty values
                        $name = $email = $gender = $comment = $website = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name = test_input($_POST["name"]);
                            $email = test_input($_POST["email"]);
                            $website = test_input($_POST["website"]);
                            $comment = test_input($_POST["comment"]);
                            $gender = test_input($_POST["gender"]);
                        }

                        function test_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
                    ?&gt;
                </pre>

                <p>Notice that at the start of the script, we check whether the form has been submitted using $_SERVER["REQUEST_METHOD"]. If the REQUEST_METHOD is POST, then the form has been submitted - and it should be validated. If it has not been submitted, skip the validation and display a blank form.</p>
                <p>However, in the example above, all input fields are optional. The script works fine even if the user does not enter any data.</p>
                <p>The next step is to make input fields required and create error messages if needed.</p>
            </div>
            <div id="php_form_required">
                <h2>PHP - Required Fields</h2>
                <p>From the validation rules table on the previous page, we see that the "Name", "E-mail", and "Gender" fields are required. These fields cannot be empty and must be filled out in the HTML form.</p>
                <table class="desc">
                    <tr>
                        <th>Field</th>
                        <th>Validation Rules</th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>Required. + Must only contain letters and whitespace</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>Required. + Must contain a valid email address (with @ and .)</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td>Optional. If present, it must contain a valid URL</td>
                    </tr>
                    <tr>
                        <td>Comment</td>
                        <td>Optional. Multi-line input field (textarea)</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>Required. Must select one</td>
                    </tr>
                </table>

                <p>In the previous chapter, all input fields were optional.</p>
                <p>In the following code we have added some new variables: $nameErr, $emailErr, $genderErr, and $websiteErr. These error variables will hold error messages for the required fields. We have also added an <span class="code">if else</span> statement for each $_POST variable. This checks if the $_POST variable is empty (with the PHP <span class="code">empty()</span> function). If it is empty, an error message is stored in the different error variables, and if it is not empty, it sends the user input data through the <span class="code">test_input()</span> function:</p>
                <pre class="example">
                    &lt;?php
                        // define variables and set to empty values 
                        $nameErr = $emailErr = $genderErr = $websiteErr = "";
                        $name = $email = $gender = $comment = $website = "";
                        
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (empty($_POST["name"])) {
                                $nameErr = "Name is required";
                            } else {
                                $name = test_input($_POST["name"]);
                            }
                            
                            if (empty($_POST["email"])) {
                                $emailErr = "Email is required";
                            } else {
                                $email = test_input($_POST["email"]);
                            }
                            
                            if (empty($_POST["website"])) {
                                $website = "";
                            } else {
                                $website = test_input($_POST["website"]);
                            }
                            
                            if (empty($_POST["comment"])) {
                                $comment = "";
                            } else {
                                $comment = test_input($_POST["comment"]);
                            }
                            
                            if (empty($_POST["gender"])) {
                                $genderErr = "Gender is required";
                            } else {
                                $gender = test_input($_POST["gender"]);
                            }
                        }
                    ?&gt;
                </pre>

                <h2>PHP - Display The Error Messages</h2>
                <p>Then in the HTML form, we add a little script after each required field, which generates the correct error message if needed (that is if the user tries to submit the form without filling out the required fields):</p>
                <pre class="example">
                    &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"];?&gt;)"&gt;
                        Name: 
                        &lt;input type="text" name="name"&gt;
                        &lt;span class="error"&gt;* &lt;?php echo $nameErr;?&gt;&lt;/span&gt;
                        &lt;br&gt;&lt;br&gt;

                        Email: 
                        &lt;input type="text" name="email"&gt;
                        &lt;span class="error"&gt;* &lt;?php echo $emailErr;?&gt;&lt;/span&gt;
                        &lt;br&gt;&lt;br&gt;

                        Website: 
                        &lt;input type="text" name="website"&gt;
                        &lt;span class="error"&gt;* &lt;?php echo $websiteErr;?&gt;&lt;/span&gt;
                        &lt;br&gt;&lt;br&gt;

                        Comment: 
                        &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;/textarea&gt;
                        &lt;br&gt;&lt;br&gt;

                        Gender: 
                        &lt;input type="radio" name="gender" value="female"&gt;Female
                        &lt;input type="radio" name="gender" value="male"&gt;Male
                        &lt;input type="radio" name="gender" value="other"&gt;Other
                        &lt;span class="error"&gt;* &lt;?php echo $genderErr;?&gt;&lt;/span&gt;
                        &lt;br&gt;&lt;br&gt;
                        &lt;input type="submit" name="submit" value="Submit"&gt;
                    &lt;/form&gt;
                </pre>
 
                <p>The next step is to validate the input data, that is "Does the Name field contain only letters and whitespace?", and "Does the E-mail field contain a valid e-mail address syntax?", and if filled out, "Does the Website field contain a valid URL?".</p>
            </div>
            <div id="php_form_url_email">
                <h2>PHP - Validate Name</h2>
                <p>The code below shows a simple way to check if the name field only contains letters, dashes, apostrophes and whitespaces. If the value of the name field is not valid, then store an error message:</p>
                <pre class="example">
                    $name = test_input($_POST["name"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                    }
                </pre>

                <p class="note">The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.</p>



                <h2>PHP - Validate E-mail</h2>
                <p>The easiest and safest way to check whether an email address is well-formed is to use PHP's filter_var() function.</p>
                <p>In the code below, if the e-mail address is not well-formed, then store an error message:</p>
                <pre class="example">
                    $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }
                </pre>


                <h2>PHP - Validate URL</h2>
                <p>The code below shows a way to check if a URL address syntax is valid (this regular expression also allows dashes in the URL). If the URL address syntax is not valid, then store an error message:</p>
                <pre class="example">
                    $website = test_input($_POST["website"]);
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                        $websiteErr = "Invalid URL";
                    }
                </pre>


                <h2>PHP - Validate Name, E-mail, and URL</h2>
                <p>Now, the script looks like this:</p>
                <pre class="example">
                    &lt;?php
                        // define variables and set to empty values
                        $nameErr = $emailErr = $genderErr = $websiteErr = "";
                        $name = $email = $gender = $comment = $website = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (empty($_POST["name"])) {
                                $nameErr = "Name is required";
                            } else {
                                $name = test_input($_POST["name"]);
                                // check if name only contains letters and whitespace
                                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                                $nameErr = "Only letters and white space allowed";
                                }
                            }

                            if (empty($_POST["email"])) {
                                $emailErr = "Email is required";
                            } else {
                                $email = test_input($_POST["email"]);
                                // check if e-mail address is well-formed
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $emailErr = "Invalid email format";
                                }
                            }

                            if (empty($_POST["website"])) {
                                $website = "";
                            } else {
                                $website = test_input($_POST["website"]);
                                // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                                $websiteErr = "Invalid URL";
                                }
                            }

                            if (empty($_POST["comment"])) {
                                $comment = "";
                            } else {
                                $comment = test_input($_POST["comment"]);
                            }

                            if (empty($_POST["gender"])) {
                                $genderErr = "Gender is required";
                            } else {
                                $gender = test_input($_POST["gender"]);
                            }
                        }
                    ?&gt;
                </pre>
            </div>
            <div id="php_complete_form_example">
                <h2>PHP Complete Form Example</h2>
                <hr>
                <p>This chapter shows how to keep the values in the input fields when the user hits the submit button.</p>
                <hr>

                <h3>PHP - Keep The Values in The Form</h3>
                <p>To show the values in the input fields after the user hits the submit button, we add a little PHP script inside the value attribute of the following input fields: name, email, and website. In the comment textarea field, we put the script between the <span class="code">textarea</span> and <span class="code">/textarea</span> tags. The little script outputs the value of the $name, $email, $website, and $comment variables. </p>
                <p>Then, we also need to show which radio button that was checked. For this, we must manipulate the checked attribute (not the value attribute for radio buttons):</p>
                <pre class="example">
                    Name: &lt;input type="text" name="name" value="&lt;?php echo $name;?&gt;"&gt;

                    E-mail: &lt;input type="text" name="email" value="&lt;?php echo $email;?&gt;"&gt;

                    Website: &lt;input type="text" name="website" value="&lt;?php echo $website;?&gt;"&gt;

                    Comment: &lt;textarea name="comment" rows="5" cols="40">&lt;?php echo $comment;?>&lt;/textarea>

                    Gender:
                    &lt;input type="radio" name="gender"
                    &lt;?php if (isset($gender) && $gender=="female") echo "checked";?&gt;
                    value="female"&gt;Female
                    &lt;input type="radio" name="gender"
                    &lt;?php if (isset($gender) && $gender=="male") echo "checked";?&gt;
                    value="male"&gt;Male
                    &lt;input type="radio" name="gender"
                    &lt;?php if (isset($gender) && $gender=="other") echo "checked";?&gt;
                    value="other"&gt;Other
                </pre>
                <hr>

                <h3>PHP - Complete Form Example</h3>
                <p>Here is the complete code for the PHP Form Validation Example:</p>
                <pre class="example">
                    &lt;?php
                        // define variables and set to empty values
                        $nameErr = $emailErr = $genderErr = $websiteErr = "";
                        $name = $email = $gender = $comment = $website = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (empty($_POST["name"])) {
                                $nameErr = "Name is required";
                            } else {
                                $name = test_input($_POST["name"]);
                                // check if name only contains letters and whitespace
                                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                                $nameErr = "Only letters and white space allowed";
                                }
                            }
                            
                            if (empty($_POST["email"])) {
                                $emailErr = "Email is required";
                            } else {
                                $email = test_input($_POST["email"]);
                                // check if e-mail address is well-formed
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $emailErr = "Invalid email format";
                                }
                            }
                                
                            if (empty($_POST["website"])) {
                                $website = "";
                            } else {
                                $website = test_input($_POST["website"]);
                                // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                                $websiteErr = "Invalid URL";
                                }
                            }

                            if (empty($_POST["comment"])) {
                                $comment = "";
                            } else {
                                $comment = test_input($_POST["comment"]);
                            }

                            if (empty($_POST["gender"])) {
                                $genderErr = "Gender is required";
                            } else {
                                $gender = test_input($_POST["gender"]);
                            }
                        }

                        function test_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
                    ?&gt;

                    &lt;h2&gt;PHP Form Validation Example&lt;/h2>

                    &lt;p&gt;&lt;span class="error"&gt;* required field&lt;/span&gt;&lt;/p&gt;
                    
                    &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;  
                        Name: 
                        &lt;input type="text" name="name" value="&lt;?php echo $name;?&gt;"&gt;
                        &lt;span class="error"&gt;* &lt;?php echo $nameErr;?&gt;&lt;/span&gt;
                        &lt;br&gt;&lt;br&gt;

                        E-mail: 
                        &lt;input type="text" name="email" value="&lt;?php echo $email;?&gt;"&gt;
                        &lt;span class="error"&gt;* &lt;?php echo $emailErr;?&gt;&lt;/span&gt;
                        &lt;br&gt;&lt;br&gt;

                        Website: 
                        &lt;input type="text" name="website" value="&lt;?php echo $website;?&gt;"&gt;
                        &lt;span class="error"&gt;&lt;?php echo $websiteErr;?&gt;&lt;/span&gt;
                        &lt;br&gt;&lt;br&gt;

                        Comment: 
                        &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;?php echo $comment;?&gt;&lt;/textarea&gt;
                        &lt;br&gt;&lt;br&gt;

                        Gender:
                        &lt;input type="radio" name="gender" &lt;?php if (isset($gender) && $gender=="female") echo "checked";?&gt; value="female"&gt;Female
                        &lt;input type="radio" name="gender" &lt;?php if (isset($gender) && $gender=="male") echo "checked";?&gt; value="male"&gt;Male
                        &lt;input type="radio" name="gender" &lt;?php if (isset($gender) && $gender=="other") echo "checked";?&gt; value="other"&gt;Other  
                        &lt;span class="error"&gt;* &lt;?php echo $genderErr;?&gt;&lt;/span&gt;
                        &lt;br&gt;&lt;br&gt;

                        &lt;input type="submit" name="submit" value="Submit"&gt;
                    &lt;/form&gt;

                    &lt;?php
                        echo "&lt;h2&gt;Your Input:&lt;/h2&gt;";
                        echo $name;
                        echo "&lt;b&gt;";
                        echo $email;
                        echo "&lt;br&gt;";
                        echo $website;
                        echo "&lt;br&gt;";
                        echo $comment;
                        echo "&lt;br&gt;";
                        echo $gender;
                    ?&gt;
                </pre>
            </div>
        </div>
        <div id="php_advanced">
            <h2>PHP Advanced</h2>
            <hr>

            <div id="php_date_and_time">
                <h3>PHP Date and Time</h3>
                <hr>
                <p>The PHP date() function is used to format a date and/or a time.</p>
                <hr>

                <h3>The PHP Date() Function</h3>
                <p>The PHP date() function formats a timestamp to a more readable date and time.</p>

                <h4>Syntax</h4>
                <pre class="example">
                    date(format,timestamp) </pre>

                <table class="desc">
                    <tr>
                        <th>Parameter</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>format</td>
                        <td>Required. Specifies the format of the timestamp</td>
                    </tr>
                    <tr>
                        <td>timestamp</td>
                        <td>Optional. Specifies a timestamp. Default is the current date and time</td>
                    </tr>
                </table>
                <hr>

                <p class="note">A timestamp is a sequence of characters, denoting the date and/or time at which a certain event occurred.</p>
                <hr>

                <h3>Get a Date</h3>
                <p>The required format parameter of the date() function specifies how to format the date (or time).</p>
                <p>Here are some characters that are commonly used for dates:</p>
                <ul>
                    <li>d - Represents the day of the month (01 to 31)</li>
                    <li>m - Represents a month (01 to 12)</li>
                    <li>Y - Represents a year (in four digits)</li>
                    <li>l (lowercase 'L') - Represents the day of the week</li>
                </ul>
                <p>Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.</p>
                <p>The example below formats today's date in three different ways:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;?php
                        echo "Today is " . date("Y/m/d") . "&lt;br&gt;";
                        echo "Today is " . date("Y.m.d") . "&lt;br&gt;";
                        echo "Today is " . date("Y-m-d") . "&lt;br&gt;";
                        echo "Today is " . date("l");
                    ?&gt;
                </pre>
                <hr>

                <h3>PHP Tip - Automatic Copyright Year</h3>
                <p>Use the date() function to automatically update the copyright year on your website:</p>

                <h4>Example</h4>
                <pre class="example">
                    &copy; 2010-&lt;?php echo date("Y");?&gt; </pre>
                <hr>

                <h3>Get a Time</h3>
                <p>Here are some characters that are commonly used for times:</p>
                <ul>
                    <li>H - 24-hour format of an hour (00 to 23)</li>
                    <li>h - 12-hour format of an hour with leading zeros (01 to 12)</li>
                    <li>i - Minutes with leading zeros (00 to 59)</li>
                    <li>s - Seconds with leading zeros (00 to 59)</li>
                    <li>a - Lowercase Ante meridiem and Post meridiem (am or pm)</li>
                </ul>
                <p>The example below outputs the current time in the specified format:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;?php
                        echo "The time is " . date("h:i:sa");
                    ?&gt;
                </pre>
                <p class="note">Note that the PHP date() function will return the current date/time of the server!</p>
                <hr>

                <h3>Get Your Time Zone</h3>
                <p>If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different timezone.</p>
                <p>So, if you need the time to be correct according to a specific location, you can set the timezone you want to use.</p>
                <p>The example below sets the timezone to "America/New_York", then outputs the current time in the specified format:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;?php
                        date_default_timezone_set("America/New_York");
                        echo "The time is " . date("h:i:sa");
                    ?&gt;
                </pre>
                <hr>

                <h3>Create a Date With mktime()</h3>
                <p>The optional timestamp parameter in the date() function specifies a timestamp. If omitted, the current date and time will be used (as in the examples above).</p>
                <p>The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.</p>

                <h4>Syntax</h4>
                <pre class="example">
                    mktime(hour, minute, second, month, day, year) </pre>

                <p>The example below creates a date and time with the <span class="code">date() </span>function from a number of parameters in the <span class="code">mktime()</span> function:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;?php
                        $d=mktime(11, 14, 54, 8, 12, 2014);
                        echo "Created date is " . date("Y-m-d h:i:sa", $d);
                    ?&gt;
                </pre>
                <hr>

                <h3>Create a Date From a String With strtotime()</h3>
                <p>The PHP <span class="code">strtotime()</span> function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).</p>

                <h4>Syntax</h4>
                <pre class="example">
                    strtotime(time, now) </pre>

                <p>The example below creates a date and time from the <span class="code">strtotime()</span> function:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;?php
                        $d=strtotime("10:30pm April 15 2014");
                        echo "Created date is " . date("Y-m-d h:i:sa", $d);
                    ?&gt;
                </pre>

                <p>PHP is quite clever about converting a string to a date, so you can put in various values:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;?php
                        $d=strtotime("tomorrow");
                        echo date("Y-m-d h:i:sa", $d) . "&lt;br&gt;";

                        $d=strtotime("next Saturday");
                        echo date("Y-m-d h:i:sa", $d) . "&lt;br&gt;";

                        $d=strtotime("+3 Months");
                        echo date("Y-m-d h:i:sa", $d) . "&lt;br&gt;";
                    ?&gt;
                </pre>

                <p>However, <span class="code">strtotime()</span> is not perfect, so remember to check the strings you put in there.</p>
                <hr>

                <h3>More Date Examples</h3>
                <p>The example below outputs the dates for the next six Saturdays:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;?php
                        $startdate = strtotime("Saturday");
                        $enddate = strtotime("+6 weeks", $startdate);

                        while ($startdate < $enddate) {
                            echo date("M d", $startdate) . "<br>";
                            $startdate = strtotime("+1 week", $startdate);
                        }
                    ?&gt;
                </pre>

                <p>The example below outputs the number of days until 4th of July:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;?php
                        $d1=strtotime("July 04");
                        $d2=ceil(($d1-time())/60/60/24);
                        echo "There are " . $d2 ." days until 4th of July.";
                    ?&gt;
                </pre>
                <hr>
            </div>
            <div id="php_include_files">
                <p>The <span class="code">include</span> (or <span class="code">require</span>) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.</p>
                <p>Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.</p>
                <hr>

                <h3>PHP include and require Statements</h3>
                <p>It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.</p>
                <p>The include and require statements are identical, except upon failure:</p>
                <ul>
                    <li><span class="code">require</span> will produce a fatal error (E_COMPILE_ERROR) and stop the script</li>
                    <li><span class="code">include</span> will only produce a warning (E_WARNING) and the script will continue</li>
                </ul>
                <p>So, if you want the execution to go on and show users the output, even if the include file is missing, use the include statement. Otherwise, in case of FrameWork, CMS, or a complex PHP application coding, always use the require statement to include a key file to the flow of execution. This will help avoid compromising your application's security and integrity, just in-case one key file is accidentally missing.</p>
                <p>Including files saves a lot of work. This means that you can create a standard header, footer, or menu file for all your web pages. Then, when the header needs to be updated, you can only update the header include file.</p>

                <h4>Syntax</h4>
                <pre class="example">
                    include 'filename';

                    or

                    require 'filename';
                </pre>
                <hr>

                <h3>PHP include Examples</h3>
                <h4>Example 1</h4>
                <p>Assume we have a standard footer file called "footer.php", that looks like this:</p>
                <pre class="example">
                    &lt;?php
                        echo "&lt;p&gt;Copyright &copy; 1999-" . date("Y") . " W3Schools.com&lt;/p&gt;";
                    ?&gt;
                </pre>

                <p>To include the footer file in a page, use the <span class="code">include</span> statement:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;html&gt;
                    &lt;body&gt;

                    &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;
                    &lt;p&gt;Some text.&lt;/p&gt;
                    &lt;p&gt;Some more text.&lt;/p&gt;
                    &lt;?php include 'footer.php';?&gt;

                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <hr>

                <h4>Example 2</h4>
                <p>Assume we have a standard menu file called "menu.php":</p>
                <pre class="example">
                    &lt;?php
                        echo '&lt;a href="/default.asp"&gtHome&lt;/a&gt -
                        &lt;a href="/html/default.asp"&gtHTML Tutorial&lt;/a&gt -
                        &lt;a href="/css/default.asp"&gtCSS Tutorial&lt;/a&gt -
                        &lt;a href="/js/default.asp"&gtJavaScript Tutorial&lt;/a&gt -
                        &lt;a href="default.asp"&gtPHP Tutorial&lt;/a&gt';
                    ?&gt;
                </pre>

                <p>All pages in the Web site should use this menu file. Here is how it can be done (we are using a <span class="code">div</span> element so that the menu easily can be styled with CSS later):</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;html&gt;
                    &lt;body&gt;

                    &lt;div class="menu"&gt;
                    &lt;?php include 'menu.php';?&gt;
                    &lt;/div&gt;

                    &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;
                    &lt;p&gt;Some text.&lt;/p&gt;
                    &lt;p&gt;Some more text.&lt;/p&gt;

                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <hr>

                <h4>Example 3</h4>
                <p>Assume we have a file called "vars.php", with some variables defined:</p>

                <pre class="example">
                    &lt;?php
                        $color='red';
                        $car='BMW';
                    ?&gt;
                </pre>

                <p>Then, if we include the "vars.php" file, the variables can be used in the calling file:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;html&gt;
                    &lt;body&gt;
                    
                    &lt;?php include 'vars.php';
                    echo "I have a $color $car.";
                    ?&gt; 

                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <hr>

                <h3>PHP incluude vs. require</h3>
                <p>The <span class="code">require</span> statement is also used to include a file into the PHP code.</p>
                <p>However, there is one big difference between include and require; when a file is included with the <span class="code">include</span> statement and PHP cannot find it, the script will continue to execute:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;html&gt;
                    &lt;body&gt;
                    
                    &lt;?php include 'noFileExists.php';
                    echo "I have a $color $car.";
                    ?&gt; 

                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>

                <p>If we do the same example using the <span class="code">require</span> statement, the echo statement will not be executed because the script execution dies after the <span class="code">require</span> statement returned a fatal error:</p>

                <h4>Example</h4>
                <pre class="example">
                    &lt;html&gt;
                    &lt;body&gt;
                    
                    &lt;?php require 'noFileExists.php';
                    echo "I have a $color $car.";
                    ?&gt; 

                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>

                <div class="note">
                    <p>Use <span class="code">require</span> when the file is required by the application.</p>
                    <p>Use <span class="code">include</span> when the file is not required and application should continue when file is not found.</p>
                </div>
            </div>
            <div id="php_file_handling">
                <h2>PHP File Handling</h2>
            </div>
        </div>
    </div>
    <!--
Manipulating Files


PHP offers a number of functions to use when creating, reading, uploading, and editing files.
The fopen() function creates or opens a file. If you use fopen() with a file that does not exist, the file will be created, given that the file has been opened for writing (w) or appending (a).

Use one of the following modes to open the file.
r: Opens file for read only.
w: Opens file for write only. Erases the contents of the file or creates a new file if it doesn't exist.
a: Opens file for write only.
x: Creates new file for write only.
r+: Opens file for read/write.
w+: Opens file for read/write. Erases the contents of the file or creates a new file if it doesn't exist.
a+: Opens file for read/write. Creates a new file if the file doesn't exist
x+: Creates new file for read/write.

The example below creates a new file, "file.txt", which will be created in the same directory that houses the PHP code.
                    -->

    <p id="bottom"></p>
</body>
</html>