<?php
    session_start();
    if (isset($_POST['username'])) {
        if (isset($_POST['rememberme']))
        setcookie('username',$_POST['username'], time() + 60 * 60);
        else
        setcookie('username','', time() - 60 * 60);
       }

    function generate_loginform() {
        if (isset($_COOKIE['username']))
            $username = $_COOKIE['username'];
        else
            $username = '';

        echo '<form method="post" action="lab9.php">';
        echo '  <label for="username">Username:</label>';
        echo '  <input type="text" name="username" id="username" value="', htmlspecialchars($username), '" required>';
        echo '  <br>';
        echo '  <label for="password">Password:</label>';
        echo '  <input type="password" name="password" id="password" required>';
        echo '  <br>';
        echo '  <input type="submit" name="login" value="Login">';
        echo '  <input type="checkbox" name="rememberme" checked=checked> Remember me on this computer';
        echo '</form>';
    }

    function process_form() {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ((trim($username) != '') && ($password == '12345')) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                generate_welcomepage();
            } else {
                generate_loginerror();
                generate_loginform();
            }
        }
    }

    function generate_loginerror() {
        echo '<strong style="color: red;">Login Failed</strong>';
    }

    function process_logout() {
        if (isset($_SESSION['username'])) {
            echo '<strong style="color: green;">Logout Successful</strong>';
            destroy_session();
            generate_loginform();
        }
    }

    function destroy_session() {
        session_unset();
        session_destroy();
    }

    function generate_welcomepage() {
        $username = $_SESSION['username'];
        echo '<p style="color: #181823;">Welcome back, <strong>' . $username . '</strong>! Enjoy your stay.</p>';
        echo '<p style="font-style: italic; color: #181823;">A warm welcome to our platform. We are happy to see you!</p>';
        echo '<form method="post" action="lab9.php">';
        echo '  <input type="submit" name="logout" value="Logout" style="background-color: #181823; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">';
        echo '</form>';
    }

    ?>
<?php
define('NAME', 'John Ric Merque');
define('STUDENT_NUMBER', '2021-08128-MN-0');
define('ADDRESS', 'Sampaloc, Manila');
define('EMAIL_ADDRESS', 'johnricmer@gmail.com');
define('CONTACT_NUMBER', '09986545461');
define('WEBADDRESS', '+1 (123) 456-7890');
define('LABTITLE', 'Laboratory Activity No. 12');
define('DESCRIPTION', 'Managing State Information Using Cookies – Login Page');

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
            margin: 0 0 5% 0;
        }

        .content-container {
            display: grid;
            place-items: center;
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

        main form {
            background-color: #FAF6F0;
            padding: 20px;
            border: 1px solid black;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            width: 60%;
        }

        main label {
            display: block;
            margin-bottom: 5px;
            color: #181823;
        }

        main input[type="text"],
        main input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid gray;
            border-radius: 5px;
        }

        main input[type="submit"] {
            background-color: #181823;
            width: 20%;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        main input[type="submit"]:hover {
            background-color: #213555;
        }

        main p {
            color: #ff0000;
            margin-bottom: 10px;
        }

        main input[type="checkbox"] {
            margin-top: 10px;
            color: #181823;
        }

        main input[type="checkbox"]:checked {
            color: #fff;
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
        <li><a href="lab9.php">Handling User Input – User Registration</a></li>
        <li><a href="lab10.php">Handling User Input – Dynamic Page</a></li>
        <li><a href="lab11.php">Managing State Information Using Session – Login Page</a></li>
        <li><a href="lab12.php"><?php echo DESCRIPTION; ?></a></li>
        <p><p>
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
            <span><?php echo DESCRIPTION; ?></span>
            <br />
            <div class="content-container">
            <?php 
                echo '<form method="post">';
                if (isset($_POST['login']) > 0) // login button is clicked
                 process_form();
                elseif (isset($_POST['logout'])) // logout button is clicked
                 process_logout();
                elseif (isset($_SESSION['username'])) // check if user is logged in
                 generate_welcomepage();
                else
                 generate_loginform(); // display login form
                echo '</form>';       
            ?>
            </div>
        </main>

        <footer>
            <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
        </footer>
    </div>


</body>

</html>
