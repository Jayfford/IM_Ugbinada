<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sid = $_POST['sid'];
    $fname = $_POST['System-unit-parts'];
    $lname = $_POST['Monitor'];
    $crs = $_POST['Accessories'];
    $yr = $_POST['Quantity'];

    $connection = mysqli_connect("localhost", "root", "", "sisdb_ugbinada");

    if ($connection === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "UPDATE student SET `System-unit-parts`=?, `Monitor`=?, `Accessories`=?, `Quantity`=? WHERE uid=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssii", $fname, $lname, $crs, $yr, $sid);

    if ($stmt->execute()) {
        echo "Record updated successfully.";
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
