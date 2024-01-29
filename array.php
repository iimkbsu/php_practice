<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Array 배열</title>
</head>
<body>
   <h1>Array 배열</h1>
   <?php
   $arr = array('배열0', '배열1','배열2','배열3');
   array_push($arr,'배열4');//배열 마지막에 push


   for($i=0; $i < count($arr); $i++) {
      echo ''. $arr[$i] .'<br>';
   }   
   ?>
   <br>

   <?php
   $ii=0;
   while($ii < count($arr)) {
      echo $arr[$ii]."<br>";
      $ii++;
   }
   ?>
</body>
</html>