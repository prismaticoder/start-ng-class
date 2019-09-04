<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>START NG TEST CLASS</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for='name'>Enter Your Name</label>
        <input id='name' name='username' type='text' required>
        <br><br>
        <label for='year'>Enter Your Year of Birth</label>
        <input id='year' name='birthyear' type='number' min = "1950" max="2018" required>
        <br><br>
        <input type='submit' name='submit' value='Check My Age!'>
    </form>
</body>
</html>

<?php

// echo "Hello Africa";

if (isset($_POST['submit'])) {
    //Get username from input
    $name = $_POST['username'];

    //Get birthyear from input
    $year = $_POST['birthyear'];

    //Current Year
    $currentyear = 2019;

    //Get the age by deducting the user's birth year from the current year
    $age = $currentyear - $year;

    //Format our result in a nice and clean way
    echo "<pre>Welcome " .$name. ", you are " .$age. " years old :)</pre>";
}

?>