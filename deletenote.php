<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Delete Note</title>
</head>

<body>

    <h2>Delete Note</h2>

    <?php

    require_once("connect.php");

    $note_id = $_GET['note'];
    $sql = "DELETE FROM notes WHERE id = $note_id";

    if ($conn->query($sql) == TRUE) {
        echo "<br>Note Deleted succesfully";
    } else {
        echo "<br>Error" . $conn->error;
    }

    $conn->close();


    ?>

    <p><a href="./index.php">Main Page</a></p>
    <p><a href="./comments.php?note=<?php echo $note_id; ?>">Comment Page</a></p>

</body>

</html>