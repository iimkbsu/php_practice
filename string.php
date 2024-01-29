<?php
   print 'Hello world<br>';
   print('Hello world<br>');
   echo 'Hello world<br>';
   echo ('Hello world<br>');

   echo "Hello 'world'<br>";
   echo 'Hello "world"<br>';

   echo "Hello \"world\"<br>";
?>
<hr>

<?php
echo "Hello" . " world<br>";
echo "Hello" , " world<br>";
echo "abcd"."efgh<br>";
?>
<hr>

<?php
$str = 'abcdefghijk';
echo $str." 의 길이 : ".strlen($str);

?>