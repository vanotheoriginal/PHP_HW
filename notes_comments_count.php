<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Statistics</title>
</head>

<body>

    <p>Notes & Comments</p>


    <?php

    require_once("./connect.php");

    $sql = "SELECT COUNT(id) AS notes_count FROM notes";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<br> Notes Count: ' . $row['notes_count'];
        }
    } else {
        echo "<br>Error" . $conn->error;
    }

    $sql = "SELECT COUNT(id) AS comments_count FROM comments";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<br> Comments Count: ' . $row['comments_count'];
        }
    } else {
        echo "<br>Error" . $conn->error;
    }

    $conn->close();

    ?>

    <p><a href="./index.php">Main Page</a></p>


</body>

</html>