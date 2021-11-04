<?php
$sql = "SELECT * FROM notes";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    echo '<br> id: '. $row['id'] . '<br> created: '. $row['created'] . 
    '<br> title: '. $row['title'] . '<br> article: '. $row['article'];
    echo '<br>';
    }
}

?>