<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="addstudent.php">
            <input type="text" id="fname" placeholder="first name" name="fname">
            <input type="text" id="lname" placeholder="last name" name="lname">
            <input type="text" id="course" placeholder="course" name="course">
            <input type="text" id="year" placeholder="year level" name="year">
            <input type="submit" value="Add" name="addstudent" />            
        </form>
                
        <table>
            <tr>
                <th>number</th>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>COURSE</th>
                <th>YEAR LEVEL</th>
                <th>Action</th>
            </tr>
       
        <?php
            $connection = mysqli_connect("localhost","root","","sisdb_ugbinada");
           
            $sql = "SELECT * FROM student";
                   
            $result = $connection->query($sql);
            
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['sid']."</td>";
                echo "<td>".$row['lastname']."</td>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['course']."</td>";
                echo "<td>".$row['year_level']."</td>";
                echo "<td>"
                . "<a class=\"btn\" href=\"editstudentview.php?sid=".$row['sid']." \">Edit</a>"
                . "<a class=\"btn\" href=\"deletestudent.php?sid=".$row['sid']." \" onclick=\"return confirm('Delete student?')\">Delete</a>"
                . "</td>";
                echo "</tr>";
            }
            $connection->close();
        ?>
        </table>
    </body>
</html>
