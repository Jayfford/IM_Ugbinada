<?php

    $sid = $_GET['sid'];

    $connection = mysqli_connect("localhost","root","","sisdb_ugbinada");
           
            $sql = "DELETE FROM student WHERE sid=$sid";                   
            $connection->query($sql);          
            $connection->close();
            
            //header("location:index.php");