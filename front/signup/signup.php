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
  <link rel="stylesheet" href="../css/login_2.css">
  <script defer src="../js/main.js"></script>
</head>

<body>
  <section class="login-form">
    <h1><a href="../index.php" class="logo">디쿠방</a></h1>
    <form action="../../api/router/auth/signup.php" method="POST" class="right">
      <div class="int-area">
        <input type="text" name="id" id="id" autocomplete="off" required>
        <label for="id">아이디</label>
      </div>
      <div class="int-area">
        <input type="password" name="pw" id="pw" autocomplete="off" required>
        <label for="id">비밀번호</label>
      </div>
      <div class="int-area">
        <input type="text" name="name" id="name" autocomplete="off" required>
        <label for="id">이름</label>
      </div>
      <div class="int-area">
        <input type="email" name="email" id="email" autocomplete="off" required>
        <label for="id">이메일</label>
      </div>
      <!-- BIRTH -->
      <div id="contnet">
        <h3><label for="yy">생년월일</label></h3>
        <div id="bir_wrap">
          <!-- BIRTH_YY -->
          <div id="bir_yy">
            <span class="box">
              <input type="text" name="year" id="year" class="int" maxlength="4" placeholder="년(4자)">
            </span>
          </div>
          <!-- BIRTH_MM -->
          <div id="bir_mm">
            <span class="box">
              <input type="text" name="month" id="month" class="int" maxlength="2" placeholder="월(2자)">
            </span>
          </div>
          <!-- BIRTH_DD -->
          <div id="bir_dd">
            <span class="box" id="box_dd">
              <input type="text" name="day" id="day" class="int" maxlength="2" placeholder="일(2자)">
            </span>
          </div>
        </div>
        <span class="error_next_box"></span>
      </div>
      <h3>성별</h3>
      <span class="gender_select">
        <select id="signup-gender" class="selectbox" name="gender" id="gender">
          <option value="man">남자</option>
          <option value="woman">여자</option>
        </select>
      </span>
      <div class="int-area">
        <input type="text" name="tel" id="tel" autocomplete="off" required>
        <label for="id">전화번호</label>
      </div>
      <div class="btn-area left">
        <button id="btn" type="submit">회원가입</button>
      </div>
    </form>
  </section>

</body>

</html>