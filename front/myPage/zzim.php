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
  <link rel="stylesheet" href="../css/zzim.css?ee">
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
          <a href="myPage.php" class="page-menu-color">내 정보</a>
        </div>
        <div class="size-1 inquiry">
          <a href="zzim.php" class="page-menu-color">즐겨찾기</a>
        </div>
      </div>
      <!-- 메인페이지 버튼 -->

        <!--즐겨찾기-->

        <div class="inquiry-detail">
          
          <div class="inquiry-info">

            <div class="board_list_wrap">
              <table class="board_list">
                <thead>
                  <tr>
                    <th>이름</th>
                    <th>가격</th>
                    <th>원/투룸</th>
                    <th>월/전세</th>
                    <th>삭제하기</th>
                  </tr>
                </thead>
                <tbody>
                  <?php include("../../api/router/user/zzimList.php") ?>
                </tobdy>
              </table>
              <div class="paging">
                <a href="#" class="bt">첫 페이지</a>
                <a href="#" class="bt">이전 페이지</a>
                <a href="#" class="num on">1</a>
                <a href="#" class="bt">다음 페이지</a>
                <a href="#" class="bt">마지막 페이지</a>
              </div>
              <div style="margin-left:44%; margin-right:44%; margin-top: 5px;">
               <a href="../../front/chart/chart.php" class="btn">그래프 보기</a>
              </div>
              <!-- <div class="inquiry-box">
              <ul class="inquiry-size">
                <li><span class="building-size-1">이름</span></li>
                <li><span class="building-size-1">가격</span></li>
                <li><span class="building-size-1">날짜</span></li>
                <li><span class="building-size-1">원/투룸</span></li>
                <li><span class="building-size-1">월/전세</span></li>
                <button class="button-delete">삭제</button>
              </ul>
            </div> -->

            </div>
          </div>
          
        </div>
        <!--즐겨찾기-->



      </div>
  </section>
  <!--내정보 끝-->

  <?php include "../../front/footer/footer.php" ?>

</body>

</html>