<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Function</title>
</head>

<body>
   <h1>Function</h1>
   <h2>basic function</h2>
   <?php
   function basic()
   {
      print("Lorem ipsum dolor1<br>");
      print("Lorem ipsum dolor2<br>");
   }
   basic();
   basic();
   ?>

   <hr>

   <?php
   basic();
   ?>


<hr>
<h2>fucntion parameter </h2>
   <?php
   function sum($x, $y){
      $s = $x + $y;
      echo $s;
   };
   ?>

   <?php
   sum(1, 2);
   ?>
</body>

</html>