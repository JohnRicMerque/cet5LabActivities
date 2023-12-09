<?php
define('NAME', 'John Ric Merque');
define('STUDENT_NUMBER', '2021-08128-MN-0');
define('ADDRESS', 'Sampaloc, Manila');
define('EMAIL_ADDRESS', 'johnricmer@gmail.com');
define('CONTACT_NUMBER', '09986545461');
define('WEBADDRESS', '+1 (123) 456-7890');
define('LABTITLE', 'Laboratory Activity No. 6');
define('DESCRIPTION', 'String Functions in PHP');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LABTITLE; ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,500&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: grid;
            grid-template-columns 1fr;
            height: 100vh;

        }

        header {
            margin: 0 5% 0 5%;
            background-color: white;
            color: 164863;
            text-align: left;
            padding: 0.5em;
            border-bottom: 1px solid #000;
        }

        nav {
            overflow-y: auto;
            background-color: #181823;
            padding: 1em;
            width: 23%;
            list-style-type: none;
            height: 100%;
            position: fixed;
            z-index: 1000;
        }

        nav h2 {
            color: #fff;
            border-bottom: 1px solid #fff;
            padding-bottom: 0.5em;
        }

        nav a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 0.8em 1em;
            margin: 0.5em 0;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #213555;
        }

        nav::-webkit-scrollbar {
        width: 0.4rem;
        }

        nav::-webkit-scrollbar-thumb {
        background-color: white;
        }

        nav::-webkit-scrollbar-track {
        background-color: white;
        }

        nav::-webkit-scrollbar-button {
        display: none;
        }

        .content {
            margin-left: 25%;
        }

        main {
            align: right;
            padding: 0 5em 0 5em;
            margin: 0 0 5% 0
        }

        footer {
            clear: both;
            color: black;
            background-color: white;
            padding: 0.2em;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center
        }

        footer > p {
            text-align: left;
            margin-left: 5%;
            font-size: 0.8rem
        }

        .info {
            display: flex;
            flex-direction: row;
            gap: 1em;
            justify-content: space-between;
            align-items: right;
            font-size: 0.8rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #181823; 
            text-align: center;
            padding: 1%;
        }

        td {
            font-size: 0.8rem
        }

        th {
            background-color: #181823; 
            color: white;
        }

        tr:nth-child(even) {
            background-color: #FAF6F0;
            color: #000000; 
        }

        .apply{
            border: none;
            padding: 0.5em 1em;
            margin: 0;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
            transition: background-color 0.3s ease;
            background-color: #181823;
            color: white;

        }

        .apply:hover {
            background-color: #45678a;
        }

        .reset{
            border: 1px gray solid;
            padding: 0.5em 1em;
            margin: 0;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
            transition: background-color 0.3s ease;
            background-color: #FAF6F0;
            color: black;
        }

    </style>
</head>

