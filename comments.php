<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comments</title>
  </head>
 
  <body>
 
    <p>Note</p>

    <?php

      require_once("connect.php"); 


      $note_id = $_GET['note']; 

      $sql = "SELECT created, title, article FROM notes WHERE id = $note_id";
      $sql_comments = "SELECT * FROM comments WHERE art_id = $note_id"; 

      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { 
              echo '<br> created: '. $row['created'] . '<br> title: '. $row['title'] . 
              '<br> article: '. $row['article'];
              echo '<br>';
          }
      }
    ?>

    <br><a href="./editnote.php?note=<?php echo $note_id; ?>">Edit Note</a><br>
    <br><a href="./deletenote.php?note=<?php echo $note_id; ?>">Delete Note</a><br><br>
    <p>Comments:<br><br><a href="./newcomment.php?note=<?php echo $note_id; ?>">Add comment</a><br></p>

    <?php
      $result = $conn->query($sql_comments);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { 
              echo '<br> id: '. $row['id'] . '<br> created: '. $row['created'] . 
              '<br> author: '. $row['author'] . '<br> comment: '. $row['comment'] . '<br> art_id: '. $row['art_id']; ?>
              <a href="./deletecomment.php?comment=<?php echo $row['id']; ?>&note=<?php echo $note_id; ?>">Delete</a><br><br>
              <?php
          }
      } else { echo 'No comments for this note.';}

    ?>
    


  </body>

</html>