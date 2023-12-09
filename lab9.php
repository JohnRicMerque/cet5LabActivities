<?php
define('NAME', 'John Ric Merque');
define('STUDENT_NUMBER', '2021-08128-MN-0');
define('ADDRESS', 'Sampaloc, Manila');
define('EMAIL_ADDRESS', 'johnricmer@gmail.com');
define('CONTACT_NUMBER', '09986545461');
define('WEBADDRESS', '+1 (123) 456-7890');
define('LABTITLE', 'Laboratory Activity No. 9');
define('DESCRIPTION', 'Handling User Input – User Registration');

$school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
$course = 'Bachelor of Science in Computer Engineering';
$yearlevel = '2nd year';
$dateofbirth = 'October 2, 2002';
$gender = 'Male';
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
            padding: 1%;
            text-align: center;
        }

        th {
            background-color: #181823; 
            color: white;
        }

        td {
            width: 50%
        }

        tr:nth-child(even) {
            background-color: #FAF6F0;
            color: #000000; 
        }

        .register{
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
        <li><a href="lab6.php">String Functions in PHP</a></li>
        <li><a href="lab7.php">Regular Expression</a></li>
        <li><a href="lab8.php">Array Manipulations – Word Counter</a></li>
        <li><a href="lab9.php"><?php echo DESCRIPTION; ?></a></li>
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
            <p><?php echo DESCRIPTION; ?></p>
            <?php
            function generate_textbox($name, $value) {
                return '<input type="text" name="' . $name . '" value="' . $value . '">';
            }
            function generate_password($name, $value) {
                return '<input type="password" name="' . $name . '" value="' . $value . 
            '">';
            }
            function generate_textarea($name, $value) {
                return '<textarea name="' . $name . '">' . $value . '</textarea>';
            }
            function generate_checkbox($name) {
                return '<input type="checkbox" name="' . $name . '">';
            }
            ?>

            <?php

            // Items 1 to 9, get form data and assign to local variable
            // Item 1 is already given

            // Item 1: Get lastname form data
            $lastname = isset($_POST['txtLastname']) ? $_POST['txtLastname'] : '';
            $firstname = isset($_POST['txtFirstname']) ? $_POST['txtFirstname'] : ''; // Item 2
            $middlename = isset($_POST['txtMiddlename']) ? $_POST['txtMiddlename'] : ''; // Item 3
            $emailaddress = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : ''; // Item 4
            $username = isset($_POST['txtUsername']) ? $_POST['txtUsername'] : ''; // Item 5
            $password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : ''; // Item 6
            $confirmpassword = isset($_POST['txtConfirmPassword']) ? $_POST['txtConfirmPassword'] : ''; // Item 7
            $comments = isset($_POST['txtComments']) ? $_POST['txtComments'] : ''; // Item 8
            $agree = isset($_POST['chkAgree']) ? $_POST['chkAgree'] : ''; // item 9

            if (count($_POST) == 0) {
                echo '<form method="post" action="lab9.php">';
                echo '<table>';
                echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';

                // Item 10 to 18, generate html form elements using the functions
                // declared in No. 4. Item 10 is already given

                // Item 10: Generate lastname textbox
                echo '<tr><td>Lastname</td><td>', generate_textbox('txtLastname', $lastname), '</td></tr>';
                // Item 11: generate firstname textbox
                echo '<tr><td>Firstname</td><td>', generate_textbox('txtFirstname', $firstname), '</td></tr>';
                // Item 12: generate middlename textbox
                echo '<tr><td>Middlename</td><td>', generate_textbox('txtMiddlename', $middlename), '</td></tr>';
                // Item 13: generate emailaddress textbox
                echo '<tr><td>Email Address</td><td>', generate_textbox('txtEmail', $emailaddress), '</td></tr>';
                // Item 14: generate username textbox
                echo '<tr><td>Username</td><td>', generate_textbox('txtUsername', $username), '</td></tr>';
                // Item 15: generate password textbox
                echo '<tr><td>Password</td><td>', generate_password('txtPassword', $password), '</td></tr>';
                // Item 16: generate confirm password textbox
                echo '<tr><td>Confirm Password</td><td>', generate_password('txtConfirmPassword', $confirmpassword), '</td></tr>';
                // Item 17: generate comments textarea
                echo '<tr><td>Comments</td><td>', generate_textarea('txtComments', $comments), '</td></tr>';
                // Item 18: generate agree checkbox
                echo '<tr><td>Agree</td><td>', generate_checkbox('chkAgree', '1', $agree), '</td></tr>';

                echo '<tr><td colspan=2>';
                echo '<input class="register" type="submit" name="btnRegister" value="Register">&nbsp;';
                echo '<input class="reset" type="reset" name="btnReset" value="Reset">&nbsp;';
                echo '</td></tr>';
                echo '</table>';
                echo '</form>';
            } else {
                echo '<table>';
                echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
                echo '<tr><td colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';

                // For items 20 to 28, display submitted form data inside <td></td>
                // Item 20 already given

                // Item 20: display lastname data
                echo '<tr><td>Lastname</td><td>', $lastname, '</td></tr>';
                // Item 21: display firstname textbox (refer to code above)
                echo '<tr><td>Firstname</td><td>', $firstname, '</td></tr>';
                // Item 22: display middlename textbox
                echo '<tr><td>Middlename</td><td>', $middlename, '</td></tr>';
                // Item 23: display emailaddress textbox
                echo '<tr><td>Email Address</td><td>', $emailaddress, '</td></tr>';
                // Item 24: display username textbox
                echo '<tr><td>Username</td><td>', $username, '</td></tr>';
                // Item 25: display password textbox
                echo '<tr><td>Password</td><td>', $password, '</td></tr>';
                // Item 26: display confirm password textbox
                echo '<tr><td>Confirm Password</td><td>', $confirmpassword, '</td></tr>';
                // Item 27: display comments textarea
                echo '<tr><td>Comments</td><td>', $comments, '</td></tr>';
                // Item 28: display agree checkbox
                echo '<tr><td>Agree</td><td>', ($agree == '1') ? 'Yes' : 'No', '</td></tr>';
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
