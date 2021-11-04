<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>New Comment</title>
</head>
<body>

<?php

    require_once("connect.php"); 

    $note_id = $_GET['note'];

?>

<h2>New Comment</h2>
	<form action="./newcomment.php" method="post" target="_blank" name="newnote">
	  <textarea placeholder="Type" name="comment" rows="10" cols="40" required="required"></textarea>
	  <br>
	  <br>
      <input type="hidden" name ="created" id ="created" value ="<?php echo date("Y-m-d");?>"/>
      <input type="hidden" name = "note" id = "note" value="<?php echo $note_id; ?>" /> 
	  <input type="submit" value="Comment" name="sub">
	</form>

    <?php

        error_reporting(E_ERROR);
        
        $comment = $_POST['comment']; 
        $created = $_POST['created']; 
        $art_id = $_POST['note'];

        $query = "INSERT INTO comments (created, author, comment, art_id) VALUES ('$created', 'Author', '$comment', '$art_id')";

        if ($conn->query($query) == TRUE) {
            echo "<br>Comment Added succesfully";
        } else {
            echo "<br>Error" . $conn->error;
        }

        $conn->close();

    ?>

    <p><a href="./index.php">Main Page</a></p>
    <p><a href="./comments.php?note=<?php echo $art_id; ?>">Comment Page</a></p>

</body>
</html>
