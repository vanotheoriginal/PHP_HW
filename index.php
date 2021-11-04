<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Main Pageа</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
 
  <body>
  
        <div class="topnav" id="myTopnav">
            <a href="#login" class="active">Login</a>
            <a href="./newnote.php">New Note</a>
            <a href="./email.php">Send Email</a>
            <a href="#photo">Photo</a>
            <a href="#files">Files</a>
            <a href="#admin">Administrators</a>
            <a href="#info">Info</a>
            <a href="./notes_comments_count.php">Statistics</a>
            <a href="#logout">Logout</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
 
    <p></p>

<?php

  require_once("connect.php"); 

  $sql = "SELECT * FROM notes ORDER BY id DESC";

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) { 
          echo '<br> id: '. $row['id'];
      ?>
      <a href="comments.php?note=<?php echo $row['id']; ?>"><?php echo $row['title'], "<br>";?></a> 

      <?php          
      echo '<br> id: '. $row['id'] . '<br> created: '. $row['created'] . 
      '<br> title: '. $row['title'] . '<br> article: '. $row['article'] . '<br>';
      }
  }

?>

    <script src="./scripts.js"></script>
  </body>
  
</html>