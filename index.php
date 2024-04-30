<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial Using PHP</title>
    <style>
        
body{
    margin: 500;
}
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <section>
        <h1>Learn PHP</h1>
        <P>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
            PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.PHP code is executed on the server.</P>
        <br><b>What is PHP?</b><br>
        <ul>
            <li>PHP is an acronym for "PHP: Hypertext Preprocessor"</li>
            <li>PHP is a widely-used, open source scripting language</li>
            <li>PHP scripts are executed on the server</li>
            <li>PHP is free to download and use</li>
        </ul>
    </section>
    <section id="1">
        <h3>PHP Syntax</h3>
        <p>A PHP script can be placed anywhere in the document.
            <br>
            A PHP script starts with &lt;?php ends with ?&gt;
            <br>
            <code>
                &lt;?php <br>
                //PHP code goes here <br>
                ?&gt;
            </code>
        </p>

    </section>
    <section id="2">
        <h3></h3>
        <p></p>
    </section>
    <section id="3">
        <h3>PHP Comments</h3>
        <p>
            A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code. <br>
            <b>Comments can be used to ignore the code</b><br>
            // This is a single-line comment <br>

            # This is also a single-line comment<br>

            /* This is a
            multi-line comment */
        </p>
    </section>
    <section id="4">
        <h3>PHP echo</h3>
        <p>The echo statement can be used with or without parentheses: echo or echo().</p><br>
        <?php
        echo "<h2>Hiiii</h2>";
        echo "iam was wriiten in php using 'echo'<br>";
        echo "i going to tell you all about PHP so, Welcome aboard<br>";
        echo "i ", "can ", "take ", "multiple ", "parameters<br>";
        echo "just take a look at me";
        ?>

    </section>
    <section id="5">
        <h3>PHP Variables</h3>
        <p>Variables are "containers" for storing information.
            <br><b>Declaring PHP Variables</b><br>
            <code> &lt;?php<br> $myage = 25;<br>
                $myname = "Joseph";<br>
                &gt;</code><br>
            A PHP variables must start with $variable name.<br>
            Variable names are case sensitive.<br>
            <b>Output Variables</b><br>
            <?php
            $txt = "this ia variable ";
            echo "$txt";
            ?>
            <br>
            PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
        </p>
    </section>
    <section id="6">
        <h3>PHP Variables Scope</h3>
        <p>PHP has three different variable scopes:
        <ul>
            <li><b>local</b> -A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function</li>
            <li><b>global</b> -A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function</li>
            <li><b>static</b>-when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

                To do this, use the static keyword when you first declare the variable</li>
        </ul>
        </p>
    </section>
    <section id="7">
        <h3>PHP Data Types</h3>
        <p>
            PHP supports the following data types
        <table>
            <tr>
                <th>Data Type</th>
                <th>Declaration</th>
            </tr>
            <tr>
                <td>String</td>
                <td>Used to represent text. Declared using single or double quotes, like: <code>$name = 'John';</code></td>
            </tr>
            <tr>
                <td>Integer</td>
                <td>Used to represent whole numbers. Declared like: <code>$count = 10;</code></td>
            </tr>
            <tr>
                <td>Float (Double)</td>
                <td>Used to represent floating-point numbers. Declared like: <code>$price = 19.99;</code></td>
            </tr>
            <tr>
                <td>Boolean</td>
                <td>Used to represent true or false values. Declared like: <code>$isTrue = true;</code></td>
            </tr>
            <tr>
                <td>Array</td>
                <td>Used to store multiple values in a single variable. Declared like: <code>$colors = array('red', 'green', 'blue');</code></td>
            </tr>
            <tr>
                <td>Object</td>
                <td>Used to create instances of user-defined classes. Declared like: <code>$car = new Car();</code></td>
            </tr>
            <tr>
                <td>NULL</td>
                <td>Represents a variable with no value. Declared like: <code>$noValue = null;</code></td>
            </tr>
            <tr>
                <td>Resource</td>
                <td>Special variable holding a reference to an external resource. Declared through functions returning resources.</td>
            </tr>
        </table>
        </p>
    </section>

    <section id="8">
        <h3>PHP String Operations</h3>
        <table>
            <tr>
                <th>Operation</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>Concatenation</td>
                <td><code>$str1 = "Hello"; $str2 = " World"; $result = $str1 . $str2;</code></td>
                <td><?php $str1 = "Hello";
                    $str2 = " World";
                    $result = $str1 . $str2;# . (dot) operator to concatenate two or more strings.
                    echo $result; ?></td>
            </tr>
            <tr>
                <td>String Length</td>
                <td><code>$str = "Hello"; $length = strlen($str);</code></td>
                <td><?php $str = "Hello";
                    $length = strlen($str);#used to find the length of a string
                    echo $length; ?></td>
            </tr>
            <tr>
                <td>Substring</td>
                <td><code>$str = "Hello World"; $sub = substr($str, 0, 5);</code></td>
                <td><?php $str = "Hello World";
                    $sub = substr($str, 0, 5);#The substr() function in PHP is used to extract 
                    #a substring from a string. It returns a part of the string, starting at a
                    # specified start position, and extracting a certain number of characters as defined by the length parameter.
                    echo $sub; ?></td>
            </tr>
            <tr>
                <td>Uppercase</td>
                <td><code>$str = "hello"; $uppercase = strtoupper($str);</code></td>
                <td><?php $str = "hello";
                    $uppercase = strtoupper($str);#Convert strings to uppercase
                    echo $uppercase; ?></td>
            </tr>
            <tr>
                <td>Lowercase</td>
                <td><code>$str = "HELLO"; $lowercase = strtolower($str);</code></td>
                <td><?php $str = "HELLO";
                    $lowercase = strtolower($str);#convert strings to lowercase
                    echo $lowercase; ?></td>
            </tr>
            <tr>
                <td>Find Position</td>
                <td><code>$str = "Hello World"; $position = strpos($str, "World");</code></td>
                <td><?php $str = "Hello World";
                    $position = strpos($str, "World");
                    echo $position; ?></td>
            </tr>
            <tr>
                <td>Replace</td>
                <td><code>$str = "Hello, John!"; $newStr = str_replace("John", "Jane", $str);</code></td>
                <td><?php $str = "Hello, John!";
                    $newStr = str_replace("John", "Jane", $str);#
                    #The strpos() function in PHP is used to find the position of the first occurrence of
                    # a substring in a string. It is a very useful function for string manipulation, allowing 
                    #you to determine if a specific substring exists within a string and where it starts.
                    echo $newStr; ?></td>
            </tr>
            <tr>
                <td>Count</td>
                <td><code>$str = "Hello World"; $count = substr_count($str, "o");</code></td>
                <td><?php $str = "Hello World";
                    $count = substr_count($str, "o");  #function in PHP is used to count the number of times a substring appears in a given string
                    echo $count; 
                    ?></td>
            </tr>
            <tr>
                <td>Search</td>
                <td><code>$str = "Hello World"; $search = strstr($str, "World");</code></td>
                <td><?php $str = "Hello World IS MINE";
                    $search = strstr($str, "World");
                   #The strstr() function in PHP is used to find the first occurrence of a substring in a string and return all of the string starting from that substring to the end. Essentially, it searches for a substring in a string and returns the portion of the string that starts with the substring found, and continues until the end of the string.
                    echo $search; ?></td>
            </tr>
            <tr>
                <td>Reverse</td>
                <td><code>$str = "Hello"; $reverse = strrev($str);</code></td>
                <td><?php $str = "Hello";
                    $reverse = strrev($str);
                    echo $reverse; ?></td>
            </tr>
            <tr>
                <td>Trim</td>
                <td><code>$str = " Hello "; $trimmed = trim($str);</code></td>
                <td><?php $str = "   Hello   ";
                    $trimmed = trim($str);#The trim() function in PHP is a highly useful function for cleaning up strings, especially those that may have extra whitespace at the beginning or end. This function removes whitespace and other predefined characters from both sides of a string. It's often used to prepare data for storage or further processing, ensuring that unintended spaces do not affect later operations like comparisons, database queries, or visual displays.
                    echo $trimmed; ?></td>
            </tr>
            <tr>
                <td>String to Array</td>
                <td><code>$str = "Hello"; $charArray = str_split($str);</code></td>
                <td><?php $str = "Hello";
                    $charArray = str_split($str);#The str_split() function in PHP is used to split a string into an array of substrings. This can be particularly useful when you need to manipulate or analyze a string at the character level, as it allows you to work with each character individually after the split.
                    print_r($charArray); ?></td>
            </tr>
        </table>
    </section>
    <section id="9">
        <h3>PHP Escape Characters</h3>
        <p>These escape sequences are particularly useful in formatting text for output, embedding control characters, and avoiding conflicts with the syntax of PHP strings (e.g., using quotes within strings). They enable developers to work with text in more complex ways directly within their PHP scripts, such as in creating formatted documents, managing data outputs, or controlling device behaviors like printers.</p>
        <table>
            <tr>
                <th>Escape Sequence</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>\'</td>
                <td>Single Quote</td>
            </tr>
            <tr>
                <td>\"</td>
                <td>Double Quote</td>
            </tr>
            <tr>
                <td>\$</td>
                <td>PHP Variables</td>
            </tr>
            <tr>
                <td>\n</td>
                <td>New Line</td>
            </tr>
            <tr>
                <td>\r</td>
                <td>Carriage Return</td>
            </tr>
            <tr>
                <td>\t</td>
                <td>Tab</td>
                <!-- adds A tab space -->
            </tr>
            <tr>
                <td>\f</td>
                <td>Form Feed</td>
            </tr>
            <tr>
                <td>\ooo</td>
                <td>Octal Value</td>
                <!-- "\041" for ! -->
            </tr>
            <tr>
                <td>\xhh</td>
                <td>Hex Value</td>
            </tr>
        </table>
    </section>
    <section id="10">
        <h3>PHP Numbers</h3>
        <p>There are three main numeric types in PHP.<br>
            <b>Integer,
                Float,
                Number Strings</b>
        </p>

    </section>
    <section id="11">
        <h3>PHP Math</h3>
        <table>
            <tr>
                <th>Function</th>
                <th>Description</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>abs()</td>
                <td>Returns the absolute value of a number.</td>
                <td><code>$result = abs(-5);</code></td>
                <td><?php $result = abs(-5);
                    echo $result; ?></td>
            </tr>
            <tr>
                <td>sqrt()</td>
                <td>Returns the square root of a number.</td>
                <td><code>$result = sqrt(25);</code></td>
                <td><?php $result = sqrt(25);
                    echo $result; ?></td>
            </tr>
            <tr>
                <td>pow()</td>
                <td>Returns the value of a base raised to the power of an exponent.</td>
                <td><code>$result = pow(2, 3);</code></td>
                <td><?php $result = pow(2, 3);
                    echo $result; ?></td>
            </tr>
            <tr>
                <td>round()</td>
                <td>Rounds a floating-point number to the nearest integer.</td>
                <td><code>$result = round(4.6);</code></td>
                <td><?php $result = round(4.6);
                    echo $result; ?></td>
            </tr>
            <tr>
                <td>ceil()</td>
                <td>Rounds a number up to the nearest integer.</td>
                <td><code>$result = ceil(4.2);</code></td>
                <td><?php $result = ceil(4.2);
                    echo $result; ?></td>
            </tr>
            <tr>
                <td>floor()</td>
                <td>Rounds a number down to the nearest integer.</td>
                <td><code>$result = floor(4.8);</code></td>
                <td><?php $result = floor(4.8);
                    echo $result; ?></td>
            </tr>
            <tr>
                <td>rand()</td>
                <td>Generates a random integer.</td>
                <td><code>$result = rand(1, 100);</code></td>
                <td><?php $result = rand(1, 100);
                    echo $result; ?></td>
            </tr>
            <tr>
                <td>min()</td>
                <td>Returns the lowest value in an array or a list of arguments.</td>
                <td><code>$result = min(3, 8, 1, 6);</code></td>
                <td><?php $result = min(3, 8, 1, 6);
                    echo $result; ?></td>
            </tr>
            <tr>
                <td>max()</td>
                <td>Returns the highest value in an array or a list of arguments.</td>
                <td><code>$result = max(3, 8, 1, 6);</code></td>
                <td><?php $result = max(3, 8, 1, 6);
                    echo $result; ?></td>
            </tr>
        </table>
    </section>
    <section id="12">
        <h3>PHP Constants</h3>
        <p>In PHP, constants are like variables, but once they are defined, they cannot be changed or undefined during the script execution. Constants are useful for defining values that remain the same throughout the execution of a script.</p>
    </section>
    <section id="13">
        <h3>PHP Arithemetic Operations</h3>
        <table>
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>PHP Code</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>+</td>
                <td>Addition</td>
                <td><code>&lt;?php $x = 5; $y = 3; echo $x + $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = 3;
                    echo $x + $y; ?></td>
            </tr>
            <tr>
                <td>-</td>
                <td>Subtraction</td>
                <td><code>&lt;?php $x = 5; $y = 3; echo $x - $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = 3;
                    echo $x - $y; ?></td>
            </tr>
            <tr>
                <td>*</td>
                <td>Multiplication</td>
                <td><code>&lt;?php $x = 5; $y = 3; echo $x * $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = 3;
                    echo $x * $y; ?></td>
            </tr>
            <tr>
                <td>/</td>
                <td>Division</td>
                <td><code>&lt;?php $x = 6; $y = 2; echo $x / $y; ?&gt;</code></td>
                <td><?php $x = 6;
                    $y = 2;
                    echo $x / $y; ?></td>
            </tr>
            <tr>
                <td>%</td>
                <td>Modulus</td>
                <td><code>&lt;?php $x = 8; $y = 3; echo $x % $y; ?&gt;</code></td>
                <td><?php $x = 8;
                    $y = 3;
                    echo $x % $y; ?></td>
            </tr>
            <tr>
                <td>**</td>
                <td>Exponentiation</td>
                <td><code>&lt;?php $x = 2; $y = 3; echo $x ** $y; ?&gt;</code></td>
                <td><?php $x = 2;
                    $y = 3;
                    echo $x ** $y; ?></td>
            </tr>
        </table>
    </section>
    <section id="14">
        <h3>PHP Assignment Operators</h3>
        <table>
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>PHP Code</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>=</td>
                <td>Assignment</td>
                <td><code>&lt;?php $x =10 ; ?&gt;</code></td>
                <td><?php $x = 10;
                    $y = $x;
                    echo $y; ?></td>
            </tr>
            <tr>
                <td>+=</td>
                <td>Addition Assignment</td>
                <td><code>&lt;?php $x += $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = 3;
                    $x += $y;#x=x+y
                    echo $x; ?></td>
            </tr>
            <tr>
                <td>-=</td>
                <td>Subtraction Assignment</td>
                <td><code>&lt;?php $x -= $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = 3;
                    $x -= $y;#x=x-y
                    echo $x; ?></td>
            </tr>
            <tr>
                <td>*=</td>
                <td>Multiplication Assignment</td>
                <td><code>&lt;?php $x *= $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = 3;
                    $x *= $y;#x=x*y
                    echo $x; ?></td>
            </tr>
            <tr>
                <td>/=</td>
                <td>Division Assignment</td>
                <td><code>&lt;?php $x /= $y; ?&gt;</code></td>
                <td><?php $x = 6;
                    $y = 2;
                    $x /= $y;
                    echo $x; ?></td>
            </tr>
            <tr>
                <td>%=</td>
                <td>Modulus Assignment</td>
                <td><code>&lt;?php $x %= $y; ?&gt;</code></td>
                <td><?php $x = 8;
                    $y = 3;
                    $x %= $y;
                    echo $x; ?></td>
            </tr>
        </table>
    </section>
    <section id="14">
        <h3>PHP Comparison Operators</h3>
        <table>
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>==</td>
                <td>Equal</td>
                <td><code>&lt;?php $x = 5; $y = 5; echo $x == $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = 5;
                    echo $x == $y ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>===</td>
                <td>Identical</td>
                <td><code>&lt;?php $x = 5; $y = '5'; echo $x === $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = '5';#this is string 
                    echo $x === $y ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>!=</td>
                <td>Not equal</td>
                <td><code>&lt;?php $x = 5; $y = 10; echo $x != $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = 10;
                    echo $x != $y ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>&lt;&gt;</td>
                <td>Not equal</td>
                <td><code>&lt;?php $x = 5; $y = 10; echo $x <> $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = 10;
                    echo $x <> $y ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>!==</td>
                <td>Not identical</td>
                <td><code>&lt;?php $x = 5; $y = '5'; echo $x !== $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = '5';
                    echo $x !== $y ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>&gt;</td>
                <td>Greater than</td>
                <td><code>&lt;?php $x = 10; $y = 5; echo $x > $y; ?&gt;</code></td>
                <td><?php $x = 10;
                    $y = 5;
                    echo $x > $y ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>&lt;</td>
                <td>Less than</td>
                <td><code>&lt;?php $x = 5; $y = 10; echo $x < $y; ?&gt;</code>
                </td>
                <td><?php $x = 5;
                    $y = 10;
                    echo $x < $y ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>&gt;=</td>
                <td>Greater than or equal to</td>
                <td><code>&lt;?php $x = 10; $y = 5; echo $x >= $y; ?&gt;</code></td>
                <td><?php $x = 10;
                    $y = 5;
                    echo $x >= $y ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>&lt;=</td>
                <td>Less than or equal to</td>
                <td><code>&lt;?php $x = 5; $y = 10; echo $x <= $y; ?&gt;</code>
                </td>
                <td><?php $x = 5;
                    $y = 10;
                    echo $x <= $y ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>&lt;=&gt;</td>
                <td>Spaceship</td>
                <td><code>&lt;?php $x = 5; $y = 5; echo $x <=> $y; ?&gt;</code></td>
                <td><?php $x = 5;
                    $y = 5;
                    echo $x <=> $y; ?></td>
            </tr>
        </table>
    </section>
    <section id="15">
        <h3>PHP Increment and Decrement</h3>
        <table>
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>++$x</td>
                <td>Pre-increment</td>
                <td><code>&lt;?php $x = 5; echo ++$x; ?&gt;</code></td>
                <td><?php $x = 5;
                    echo ++$x; ?></td>
            </tr>
            <tr>
                <td>$x++</td>
                <td>Post-increment</td>
                <td><code>&lt;?php $x = 5; echo $x++; ?&gt;</code></td>
                <td><?php $x = 5;
                    echo $x++; ?></td>
            </tr>
            <tr>
                <td>--$x</td>
                <td>Pre-decrement</td>
                <td><code>&lt;?php $x = 5; echo --$x; ?&gt;</code></td>
                <td><?php $x = 5;
                    echo --$x; ?></td>
            </tr>
            <tr>
                <td>$x--</td>
                <td>Post-decrement</td>
                <td><code>&lt;?php $x = 5; echo $x--; ?&gt;</code></td>
                <td><?php $x = 5;
                    echo $x--; ?></td>
            </tr>
        </table>
    </section>
    <section id="16">
        <h3>PHP Logical Opertators</h3>
        <table>
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>and</td>
                <td>And</td>
                <td><code>&lt;?php $x = true; $y = false; echo ($x and $y) ? 'true' : 'false'; ?&gt;</code></td>
                <td><?php $x = true;
                    $y = false;
                    echo ($x and $y) ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>or</td>
                <td>Or</td>
                <td><code>&lt;?php $x = true; $y = false; echo ($x or $y) ? 'true' : 'false'; ?&gt;</code></td>
                <td><?php $x = true;
                    $y = false;
                    # and  operator is used to evaluate two conditions or expressions, and it returns true only if both operands are true.
                    echo ($x or $y) ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>xor</td>
                <td>Xor</td>
                <td><code>&lt;?php $x = true; $y = false; echo ($x xor $y) ? 'true' : 'false'; ?&gt;</code></td>
                <td><?php $x = true;
                    $y = false;
                    echo ($x xor $y) ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>&&</td>
                <td>And</td>
                <td><code>&lt;?php $x = true; $y = false; echo ($x && $y) ? 'true' : 'false'; ?&gt;</code></td>
                <td><?php $x = true;
                    $y = false;
                    echo ($x && $y) ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>||</td>
                <td>Or</td>
                <td><code>&lt;?php $x = true; $y = false; echo ($x || $y) ? 'true' : 'false'; ?&gt;</code></td>
                <td><?php $x = true;
                    $y = false;
                    echo ($x || $y) ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>!</td>
                <td>Not</td>
                <td><code>&lt;?php $x = true; echo !$x ? 'true' : 'false'; ?&gt;</code></td>
                <td><?php $x = true;
                    echo !$x ? 'true' : 'false'; ?></td>
            </tr>
        </table>
    </section>
    <section id="17">
        <h3>PHP Array Operators</h3>
        <table>
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>+</td>
                <td>Union</td>
                <td><code>&lt;?php $x = array("a", "b", "c"); $y = array(1, 2, 3); print_r($x + $y); ?&gt;</code></td>
                <td><?php $x = array("a", "b", "c");
                    $y = array(1, 2, 3);
                    print_r($x + $y); ?></td>
            </tr>
            <tr>
                <td>==</td>
                <td>Equality</td>
                <td><code>&lt;?php $x = array("a" => 1, "b" => 2); $y = array("b" => 2, "a" => 1); var_dump($x == $y); ?&gt;</code></td>
                <td><?php $x = array("a" => 1, "b" => 2);
                    $y = array("b" => 2, "a" => 1);
                    var_dump($x == $y); ?></td>
            </tr>
            <tr>
                <td>===</td>
                <td>Identity</td>
                <td><code>&lt;?php $x = array("a" => 1, "b" => 2); $y = array("b" => 2, "a" => 1); var_dump($x === $y); ?&gt;</code></td>
                <td><?php $x = array("a" => 1, "b" => 2);
                    $y = array("b" => 2, "a" => 1);
                    var_dump($x === $y); ?></td>
            </tr>
            <tr>
                <td>!=</td>
                <td>Inequality</td>
                <td><code>&lt;?php $x = array("a" => 1, "b" => 2); $y = array("c" => 3, "d" => 4); var_dump($x != $y); ?&gt;</code></td>
                <td><?php $x = array("a" => 1, "b" => 2);
                    $y = array("c" => 3, "d" => 4);
                    var_dump($x != $y); 
                    #checks for not equal
                    ?></td>
            </tr>
            <tr>
                <td>&lt;&gt;</td>
                <td>Inequality</td>
                <td><code>&lt;?php $x = array("a" => 1, "b" => 2); $y = array("c" => 3, "d" => 4); var_dump($x <> $y); ?&gt;</code></td>
                <td><?php $x = array("a" => 1, "b" => 2);
                    $y = array("c" => 3, "d" => 4);
                    var_dump($x <> $y); ?></td>
            </tr>
            <tr>
                <td>!==</td>
                <td>Non-identity</td>
                <td><code>&lt;?php $x = array("a" => 1, "b" => 2); $y = array("c" => 3, "d" => 4); var_dump($x !== $y); ?&gt;</code></td>
                <td><?php $x = array("a" => 1, "b" => 2);
                    $y = array("c" => 3, "d" => 4);
                    var_dump($x !== $y); ?></td>
            </tr>
        </table>
    </section>
    <section id="18">
        <h3>PHP Ternary and Null Coalescing Operators</h3>
        <table>
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>?:</td>
                <td>Ternary</td>
                <td><code>&lt;?php $expr1 = true; $x = $expr1 ? "expr2 result" : "expr3 result"; echo $x; ?&gt;</code></td>
                <td><?php $expr1 = true;
                    $x = $expr1 ? "expr" : "expr3 result";
                    echo $x;
                    # It returns the first operand if it exists and is not null; otherwise, it returns the second operand. This operator is often used to provide default values for variables that might be null. ?></td>
            </tr>
            <tr>
                <td>??</td>
                <td>Null Coalescing</td>
                <td><code>&lt;?php $expr1 = "exists"; $x = $expr1 ?? "default value"; echo $x; ?&gt;</code></td>
                <td><?php $expr1 = "exists";
                    $x = $expr1 ?? "default value";
                    echo $x; ?></td>
            </tr>
        </table>
    </section>
    <section id="19">
        <h3>PHP Conditional Statements</h3>
        <table>
            <tr>
                <th>Statement</th>
                <th>Description</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>if</td>
                <td>Executes code if a specified condition is true</td>
                <td><code>&lt;?php $x = 5; if ($x > 0) { echo "Positive number"; } ?&gt;</code></td>
                <td><?php $x = 5;
                    if ($x > 0) {
                        echo "Positive number";
                    } ?></td>
            </tr>
            <tr>
                <td>else</td>
                <td>Executes code if the specified condition of the if statement is false</td>
                <td><code>&lt;?php $x = -5; if ($x > 0) { echo "Positive number"; } else { echo "Negative number or zero"; } ?&gt;</code></td>
                <td><?php $x = -5;
                    if ($x > 0) {
                        echo "Positive number";
                    } else {
                        echo "Negative number or zero";
                    } ?></td>
            </tr>
            <tr>
                <td>elseif</td>
                <td>Executes code if the previous condition is false and the specified condition is true</td>
                <td><code>&lt;?php $x = 0; if ($x > 0) { echo "Positive number"; } elseif ($x < 0) { echo "Negative number" ; } else { echo "Zero" ; } ?&gt;</code>
                </td>
                <td><?php $x = 0;
                    if ($x > 0) {
                        echo "Positive number";
                    } elseif ($x < 0) {
                        echo "Negative number";
                    } else {
                        echo "Zero";
                    } ?></td>
            </tr>
            <tr>
                <td>switch</td>
                <td>Selects one of many blocks of code to be executed</td>
                <td><code>&lt;?php $day = "Monday"; switch ($day) { case "Monday": echo "It's Monday!"; break; case "Tuesday": echo "It's Tuesday!"; break; default: echo "It's not Monday or Tuesday!"; } ?&gt;</code></td>
                <td><?php $day = "Monday";
                    switch ($day) {
                        case "Monday":
                            echo "It's Monday!";
                            break;
                        case "Tuesday":
                            echo "It's Tuesday!";
                            break;
                        default:
                            echo "It's not Monday or Tuesday!";
                    } ?></td>
            </tr>
            <tr>
                <td>?:</td>
                <td>Ternary Operator - Short if-else statement</td>
                <td><code>&lt;?php $x = 5; echo ($x > 0) ? "Positive number" : "Non-positive number"; ?&gt;</code></td>
                <td><?php $x = 5;
                    echo ($x > 0) ? "Positive number" : "Non-positive number"; ?></td>
            </tr>
        </table>
    </section>
    <section id="20">
        <h3>PHP Nested If</h3>
        <p>if statements inside if statements, this is called nested if statements.</p>

    </section>
    <section id="21">
        <h3>PHP Loops</h3>
        <table>
            <tr>
                <th>Loop</th>
                <th>Description</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>while</td>
                <td>Executes code as long as a specified condition is true</td>
                <td><code>&lt;?php $i = 1; while ($i <= 5) { echo $i . " " ; $i++; } ?&gt;</code>
                </td>
                <td><?php $i = 1;
                    while ($i <= 5) {
                        echo $i . " ";
                        $i++;
                    } ?></td>
            </tr>
            <tr>
                <td>do-while</td>
                <td>Executes code at least once and then as long as a specified condition is true</td>
                <td><code>&lt;?php $i = 1; do { echo $i . " "; $i++; } while ($i <= 5); ?&gt;</code>
                </td>
                <td><?php $i = 1;
                    do {
                        echo $i . " ";
                        $i++;
                    } while ($i <= 5); ?></td>
            </tr>
            <tr>
                <td>for</td>
                <td>Executes code a specified number of times</td>
                <td><code>&lt;?php for ($i = 1; $i <= 5; $i++) { echo $i . " " ; } ?&gt;</code>
                </td>
                <td><?php for ($i = 1; $i <= 5; $i++) {
                        echo $i . " ";
                    } ?></td>
            </tr>
            <tr>
                <td>foreach</td>
                <td>Iterates over arrays</td>
                <td><code>&lt;?php $colors = array("red", "green", "blue"); foreach ($colors as $color) { echo $color . " "; } ?&gt;</code></td>
                <td><?php $colors = array("red", "green", "blue");
                    foreach ($colors as $color) {
                        echo $color . " ";
                    } ?></td>
            </tr>
        </table>
    </section>
    <section id="22">
        <h3>PHP Break and Continue </h3>
        <table>
            <tr>
                <th>Statement</th>
                <th>Description</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>break</td>
                <td>Terminates the execution of the nearest loop or switch</td>
                <td><code>&lt;?php for ($i = 1; $i <= 5; $i++) { if ($i==3) { break; } echo $i . " " ; } ?&gt;</code>
                </td>
                <td><?php for ($i = 1; $i <= 5; $i++) {
                        if ($i == 3) {
                            break;
                        }
                        echo $i . " ";
                    } ?></td>
            </tr>
            <tr>
                <td>continue</td>
                <td>Skips the rest of the current loop iteration and continues with the next one</td>
                <td><code>&lt;?php for ($i = 1; $i <= 5; $i++) { if ($i==3) { continue; } echo $i . " " ; } ?&gt;</code>
                </td>
                <td><?php for ($i = 1; $i <= 5; $i++) {
                        if ($i == 3) {
                            continue;
                        }
                        echo $i . " ";
                    } ?></td>
            </tr>
        </table>
    </section>
    <section id="23">
        <h3>PHP Functions</h3>
        <p>Besides the built-in PHP functions, it is possible to create your own functions.
            <br>
            A function is a block of statements that can be used repeatedly in a program.
            <br>A function will not execute automatically when a page loads.
            <br>A function will be executed by a call to the function.
            <br><b>Create a Function</b><br>
            A user-defined function declaration starts with the keyword function, followed by the name of the function<br>
            <code>function myMessage() {
                echo "Hello world!";
                }</code>
            <br>
            <b>Call a Function</b><br>
            <code>function myMessage() {
                echo "Hello world!";
                }

                myMessage();</code>
            <br><b>Function Arguments</b><br>
            Information can be passed to functions through arguments. An argument is just like a variable.
            Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.<br>
            <?php
            // Function to check if a number is odd or even
            function checkOddEven($number)
            {
                if ($number % 2 == 0) {
                    return "Even";
                } else {
                    return "Odd";
                }
            }

            // Test the function with a number
            $testNumber = 8;
            $result = checkOddEven($testNumber);

            // Output the result
            echo "The number $testNumber is $result.";
            ?>
        </p>
    </section>
    <section id="24">
        <h3>PHP Arrays</h3>
        <p>An array stores multiple values in one single variable.<br>
            An array is a special variable, which can hold more than one value at a time.
            <br><b>Create an Array in PHP</b><br>
            the array() function is used to create an array<br>
            Three Types of Arrays in PHP<br>
            Indexed arrays - Arrays with a numeric index<br>
            Associative arrays - Arrays with named keys<br>
            Multidimensional arrays - Arrays containing one or more arrays<br>
        </p>

        <table>
            <tr>
                <th>Operation</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>Defining an Array</td>
                <td><code>$fruits = ["Apple", "Banana", "Orange"];</code></td>
                <td><?php $fruits = ["Apple", "Banana", "Orange"];
                    echo implode($fruits); ?></td>
            </tr>
            <tr>
                <td>Accessing Array Elements</td>
                <td><code>echo $fruits[0];</code></td>
                <td><?php echo $fruits[0]; ?></td>
            </tr>
            <tr>
                <td>Modifying Array Elements</td>
                <td><code>$fruits[1] = "Mango";</code></td>
                <td><?php $fruits[1] = "Mango";
                    echo implode(", ", $fruits); ?></td>
            </tr>
            <tr>
                <td>Associative Arrays are arrays that use named keys that you assign to them.</td>
                <td><code>$person = ["name" => "John", "age" => 30];</code></td>
                <td><?php $person = ["name" => "John", "age" => 30];
                    echo implode(", ", $person); ?></td>
            </tr>
            <tr>
                <td>Array Count</td>
                <td><code>$length = count($fruits);</code></td>
                <td><?php $length = count($fruits);
                    echo $length; ?></td>
            </tr>
        </table>
        <p>
            <b>Multidimensional Arrays</b><br>A multidimensional array is an array containing one or more arrays
            <br>
            <b>Sorting Arrays</b><br>
            The elements in an array can be sorted in alphabetical or numerical order, descending or ascending
        </p>
        <table>
            <tr>
                <th>Function</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>sort()</td>
                <td><code>$numbers = [4, 2, 8, 1, 6];<br>sort($numbers);</code></td>
                <td><?php $numbers = [4, 2, 8, 1, 6];
                    sort($numbers);#sorts in ascending order
                    echo implode(", ", $numbers); ?></td>
            </tr>
            <tr>
                <td>rsort()</td>
                <td><code>$numbers = [4, 2, 8, 1, 6];<br>rsort($numbers);</code></td>
                <td><?php $numbers = [4, 2, 8, 1, 6];
                    rsort($numbers);#sorts in reverse descending order
                    echo implode(", ", $numbers); ?></td>
            </tr>
            <tr>
                <td>asort()</td>
                <td><code>$fruits = ["Apple" => 3, "Banana" => 1, "Orange" => 2];<br>asort($fruits);</code></td>
                <td><?php $fruits = ["Apple" => 3, "Banana" => 1, "Orange" => 2];
                    asort($fruits);#sort in ascending order while preserving the keys, 
                    print_r($fruits); ?></td>
            </tr>
            <tr>
                <td>ksort()</td>
                <td><code>$fruits = ["Apple" => 3, "Banana" => 1, "Orange" => 2];<br>ksort($fruits);</code></td>
                <td><?php $fruits = ["Apple" => 3, "Banana" => 1, "Orange" => 2];
                    ksort($fruits);# sorts the array in ascending order with natural values of the keys
                    print_r($fruits); ?></td>
            </tr>
            <tr>
                <td>arsort()</td>
                <td><code>$fruits = ["Apple" => 3, "Banana" => 1, "Orange" => 2];<br>arsort($fruits);</code></td>
                <td><?php $fruits = ["Apple" => 3, "Banana" => 1, "Orange" => 2];
                    arsort($fruits);#sort an arary in descending order while maintaining key value associations
                    print_r($fruits); ?></td>
            </tr>
            <tr>
                <td>krsort()</td>
                <td><code>$fruits = ["Apple" => 3, "Banana" => 1, "Orange" => 2];<br>krsort($fruits);</code></td>
                <td><?php $fruits = ["Apple" => 3, "Banana" => 1, "Orange" => 2];
                    krsort($fruits);
                    print_r($fruits); ?></td>
            </tr>
        </table>
    </section>
    <section id="25">
        <h3>PHP Global Variables - Superglobals</h3>
        <p>Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.</p>
        <table>
            <tr>
                <th>Global Array</th>
                <th>Description</th>
                <th>Example</th>
            </tr>
            <tr>
                <td>$GLOBALS</td>
                <td>Associative array containing all global variables</td>
                <td><code>$GLOBALS['variable_name']</code></td>
            </tr>
            <tr>
                <td>$_SERVER</td>
                <td>Server and execution environment information</td>
                <td><code>$_SERVER['HTTP_USER_AGENT']</code></td>
            </tr>
            <tr>
                <td>$_REQUEST</td>
                <td>Combined $_GET, $_POST, and $_COOKIE</td>
                <td><code>$_REQUEST['parameter']</code></td>
            </tr>
            <tr>
                <td>$_POST</td>
                <td>Form data sent with POST method</td>
                <td><code>$_POST['field_name']</code></td>
            </tr>
            <tr>
                <td>$_GET</td>
                <td>Form data sent with GET method</td>
                <td><code>$_GET['parameter']</code></td>
            </tr>
            <tr>
                <td>$_FILES</td>
                <td>Uploaded file information</td>
                <td><code>$_FILES['file_field']['name']</code></td>
            </tr>
            <tr>
                <td>$_ENV</td>
                <td>Environment variables</td>
                <td><code>$_ENV['variable_name']</code></td>
            </tr>
            <tr>
                <td>$_COOKIE</td>
                <td>Client-side cookies</td>
                <td><code>$_COOKIE['cookie_name']</code></td>
            </tr>
            <tr>
                <td>$_SESSION</td>
                <td>User session variables</td>
                <td><code>$_SESSION['user_data']</code></td>
            </tr>
        </table>
    </section>


    <section id="26">
        <h3>PHP Regular Expressions</h3>
        <p>A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.
            A regular expression can be a single character, or a more complicated pattern.
            Regular expressions can be used to perform all types of text search and text replace operations.</p>
        <table>
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
    </section>
    <section id="">
        <h3>PHP Date and Time</h3>
        <p>The PHP date() function is used to format a date and/or a time.</p>
        <table>
            <tr>
                <th>Function</th>
                <th>Description</th>
                <th>Live Example</th>
            </tr>
            <tr>
                <td>date()</td>
                <td>Returns the current date and time</td>
                <td> <?php
                        // Set the time zone to 'Asia/Kolkata' (Indian Standard Time)
                        // you an change the 'Asia/Kolkata' to your time zone
                        date_default_timezone_set('Asia/Kolkata');

                        // Get the current date and time
                        $currentDateTime = date('Y-m-d H:i:s');

                        // Display the current date and time
                        echo "Current Date and Time: $currentDateTime";
                        ?></td>
            </tr>
            <tr>
                <td>time()</td>
                <td>Returns the current Unix timestamp</td>
                <td><?php

                    date_default_timezone_set('Asia/Kolkata');
                    // Get the current Unix timestamp
                    $currentTimestamp = time();

                    // Convert Unix timestamp to a readable date format
                    $currentDate = date('Y-m-d H:i:s', $currentTimestamp);

                    // Display the current Unix timestamp
                    echo "<p>Current Unix Timestamp: $currentTimestamp</p>";

                    // Display the current date and time
                    echo "<p>Current Date and Time: $currentDate</p>";
                    ?></td>
            </tr>
            <tr>
                <td>strtotime()</td>
                <td>Parses a time/date string into a Unix timestamp</td>
                <td> <?php
                        // Get the current date and time in a specific format
                        $formattedDate = "2023-12-31 15:30:00";

                        // Convert the formatted date to a Unix timestamp using strtotime
                        $timestamp = strtotime($formattedDate);

                        // Display the formatted date, Unix timestamp, and the corresponding date and time
                        echo "<p>Formatted Date: $formattedDate</p>";
                        echo "<p>Unix Timestamp: $timestamp</p>";
                        echo "<p>Converted Date and Time: " . date('Y-m-d H:i:s', $timestamp) . "</p>";
                        ?></td>
            </tr>
            <tr>
                <td>mktime()</td>
                <td>Returns the Unix timestamp for a date</td>
                <td><?php
                    // Create a Unix timestamp for December 31, 2023, 15:30:00
                    $timestamp = mktime(15, 30, 0, 12, 31, 2023);

                    // Display the Unix timestamp and the corresponding date and time
                    echo "<p>Unix Timestamp: $timestamp</p>";
                    echo "<p>Converted Date and Time: " . date('Y-m-d H:i:s', $timestamp) . "</p>";
                    ?></td>
            </tr>
            <tr>
                <td>strftime()</td>
                <td>Formats a local time/date according to locale settings</td>
                <td><?php
                    // Create a Unix timestamp for December 31, 2023, 15:30:00
                    $timestamp = mktime(15, 30, 0, 12, 31, 2023);

                    // Display the Unix timestamp and the corresponding date and time
                    echo "<p>Unix Timestamp: $timestamp</p>";
                    echo "<p>Converted Date and Time: " . date('Y-m-d H:i:s', $timestamp) . "</p>";
                    ?></td>
            </tr>
            <tr>
                <td>gmdate()</td>
                <td>Returns the current date and time in Greenwich Mean Time (GMT)</td>
                <td><?php
                    // Get the current GMT date and time
                    $currentDateTime = gmdate('Y-m-d H:i:s');

                    // Display the current GMT date and time
                    echo "<p>Current GMT Date and Time: $currentDateTime</p>";
                    ?></td>
            </tr>
            <tr>
                <td>date_default_timezone_set()</td>
                <td>Sets the default timezone used by all date/time functions</td>
                <td><?php date_default_timezone_set('America/New_York'); //SETTING TIMEZONE TO AMERICA/NEWYORK
                    echo date('Y-m-d H:i:s'); ?></td>
            </tr>
            <tr>
                <td>date_create()</td>
                <td>Returns a new DateTime object</td>
                <td><?php
                    // Create a new DateTime object representing the current date and time
                    $currentDateTime = date_create();

                    // Format the DateTime object
                    $formattedDate = date_format($currentDateTime, 'Y-m-d H:i:s');

                    // Display the formatted date and time
                    echo "<p>Current Date and Time: $formattedDate</p>";
                    ?></td>
            </tr>
            <tr>
                <td>date_format()</td>
                <td>Formats a DateTime object</td>
                <td> <?php
                        // Create a new DateTime object representing the current date and time
                        $currentDateTime = date_create();

                        // Format the DateTime object using date_format
                        $formattedDate = date_format($currentDateTime, 'Y-m-d H:i:s');

                        // Display the formatted date and time
                        echo "<p>Current Date and Time: $formattedDate</p>";
                        ?></td>
            </tr>
            <tr>
                <td>getdate()</td>
                <td>Returns an associative array containing the date information</td>
                <td><?php
                    // Get the current date and time information as an associative array
                    $dateInfo = getdate();

                    // Display the elements of the date information
                    echo "<p>Year: {$dateInfo['year']}</p>";
                    echo "<p>Month: {$dateInfo['mon']}</p>";
                    echo "<p>Day: {$dateInfo['mday']}</p>";
                    echo "<p>Hour: {$dateInfo['hours']}</p>";
                    echo "<p>Minute: {$dateInfo['minutes']}</p>";
                    echo "<p>Second: {$dateInfo['seconds']}</p>";
                    echo "<p>Weekday: {$dateInfo['weekday']}</p>";
                    echo "<p>Month name: {$dateInfo['month']}</p>";
                    ?></td>
            </tr>
        </table>
    </section>
    <section id="">
        <h3>PHP Include Files</h3>
        <p>The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.
            Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.</p>
    </section>
    <section id="">
        <h3></h3>
        <p></p>
    </section>
    <section id="">
        <h3></h3>
        <p></p>
    </section>
    <section id="">
        <h3></h3>
        <p></p>
    </section>
    <section id="">
        <h3></h3>
        <p></p>
    </section>
    <section id="">
        <h3></h3>
        <p></p>
    </section>
    <!-- <section id="">
    <h3></h3>
    <p></p>
</section> -->



</body>

</html>