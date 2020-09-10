<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: signin.php");
    exit;
}

require_once 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Welcome | <?php echo htmlspecialchars($_SESSION["username"]); ?></title>

</head>

<body>
    <div class="page-header text-center">
        <h1>Welcome to our site.</h1>
        <a href="logout.php" class="btn btn-danger">Sign Out</a><br><br>
    </div>

    <div class="container">
        <?php
        $sql = 'SELECT st_id, st_name, st_email,st_gender FROM students';
        mysqli_select_db($link, DB_NAME);
        $result = mysqli_query($link, $sql);

        if (!$result) {
            die('Could not get data: ' . mysqli_error($link));
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $key => $value) : ?>
                    <tr>
                        <th scope="row"><?= $value['st_id']; ?></th>
                        <td><?= $value['st_name']; ?></td>
                        <td><?= $value['st_email']; ?></td>
                        <td><?= $value['st_gender']; ?></td>
                        <td><a href="del.php?id=<?= $value['st_id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php
                endforeach;
                ?>

            </tbody>
        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>