<body>
    <nav>
        <h2>Lab Activities</h2>
        <li><a href="lab1.php">Hello World</a></li>
        <li><a href="lab2.php">Creating Basic PHP Script</a></li>
        <li><a href="lab3.php">Working with Data Types and Operators</a></li>
        <li><a href="lab4.php">Functions and Control Structures – Number to Words</a></li>
        <li><a href="lab5.php">Functions and Control Structures – Magic Square</a></li>
        <li><a href="lab6.php"><?php echo DESCRIPTION; ?></a></li>
        <li><a href="lab7.php">Regular Expression</a></li>
        <li><a href="lab8.php">Array Manipulations – Word Counter</a></li>
        <li><a href="lab9.php">Handling User Input – User Registration</a></li>
        <li><a href="lab10.php">Handling User Input – Dynamic Page</a></li>
        <li><a href="lab11.php">Managing State Information Using Session – Login Page</a></li>
        <li><a href="lab12.php">Managing State Information Using Cookies – Login Page</a></li>
    </nav>
    <div class="content">
        <header>
            <h1><?php echo NAME; ?></h1>
            <div class="info">
                <p>Student Number: <?php echo STUDENT_NUMBER; ?></p>
                <p>Address: <?php echo ADDRESS; ?></p>
                <p>Email Address: <?php echo EMAIL_ADDRESS; ?></p>
                <p>Contact Number: <?php echo CONTACT_NUMBER; ?></p>
                <p>Web Address: <?php echo WEBADDRESS; ?></p>
            </div>
        </header>
        <main>
            <h2><?php echo LABTITLE; ?></h2>
            <?php
                if (isset($_POST['reset'])) {
                    $string = '';
                } else {
                    $string = isset($_POST['string']) ? $_POST['string'] : '';
                }
                
                echo '<form method="post" action="">';
                echo '<h1>String Functions in PHP</h1>';
                echo '<input type="text" name="string" value="', htmlspecialchars($string), '" size="100"><br /><br />';
                echo '<input class="apply" type="submit" value="Apply Functions">&nbsp;';
                echo '<input class="reset" type="submit" name="reset" value="Reset"><br />';
                echo '</form>';

                if (!empty($string)) {
                    echo '<table border="1">';

                    echo '<tr><td>1.</td><td> Original Value of String</td>';
                    echo '<td>*', htmlspecialchars($string), '*</td></tr>';

                    echo '<tr><td>2.</td><td>Number of characters</td>';
                    echo '<td>*', strlen($string), '*</td></tr>';

                    echo '<tr><td>3.</td><td>Number of words</td>';
                    echo '<td>*', str_word_count($string), '*</td></tr>';

                    echo '<tr><td>4.</td><td>First character to uppercase</td>';
                    echo '<td>*', ucfirst(htmlspecialchars($string)), '*</td></tr>';

                    echo '<tr><td>5.</td><td>First character of each word to uppercase</td>';
                    echo '<td>*', ucwords(htmlspecialchars($string)), '*</td></tr>';

                    echo '<tr><td>6.</td><td>Convert to lowercase</td>';
                    echo '<td>*', strtolower(htmlspecialchars($string)), '*</td></tr>';
                
                    echo '<tr><td>7.</td><td>Convert to uppercase</td>';
                    echo '<td>*', strtoupper(htmlspecialchars($string)), '*</td></tr>';

                    echo '<tr><td>8.</td><td>Without leading spaces</td>';
                    echo '<td>*', ltrim(htmlspecialchars($string)), '*</td></tr>';
                
                    echo '<tr><td>9.</td><td>Without trailing spaces</td>';
                    echo '<td>*', rtrim(htmlspecialchars($string)), '*</td></tr>';
                
                    echo '<tr><td>10.</td><td>Without leading and trailing spaces</td>';
                    echo '<td>*', trim(htmlspecialchars($string)), '*</td></tr>';

                    echo '<tr><td>11.</td><td>MD5 value of string</td>';
                    echo '<td>*', md5($string), '*</td></tr>';

                    echo '<tr><td>12.</td><td>Base64 value of string</td>';
                    echo '<td>*', base64_encode($string), '*</td></tr>';

                    echo '<tr><td>13.</td><td>First 16 characters</td>';
                    echo '<td>*', substr($string, 0, 16), '*</td></tr>';

                    echo '<tr><td>14.</td><td>Last 4 characters</td>';
                    echo '<td>*', substr($string, -4), '*</td></tr>';

                    echo '<tr><td>15.</td><td>Display 4 characters from 20th position</td>';
                    echo '<td>*', substr($string, 20, 4), '*</td></tr>';

                    $positionGuide = strpos($string, 'guide');
                    echo '<tr><td>16.</td><td>Position of the word "guide"</td>';
                    echo '<td>*';
                    var_dump($positionGuide);
                    echo '*</td></tr>';

                    $positionUE = strpos($string, 'UE');
                    echo '<tr><td>17.</td><td>Position of the word "UE"</td>';
                    echo '<td>*';
                    var_dump($positionUE);
                    echo '*</td></tr>';

                    $modifiedStringHTML = str_ireplace('html', 'HTML', $string);
                    echo '<tr><td>18.</td><td>HTML word in uppercase</td>';
                    echo '<td>*', htmlspecialchars($modifiedStringHTML), '*</td></tr>';

                    $modifiedStringInput = str_ireplace('<input>', '<INPUT>', $string);
                    echo '<tr><td>19.</td><td>&lt;INPUT&gt; word in uppercase</td>';
                    echo '<td>*', htmlspecialchars($modifiedStringInput), '*</td></tr>';


                    $stringArray = explode(' ', trim($string));
                    echo '<tr><td>20.</td><td> Convert to array</td>';
                    echo '<td>';
                    foreach ($stringArray as $word) {
                        echo '*', htmlspecialchars($word), '*', '<br>';
                    }
                    echo '</td></tr>';

                    echo '</table>';
                }
            ?>

        </main>

        <footer>
            <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
        </footer>
    </div>
</body>

</html>
