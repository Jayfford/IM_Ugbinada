<?php
    $fn = $_GET['fname'];
    $ln = $_GET['lname'];
    $crs = $_GET['course'];
    $yr = $_GET['year'];
       
    echo $fn." ".$ln." course:".$crs." ".$yr;
    
    $connection = mysqli_connect("localhost","root","","sisdb_ugbinada");
           
            $sql = "INSERT INTO student VALUES(0,'$fn','$ln','$crs',$yr)";
                   
            $connection->query($sql);
            
            $connection->close();
    
            
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */