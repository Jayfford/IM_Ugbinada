<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Change Order</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<?php
    if (isset($_GET['uid'])) 
        $uid = $_GET['uid'];
    
    $connection = mysqli_connect("localhost", "root", "", "sisdb_ugbinada");  
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM student WHERE uid=uid";
    $result = $connection->query($sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        die("No records found for uid: $uid");
    }
?>
        <form action="changeOrder.php" method="POST">
            <input type="hidden" id="uid" name="uid" value="<?php echo $row['uid'];?>">
            <label for="System unit parts">System unit parts</label>
            <input type="text" id="System_unit_parts" name="System_unit_parts" placeholder="System_unit_parts" value="<?php echo $row['System_unit_parts']; ?>">
            <label for="Accessories">Accessories</label>
            <input type="text" id="Accessories" name="Accessories" placeholder="Accessories name" value="<?php echo $row['Accessories']; ?>">
            <label for="Monitor">Monitor</label>
            <input type="text" id="Monitor" name="Monitor" placeholder="Monitor" value="<?php echo $row['Monitor']; ?>">
            <label for="Quantity">Quantity</label>
            <input type="text" id="Quantity" name="Quantity" placeholder="Quantity" value="<?php echo $row['Quantity']; ?>">           
            <input type="submit" value="Edit" onclick="return confirm('Edit details')">            
        </form>
    </body>
</html>