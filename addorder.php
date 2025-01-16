<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fn = $_POST['System_unit_parts'];
    $ln = $_POST['Monitor'];
    $crs = $_POST['Accessories'];
    $yr = $_POST['Quantity'];
       
    echo $fn." ".$ln." Quantity:".$crs." ".$yr;
    
    $connection = mysqli_connect("localhost","root","","sisdb_ugbinada");

    if ($connection === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
           
    $sql = "INSERT INTO student (`System_unit_parts`, `Monitor`, `Accessories`, `Quantity`) VALUES (?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssi", $fn, $ln, $crs, $yr);

    if ($stmt->execute()) {
        echo "Record added successfully.";
    } else {
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($connection);
    }

    $stmt->close();
    $connection->close();

    header("Location: index.php");
    exit();
} else {
    echo "ERROR: Invalid request method.";
}
?>