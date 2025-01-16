<?php
if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];

    $connection = mysqli_connect("localhost", "root", "", "sisdb_ugbinada");

    if ($connection === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "DELETE FROM student WHERE uid = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $sid);

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($connection);
    }

    $stmt->close();
    $connection->close();

    header("Location: index.php");
    exit();
} else {
    echo "ERROR: sid parameter not set.";
}
?>