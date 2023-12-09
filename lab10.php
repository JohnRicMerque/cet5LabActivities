<?php
define('NAME', 'John Ric Merque');
define('STUDENT_NUMBER', '2021-08128-MN-0');
define('ADDRESS', 'Sampaloc, Manila');
define('EMAIL_ADDRESS', 'johnricmer@gmail.com');
define('CONTACT_NUMBER', '09986545461');
define('WEBADDRESS', '+1 (123) 456-7890');
define('LABTITLE', 'Laboratory Activity No. 10');
define('DESCRIPTION', 'Handling User Input – Dynamic Page');

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
            padding: 1rem;
            width: 23%;
            list-style-type: none;
            height: 95%;
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
            margin: 0.5em 0 0;
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
            justify-content: center;
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

        .links-container{
            display:flex;
            padding: 0;
            justify-content: space-around;
            width: 100%;
            background-color: #191919;
        }

        .links{
            text-decoration: none;
            padding: 1rem;
            color: #fff;
        }

        .links:hover{
            color: #FAF6F0;
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
        <li><a href="lab10.php"><?php echo DESCRIPTION; ?></a></li>
        <li><a href="lab11.php">Managing State Information Using Session – Login Page</a></li>

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
                $links['lab10_home.php'] = 'Home';
                $links['lab10_vision.php'] = 'Vision';
                $links['lab10_mission.php'] = 'Mission';
                $links['lab10_history.php'] = 'History';
                echo '<table width=100% border=1>';
                // navigation section
                echo '<tr><td class="links-container">';
                foreach ($links as $key => $value)
                echo '&nbsp;<a class="links" href="?page=', $key, '"> ', $value, ' </a>&nbsp;';
                echo '</td></tr>';
                // dynamic content
                echo '<tr><td><br />';
                if ( isset($_GET['page']) ) {
                $page = $_GET['page'];
                if (is_readable($page))
                include_once($page);
                else
                echo 'File <strong>', $page, '</strong> not found!';
                }
                else {
                reset($links);
                include_once(key($links)); 
                }
                echo '<br /><br />';
                echo '</td></tr>';
                echo '</table>';
            ?>
        </main>

        <footer>
            <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
        </footer>
    </div>


</body>

</html>
