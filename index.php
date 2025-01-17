<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PC Builder</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="addorder.php" method="post">
            <input type="text" id="System_unit_parts" placeholder="System unit parts" name="System unit parts" required>
            <input type="text" id="Monitor" placeholder="Monitor" name="Monitor" required>
            <input type="text" id="Accessories" placeholder="Accessories" name="Accessories" required>
            <input type="number" id="Quantity" placeholder="Quantity" name="Quantity" required>
            <input type="submit" value="Add Order" name="addOrder" />            
        </form>
    
        <table>
            <tr>
                <th>Oid</th>
                <th>System unit parts</th>
                <th>Monitor</th>
                <th>Accessories</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
       
        <?php
            $connection = mysqli_connect("localhost","root","","sisdb_ugbinada");
           
            if ($connection === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM student";
            $result = $connection->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['uid']."</td>";
                    echo "<td>".$row['System_unit_parts']."</td>";
                    echo "<td>".$row['Monitor']."</td>";
                    echo "<td>".$row['Accessories']."</td>";
                    echo "<td>".$row['Quantity']."</td>";
                    echo "<td><a href='deleteOrder.php?sid=".$row['uid']."'>Delete</a></td>";
                    echo "<td><a href='changeOrder.php?sid=".$row['uid']."'>Change</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No records found</td></tr>";
            }

            $connection->close();
        ?>
        </table>
    </body>
</html>