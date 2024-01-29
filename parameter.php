<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   안녕하세요. <?php echo $_GET['add']; ?>에 사는 <?php echo $_GET['name']; ?> 님<br><br>

   url 파라미터 @@.php?파라미터변수명=값&파라미터변수명=값 <br><br>
   
   &lt;?php $_GET['파라미터변수명']   ?&gt; <br><br>

   $_GET['변수']을 이용하여 url로 들어온 파라미터의 값을 php 내에서 사용 가능

</body>
</html>