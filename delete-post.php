<?php
$filename = $_POST['filename'];
echo '<p>' . $filename .'</p>';
unlink('post/' . $filename);
echo '<p>' . $filename . 'has been deleted</p>';
header('location: index.php');
?>