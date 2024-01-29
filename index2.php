<!DOCTYPE html>
<html lang="ko">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>function_example</title>
</head>

<body>
   <?php
   ini_set("display_errors", '0');


   function print_list($ll)
   {
      $list = scandir($ll);
      $i = 0;
      while ($i < count($list)) {
         if ($list[$i] != '.' && $list[$i] != '..') {
            echo "<li><a href='index2.php?id=$list[$i]'>$list[$i]</a></li>";
         }
         $i++;
      }
   }


   function print_content($dir)
   {
      $id = $_GET['id'];
      if ($id == null) {
         echo 'web contents';
      } else {
         echo file_get_contents($dir . $id);
      }
   }

   function print_title($id)
   {
      echo $id;
   }
   ?>
   <h1>
      <a href='index2.php'>WEB</a>
   </h1>
   <hr>
   <ol>
      <?php
      print_list('./data'); //리스트를 li로 작성하는 php 함수 (파라미터는 리스트로 나타내고싶은 파일이 있는 폴더경로)
      ?>
   </ol>
   <hr>
   <h2>
      <?php

      print_title($_GET['id']); //url 파라미터를 함수 파라미터로 받아서 타이틀 출력하는 함수 (파라미터=id)
      ?>
   </h2>
   <br>
   <div>
      <?php
      print_content('data/'); //컨텐츠 출력 (파라미터는 출력하고 싶은 컨텐츠가 있는 폴더경로)
      ?>
   </div>
   <hr>
   <hr>

   <a href='write.php'>write</a>
   <a href="modify.php?id=<?=$_GET['id']?>">modify</a>
   <br>
   <form action="process_delete.php" method="post">
      <input type='hidden' name='id' value="<?=$_GET['id']?>"><br><br>
      <input type='submit' value='삭제'><br><br>

   </form>
</body>

</html>