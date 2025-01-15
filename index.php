<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="addstudent.php">
            <input type="text" id="System unit parts" placeholder="System unit parts" name="System unit parts">
            <input type="text" id="Monitor" placeholder="Monitor" name="Monitor">
            <input type="text" id="Accessories" placeholder="Accessories" name="Accessories">
            <input type="text" id="Quantity" placeholder="Quantity" name="Quantity">
            <input type="submit" value="Add Order" name="add Order" />            
        </form>
                
        <table>
            <tr>
                <th>Uid</th>
                <th>System_unit_parts</th>
                <th>Monitor</th>
                <th>Accessories</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
       
        <?php
            $connection = mysqli_connect("localhost","root","","sisdb_ugbinada");
           
            $sql = "SELECT * FROM student";
                   
            $result = $connection->query($sql);
            
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['Uid']."</td>";
                echo "<td>".$row['System unit parts']."</td>";
                echo "<td>".$row['Monitor']."</td>";
                echo "<td>".$row['Accessories']."</td>";
                echo "<td>".$row['Quantity']."</td>";
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
