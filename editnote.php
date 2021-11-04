<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Note</title>
</head>
<body>

<?php

require_once("connect.php"); 

    $note_id = $_GET['note'];
    $sql = "SELECT created, title, article FROM notes WHERE id = $note_id";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $created = $row['created'];
                $article = $row['article'];
            }
        }
?>

<h2>Edit Note</h2>
	<form action="./editnote.php" method="post" target="_blank" name="newnote">

	  <input type="title" placeholder="Title" name="title" value="<?php echo $title; ?>" size="40" required="required"><br>
      <br>
	  <textarea placeholder="Text Area" name="article" rows="10" cols="40" required="required"><?php echo $article; ?></textarea><br>
      <br>
      <input type="hidden" name ="created" id ="created" value ="<?php echo $created; ?>"/>
	  <input type="submit" name="submit" id="submit" value="Edit">
      <input type="hidden" name = "note" id = "note" value="<?php echo $note_id; ?>" /> 
	</form>
	<p><a href="./index.php">Main Page</a></p>
    <p><a href="./comments.php?note=<?php echo $note_id; ?>">Comment Page</a></p>
</body>
</html>

<?php   

    $title = $_POST['title']; $article = $_POST['article'];
    $created = $_POST['created']; $note_id = $_POST['note']; 

    $sql = "UPDATE notes SET title='$title', article='$article', created='$created' WHERE id=$note_id";

    if ($conn->query($sql) == TRUE) {
        echo "<br>Note Edited succesfully";
    } else {
        echo "<br>Error" . $conn->error;
    }

    $conn->close();

?>