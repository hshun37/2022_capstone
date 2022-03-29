<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디쿠방</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <link rel="stylesheet" href="../css/login.css">
  <script defer src="../js/main.js"></script>
</head>
<body>
  
<section class="login-form">
  <h1><a href="../index.php">디쿠방</a></h1>
  <form action="../../api/router/auth/login.php" method="post">
    <div class="int-area">
      <input type="text" name="id" id="id" autocomplete="off" required>
      <label for="id">아이디</label>
    </div>
    <div class="int-area">
      <input type="password" name="password" id="password" autocomplete="off" required>
      <label for="id">비밀번호</label>
    </div>
    <div class="btn-area">
      <button id="btn" type="submit">LOGIN</button>
    </div>
  </form>
  <div class="caption">
    <a href="../signup/signup.php">회원가입 하시겠습니까?</a>
  </div>
  <div class="caption">
    <a href="javascript:void(0)">비밀번호를 잊으셨나요?</a>
  </div>
</section>

</body>
</html>