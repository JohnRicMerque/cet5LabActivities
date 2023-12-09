<?php
define('NAME', 'John Ric Merque');
define('STUDENT_NUMBER', '2021-08128-MN-0');
define('ADDRESS', 'Sampaloc, Manila');
define('EMAIL_ADDRESS', 'johnricmer@gmail.com');
define('CONTACT_NUMBER', '09986545461');
define('WEBADDRESS', '+1 (123) 456-7890');
define('LABTITLE', 'Laboratory Activity No. 7');
define('DESCRIPTION', 'Regular Expression');

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
            justify-content: center;
            align-items: right;
            font-size: 0.8rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 0.8rem
        }

        th, td {
            border: 1px solid #181823; 
            text-align: center;
        }

        th {
            background-color: #181823; 
            color: white;
        }

        td {
            word-wrap: break-word;
            width: auto;
            padding: 1% 0 1% 0
        }

        tr:nth-child(even) {
            background-color: #FAF6F0;
            color: #000000; 
        }

        .submit{
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

        input {
            text-align: center;
            box-sizing: border-box;
            border: 1px solid #ccc;
            background-color: #fff;
            color: #333;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #181823;
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
        <li><a href="lab7.php"><?php echo DESCRIPTION; ?></a></li>
        <li><a href="lab8.php">Array Manipulations – Word Counter</a></li>
        <li><a href="lab9.php">Handling User Input – User Registration</a></li>
        <li><a href="lab10.php">Handling User Input – Dynamic Page</a></li>
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
            
            // SUPPLY THE MISSING PATTERN
            // $patterns IS A TWO DIMENSIONAL ARRAY CONTAINING [description, regex]
            $patterns[] = array('String containing "PHP"', 'PHP');
            $patterns[] = array('Starting with "PHP"', '^PHP');
            $patterns[] = array('Ends with "PHP"', 'PHP$');
            $patterns[] = array('String equal to "PHP"', '^PHP$');
            $patterns[] = array('Word starting with letter "C"', '^C\w*');
            $patterns[] = array('Non-empty lowercase string', '^[a-z]+$');
            $patterns[] = array('Non-empty uppercase string', '^[A-Z]+$');
            $patterns[] = array('Minimum 10 letters Maximum 20 letters', '^.{10,20}$');
            $patterns[] = array('Minimum 10 digits Maximum 20 digits', '^\d{10,20}$');
            $patterns[] = array('Minimum 10 characters Maximum 20 characters', '^.{10,20}$');
            $patterns[] = array('Valid PHP variable name', '^[a-zA-Z_]\w*$');
            $patterns[] = array('Valid PHP constant name', '^[a-zA-Z_][a-zA-Z0-9_]*$');
            $patterns[] = array('Valid decimal (base-10) integer', '^\d+$');
            $patterns[] = array('Valid float number', '^\d*\.\d+$');
            $patterns[] = array('5-letter string', '^[a-zA-Z]{5}$');
            $patterns[] = array('5-digit string', '^\d{5}$');
            $patterns[] = array('5 ascii characters', '^[ -~]{5}$');
            $patterns[] = array('5 non-alphanumeric characters', '^[^a-zA-Z0-9]{5}$');
            $patterns[] = array('Passing Grade (1.00,1.25,1.50 to 3.00)', '^(1\.00|1\.25|1\.50|1\.75|2\.00|2\.25|2\.50|2\.75|3\.00)$');
            $patterns[] = array('Sub-domain Name (Ex. .edu or .ue.edu or .ccss.ue.edu)', '^[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*$');

            if (isset($_POST['reset'])) {
                for ($i = 1; $i <= count($patterns); $i++) {
                    $_POST["field$i"] = '';
                }
            }
            
            echo '<form method="post">';
            $i = 1;
            echo '<table border=1>';
            echo '<tr><td colspan=5 align=center>Regular Expression Test</td></tr>';
            echo '<tr><td>No.</td><td>Description</td><td>String</td><td>RegEx Pattern</td><td>Result</td>';
            
            foreach ($patterns as $pattern_item) {
                $description = $pattern_item[0];
                $pattern = $pattern_item[1];
                $value = isset($_POST["field$i"]) ? $_POST["field$i"] : '';
                if ($pattern == '') {
                    $result = 'Missing pattern';
                    $pattern = '&nbsp;';
                } else {
                    $pattern = '/' . $pattern . '/';
                    if (preg_match($pattern, $value)) {
                        $result = 'Valid';
                    } else {
                        $result = 'Invalid';
                    }
                }

            echo "<tr>";
            echo "<td>$i.</td><td>$description</td>";
            echo "<td><input type=text name=\"field$i\" value=\"$value\"></td>";
            echo "<td>$pattern</td>";
            echo "<td style=\"background-color: " . ($result == 'Valid' ? '#D5FFE4' : '#FCAEAE') . ";\">$result</td>";
            echo '<tr>';
            $i++;
        }

        echo '</table><br />';
        echo '<input class="submit" type="submit" name="validate" value="Validate Data">&nbsp';
        echo '<input class="reset" type="submit" name="reset" value="Reset">&nbsp';
        echo '</form>';
        ?>

        </main>

        <footer>
            <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
        </footer>
    </div>


</body>

</html>
