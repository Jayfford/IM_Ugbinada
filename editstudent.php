<?php

$sid = $_POST['sid'];
$fname = $_POST['ftname'];
$lname = $_POST['lname'];
$crs = $_POST['course'];
$yr = $_POST['year'];

    $connection = mysqli_connect("localhost","root","","sisdb_ugbinada");
           
            $sql = "UPDATE student SET firstname='$fname',lastname='$lname',course='$crs',year_level=$yr WHERE sid=$sid";                   
            $connection->query($sql);           
            $connection->close();
            
            //header("location:index.php");