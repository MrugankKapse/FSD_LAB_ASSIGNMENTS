<?php
include 'db.php';

$roll = $_GET['roll'];

$sql = "DELETE FROM students WHERE roll_no='$roll'";

if ($conn->query($sql)) {
    echo "Deleted! <br><a href='view.php'>Back</a>";
} else {
    echo "Error!";
}
?>