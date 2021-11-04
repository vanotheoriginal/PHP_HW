<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>New Note</title>
</head>
<body>
<h2>New Note</h2>
	<form action="./newnote.php" method="post" target="_blank" name="newnote">
	  <input type="title" placeholder="Title" name="title" size="40" required="required">
	  <br>
	  <br>
	  <textarea placeholder="Text Area" name="article" rows="10" cols="40" required="required"></textarea>
	  <br>
	  <br>
      <input type="hidden" name ="created" id ="created" value ="<?php echo date("Y-m-d");?>"/>
	  <input type="submit" value="Add Note" name="sub">
	</form>
	<p><a href="./index.php">Main Page</a></p>
</body>
</html>

<?php

error_reporting(E_ERROR);

if (isset($_POST['title'])) { $title = $_POST['title']; if ($title == '') { unset($title); } }
if (isset($_POST['article'])) { $article = $_POST['article']; if ($article == '') { unset($article); } }
if (isset($_POST['created'])) { $created = $_POST['created']; }
if (isset($_POST['sub'])) { $sub = $_POST['sub']; if ($sub == '') { unset($sub); } }

require_once("connect.php");
$query = "INSERT INTO notes (created, title, article) VALUES ('$created', '$title', '$article')"; 

if ($conn->query($query) == TRUE) {
    echo "<br>Note Added succesfully";
} else {
    echo "<br>Error" . $conn->error;
}

$conn->close();

?>