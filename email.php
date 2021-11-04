<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Send email</title>
</head>
<body>
<h2>Send Mail</h2>
	<form action="email.php" method="post" target="_blank" name="doc1">
	  <input type="text" placeholder="Name" name="name1" required>
	  <br>
	  <br>
	  <input type="email" placeholder="Your email" name="email1" required="required">
	  <br>
	  <br>
	  <textarea placeholder="Text" name="text" required="required"></textarea>
	  <br>
	  <br>
	  <input type="submit" value="Send" name="sab">
	</form>
	<p><a href="./index.php">Main Page</a></p>
</body>
</html>

<?php

error_reporting(E_ERROR);

if (isset($_POST['name1'])) { $name = $_POST['name1']; if ($name == '') { unset($name); } }
if (isset($_POST['email1'])) { $email = $_POST['email1']; if ($email == '') { unset($email); } }
if (isset($_POST['text'])) { $text = $_POST['text']; if ($text == '') { unset($text); } }
if (isset($_POST['sab'])) { $sab = $_POST['sab']; if ($sab == '') { unset($sab); } }

$address='vanoleoriginale@gmail.com';
$subjext = 'Test mail';

$note_text = $text;

if (isset($name) && isset($sab)) {
	mail($address, $subjext, $note_text);
}

?>