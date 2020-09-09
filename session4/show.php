<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Registeraion</title>
</head>

<body>
    <?php

    require_once 'header.php';

    ?>
    <div class="container-fluid">

        <!-- <h2>successfully Submitted</h2> -->

        <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'db1';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

        mysqli_select_db($conn, $dbname);

        //insert table
        $sql = "INSERT INTO students(st_name,st_email, st_gender, st_term) 
        VALUES ( '{$_POST['st_name']}', '{$_POST['st_email']}', '{$_POST['st_gender']}', '{$_POST['st_term']}' )";

        $retval = mysqli_query($conn, $sql);

        if (!$retval) {
            die('Could not insert to table: ' . mysqli_error($conn));
        }

        ?>
        <h2>Name: <?= $_POST['st_name']; ?></h2>
        <h2>Email: <?= $_POST['st_email']; ?></h2>
        <h2>Gender: <?= $_POST['st_gender']; ?></h2>
        <h2>Terms: <?= $_POST['st_term']; ?></h2>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>