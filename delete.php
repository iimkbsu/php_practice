<?php
unlink('fishData/'.$_GET['list']);
unlink('fishData/'.$_POST['list']);
header('Location: /index3.php');
?>