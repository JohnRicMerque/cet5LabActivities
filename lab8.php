<?php
define('NAME', 'John Ric Merque');
define('STUDENT_NUMBER', '2021-08128-MN-0');
define('ADDRESS', 'Sampaloc, Manila');
define('EMAIL_ADDRESS', 'johnricmer@gmail.com');
define('CONTACT_NUMBER', '09986545461');
define('WEBADDRESS', '+1 (123) 456-7890');
define('LABTITLE', 'Laboratory Activity No. 8');
define('DESCRIPTION', 'Array Manipulations – Word Counter');

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
            word-wrap: break-word;
            width: auto;
            padding: 1% 0 1% 0
        }

        tr:nth-child(even) {
            background-color: #FAF6F0;
            color: #000000; 
        }

        .process{
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

        textarea {
            width: 100%;
            height: 200px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 0.8rem;
            font-family: 'Poppins', sans-serif;
            resize: vertical;
            transition: border-color 0.3s ease-in-out; 
            margin: 2% auto;
        }

        form {
            text-align: center; 
        }

        textarea:focus {
        border-color: #181823;
        }

        table {
            width: 100%;
        }

        form {
            align-items: center;
        }

        .word-count-container {
            display: grid;
            place-items: center;
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
        <li><a href="lab8.php"><?php echo DESCRIPTION; ?></a></li>
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
            <script>
                function resetForm() {
                    document.getElementById('text').value = '';
                    table = document.getElementById('table')
                    if (table) {
                        table.innerHTML = '';
                    }
                }

                function processForm() {
                    // Add any additional processing logic here if needed
                    return true; // Return true to allow form submission
                }
            </script>
            <h2><?php echo LABTITLE; ?></h2>
            <p><?php echo DESCRIPTION; ?></p>
            <br />
            <div class='word-count-container'>

            <?php
            $text = (isset($_POST['text'])) ? $_POST['text'] : '';
            
            echo '<form method="post" onsubmit="return processForm();">';
            echo 'Enter text:<br />';
            echo '<textarea id="text" name="text" placeholder="Enter your text here..." style="width:500px">';
            echo $text;
            echo '</textarea><br />';
            echo '<input class="process" type="submit" value="Process">&nbsp;';
            echo '<input class="reset" type="button" value="Reset" onclick="resetForm()">&nbsp;';
            echo '</form>';
            $text = preg_replace('/[^a-zA-Z0-9 ]/','',trim($text));
            $colors[] = '#00CCFF';
            // No 1. Add at least 10 color values to array $colors
            $colors[] = '#FFEFE8';
            $colors[] = '#B6BBC4';
            $colors[] = '#F5CCA0';
            $colors[] = '#9AD0C2';
            $colors[] = '#F2FFE9';
            $colors[] = '#00FA9A';
            $colors[] = '#B2C8BA';
            $colors[] = '#D2E3C8';
            $colors[] = '#D2E3C8';

            
            if ($text <> '') {
                // No. 2. Convert the $text to lowercase and assign to $text
                $text = strtolower($text); 
                // No. 3. Explode $text into an array and assign to $allwords
                $allwords = explode(' ', $text); 
                // No. 4. Remove duplicate items and assign to $uniquewordlist
                $uniquewordlist = array_unique($allwords); 
                // No. 5. sort the array $uniquewordlist
                sort($uniquewordlist); 
                // No. 6. Check if the first element of $uniquewordlist is equal to space
                if (reset($uniquewordlist) == '') { 
                    // No. 7. Remove the first element from $uniquewordlist
                    $deleteditem = array_shift($uniquewordlist);
                }
                foreach ($uniquewordlist as $word) 
                    $counter[$word] = 0;
                $totalwords = 0;
                foreach ($allwords as $word) {
                    if ($word != '') {
                        $counter[$word]++;
                        $totalwords++;
                    }
                }
                
                echo '<table id="table" border=1 style="width:500px">';
                echo '<tr><td colspan=4 align=center>Array Manipulation - Word Counter</td></tr>';
                echo '<tr><td>No.</td><td>Word</td><td>Frequency</td><td>Percent</td></tr>';
                $i=1;
                foreach ($uniquewordlist as $word) {
                    // No. 8. Get the current element of array $colors (IAP function)
                    $color = array_shift($colors);
                    $length = number_format($counter[$word] / $totalwords * 100.00, 2);
                    echo '<tr>';
                    echo '<td>', $i, '.</td>';
                    echo '<td>', $word, '</td>';
                    echo '<td>', $counter[$word], '</td>';
                    echo '<td style="background:', $color, '">', $length, '%</td>';
                    echo '</tr>';
                    // No. 9. Move the internal array pointer of $colors to the next element
                    array_push($colors, $color);
                    if (current($colors) == false) {
                        // No. 10. Reset the internal array pointer of $colors
                        reset($colors);
                    }
                    $i++;
                }
                echo '</table>';
            }
            ?>
        </div>
        </main>

        <footer>
            <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
        </footer>
    </div>


</body>

</html>
