<!DOCTYPE html>
<html lang="ko">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>글생성, 글 삭제 기능 구현</title>

   <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
   integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
   crossorigin="anonymous"></script>

</head>

<body>
   <h1><a href="index3.php">시마노 릴</a></h1>
   <ol>
      <?php

      $list = scandir('./fishData');
      $i = 0;
      while ($i < count($list)) {
         if ($list[$i] != '.' && $list[$i] != '..') {
            echo "<li><a href='index3.php?list=$list[$i]'>$list[$i]</a></li>";
         }
         $i++;
      }
      ?>
   </ol>
   <hr>
   <div>
      <?php
      if (isset($_GET['list'])) {
         echo "<h3>$_GET[list]</h3>";
         $content = file_get_contents('fishData/' . $_GET['list']);
         echo "<p>$content</p>";
      } else {
         echo '시마노 릴 정보 사이트에 오신 여러분 환영합니다.';
      }
      ?>
   </div>
   <br>
   <hr>

   <div>
      <?php
      if (isset($_GET['list'])) { ?>

      <a href="update.php?list=<?=$_GET['list']?>">수정</a>
      <a href="delete.php?list=<?=$_GET['list']?>">삭제</a>
      <form action="delete.php" method="post">
         <input type="hidden" name="list" value="<?=$_GET['list']?>">
         <input type="submit" value="글삭제">
      </form>
      <br><br>

      <?php } ?>
   </div>

   <button onclick="onDisplay()">새 글 입력</button>
   <button onclick="offDisplay()" id="closeBtn" style="display:none;">닫기</button>
   <div style="margin: 0 auto; width:160px; display:none;" class="col-md-5" id="noneDiv">
      <form action="create.php" method="get" style="width:150px">
         <fieldset>
            <legend>새글 입력</legend>
            <p><input type="text" placeholder="리스트 이름 입력" name="list" required></p>
            <p><textarea placeholder="내용 입력" rows="10px" cols="30px" name="content" required></textarea></p>
            <input type="submit"> <input type="reset"><br><br>
         </fieldset>
      </form>
      <br>
   </div>

   <script language="javascript">
      function onDisplay() {
         $('#noneDiv').show();
         $('#closeBtn').show();
      }

      function offDisplay() {
         $('#noneDiv').hide();
         $('#closeBtn').hide();
      }
   </script>
</body>

</html>

<!-- 

list 항목은 index3.php 경로의 fishData폴더 하위 문서의 이름으로 표기

List 항목을 누르면 문서의 내용(컨탠츠)를 표기

새글 입력은 List 이름과 문서 내용(컨탠츠)을 작성하여 submit

현재 내용 지우기는 현재 선택되어 있는 name값(리스트명)의 문서를 지우므로써 리스트항목과 컨탠츠를 지우도록 함

-->