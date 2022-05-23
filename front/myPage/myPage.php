<?php
session_start();

if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $tel = $_SESSION['tel'];
} else {
  $id = "";
  $name = "";
  $email = "";
  $tel = "";
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디쿠방</title>
  <link rel="stylesheet" rel="icon" href="/favicon.ico">
  <link rel="stylesheet" href="../css/btn.css?bb">
  <link rel="stylesheet" href="../css/main.css?bb">
  <link rel="stylesheet" href="../css/myPage.css?ee">
  <link rel="stylesheet" href="../css/board.css?fff">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script defer src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
  <script defer src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script defer src="../js/myPage.js?ff"></script>
</head>

<body>

  <?php include "../../front/header/header.php" ?>


  <!--내정보 시작-->
  <section>
    <div class="my-page">

      <div class="box">
        <h3>MY Page</h3>
      </div>

      <!-- 메인페이지 버튼 -->
      <div class="page-menu">
        <div class="size-1 info">
          <a href="javascript:info_open();" class="page-menu-color">내 정보</a>
        </div>
        <div class="size-1 inquiry">
          <a href="zzim.php" class="page-menu-color">즐겨찾기</a>
        </div>
      </div>
      <!-- 메인페이지 버튼 -->


      <!-- 내 정보 -->
      <div class="page-menu-detail">
        <div class="info-detail">
          <div class="info-size">
            <div class="info-info">
              <div class="info-id info-interval">
                아&nbsp;&nbsp;&nbsp;이&nbsp;&nbsp;&nbsp;디&#58;&nbsp;&nbsp; <?php echo "$id" ?>
              </div>
              <div class="info-name info-interval">
                이&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;름&#58;&nbsp;&nbsp; <?php echo "$name" ?>
              </div>
              <div class="info-phone info-interval">
                전&nbsp;화&nbsp;번&nbsp;호&#58;&nbsp;&nbsp; <?php echo "$tel" ?>
              </div>
              <div class="info-email info-interval">
                이&nbsp;&nbsp;&nbsp;메&nbsp;&nbsp;&nbsp;일&#58;&nbsp;&nbsp; <?php echo "$email" ?>
              </div>
            </div>
          </div>
          <div style="display:inline; float:right; margin-top:120px; margin-right:10px;">
            <a href="javascript:correction_open();" class="btn">내정보 수정</a>
          </div>
        </div>
        <!-- 내 정보 -->

       <!-- 정보 수정 -->
        <div class="correction-detail">
          <div class="info-correction correction-size">
            <form action="../../api/router/user/userupdate.php" method="POST" class="correction-form">
              <div class="int-area">
                <input type="password" name="user_pass" placeholder="" id="user_pass" autocomplete="off" required>
                <label for="id">이전 비밀번호</label>
              </div>
              <div class="int-area">
                <input type="password" placeholder="" name="pw" id="pw" autocomplete="off" required>
                <label for="id">새 비밀번호</label>
              </div>
              <div class="int-area">
                <input type="text" placeholder="" name="name" id="name" autocomplete="off" required>
                <label for="id">이름</label>
              </div>
              <div class="int-area">
                <input type="email" placeholder="" name="email" id="email" autocomplete="off" required>
                <label for="id">이메일</label>
              </div>
              <div class="int-area">
                <input type="text" placeholder="" name="tel" id="tel" autocomplete="off" required>
                <label for="id">전화번호</label>
              </div>
              <div class="btn-area">
                <button id="btn" type="submit">수정</button>
              </div>
            </form>
          </div>
        </div>
        <!-- 정보 수정 -->

        <!--즐겨찾기-->

        <div class="inquiry-detail">
          
          <div class="inquiry-info">

          
          </div>
          <!--즐겨찾기-->


        </div>
      </div>
  </section>
  <!--내정보 끝-->

  <?php include "../../front/footer/footer.php" ?>

</body>

</html>