<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <h1>FUNCTION</h1>
   <?php
   $str = 'Lorem ipsum dolor, sit amet consectetur 
      adipisicing elit. Assumenda iure incidunt itaque a 
      atque mollitia natus totam, nulla quibusdam officia. 
      Autem quas sapiente dolorem eligendi commodi facilis 
      earum quibusdam? Nisi?';

      echo $str."<br><br>";

      echo "문자열의 문자 수 : ".strlen($str)."<br><br>";

      echo nl2br($str);
   ?>
</body>

</html>