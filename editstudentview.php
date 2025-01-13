<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<?php
    $sid=$_GET['sid'];
    
     $connection = mysqli_connect("localhost","root","","sisdb_ugbinada");        
     $sql = "SELECT * FROM student WHERE sid=$sid";
     $result = $connection->query($sql);
     $row = mysqli_fetch_assoc($result)
     
?>
        <form action="editstudent.php" method="POST">
            <input type="hidden" id="sid" name="sid" value="<?php echo $row['sid'];?>">
            <label for="firstname" >First name</label>
            <input type="text" id="fname" name="fname" placeholder="first name" value="<?php echo $row['firstname'];  ?>">
            <label for="lastname" >Last name</label>
            <input type="text" id="lname" name="lname" placeholder="last name" value="<?php echo $row['lastname'];  ?>">
            <label for="course" >Course</label>
            <input type="text" id="course" name="course" placeholder="course" value="<?php echo $row['course'];  ?>">
            <label for="year" >Year Level</label>
            <input type="text" id="year" name="year" placeholder="year level" value="<?php echo $row['year_level'];  ?>">           
            <input type="submit" value="Edit" onclick="return confirm('Edit details')">            
        </form>
    </body>
</html>