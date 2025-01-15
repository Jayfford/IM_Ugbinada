<?php
    $fn = $_POST['System-unit-parts'];
    $ln = $_POST['Monitor'];
    $crs = $_POST['Accessories'];
    $yr = $_POST['Quantity'];
       
    echo $fn." ".$ln." Quantity:".$crs." ".$yr;
    
    $connection = mysqli_connect("localhost","root","","sisdb_ugbinada");
           
            $sql = "INSERT INTO student VALUES(0,'$fn','$ln','$crs',$yr)";
                   
            $connection->query($sql);
            
            $connection->close();
    
            
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */