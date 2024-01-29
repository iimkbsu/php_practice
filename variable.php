<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Variable (변수)</title>
</head>

<body>
   <?php
   $a = 1;
   echo $a + 2;
   echo "<br>";
   ?>

   <?php
   $str = "Lorem, ipsum dolor sit amet stella consectetur adipisicing elit. Pariatur stella commodi nemo minima, 
   repellendus fugiat provident iusto, rem stella vero debitis expedita, 
   eveniet doloribus vol stella uptatum aperiam accus stella antium maxime verit stella atis quibusdam odio animi?";

   echo $str."<br><br>";

   $str2 = str_replace("stella", "<b>Exist</b>", $str);

   echo $str2."<br><br>";
   ?>

</body>

</html>