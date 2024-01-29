<!DOCTYPE html>
<html lang="ko">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Conditional</title>
</head>

<body>
   <h1>Conditional (조건문)</h1>
   <h2>if문</h2>

   <?php
   for ($i = 1; $i <= 3; $i++) {
      echo $i . '<br>';
   }
   ?>

   <?php
   if (true) {
      echo 'true라서 출력<br>';
   }

   if (false) {
      echo 'false라 출력되지 않음';
   }

   $i = 2;
   if ($i == 1) {
      echo 1;
   } else {
      echo 2;
   }
   ?>
   <br><br>

   PHP와 JavaScript의 차이점
   <br><br>
   1. PHP는 서버측 스크립팅 언어인 반면, Javascript는 클라이언트측 스크립팅 언어입니다.<br>
   2. PHP는 브라우저 내에서 실행되지 않지만 Javascript는 브라우저 내에서 실행됩니다.<br>
   3. PHP는 데이터베이스를 지원하지만 Javascript는 데이터베이스를 지원하지 않습니다.<br>
   4. PHP는 대문자와 소문자 변수를 모두 허용하지만 Javascript는 그렇지 않습니다.<br>
   5. PHP와 JavaScript를 비교할 때 PHP는 개체 및 배열 상호 교환을 지원하지 않는 반면 JavaScript는 개체 및 배열 상호 교환을 지원합니다.<br>
</body>

</html>