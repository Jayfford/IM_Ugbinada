<?php
    $fn = $_GET['System unit parts'];
    $ln = $_GET['Monitor'];
    $crs = $_GET['Accessories'];
    $yr = $_GET['Quantity'];
       
    echo $fn." ".$ln." Quantity:".$crs." ".$yr;
    
    $connection = mysqli_connect("localhost","root","","sisdb_ugbinada");
           
            $sql = "INSERT INTO student VALUES(0,'$fn','$ln','$crs',$yr)";
                   
            $connection->query($sql);
            
            $connection->close();
    
            
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */