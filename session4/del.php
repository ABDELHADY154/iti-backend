<?php

require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE st_id='$id' ";

if (mysqli_query($link, $sql)) {
    header('location:index.php');
}
