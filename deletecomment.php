<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Delete Comment</title>
</head>
<body>

<h2>Delete Comment</h2>

<?php

require_once("connect.php"); 
error_reporting(E_ERROR);

$comment_id = $_GET['comment'];
$note_id = $_GET['note'];
$sql = "DELETE FROM comments WHERE id = $comment_id";

if ($conn->query($sql) == TRUE) {
    echo "<br>Comment Deleted succesfully";
} else {
    echo "<br>Error" . $conn->error;
}

$conn->close();


?>

<p><a href="./index.php">Main Page</a></p>
<p><a href="./comments.php?note=<?php echo $note_id; ?>">Comment Page</a></p>

</body>
</html>