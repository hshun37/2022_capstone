<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디쿠방</title>
  <link rel="stylesheet" rel="icon" href="/favicon.ico">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/btn.css?aa">
  <link rel="stylesheet" href="./css/main_kakaoApi.css?aa">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<?php include "../front/header/header.php" ?>


<section>

  <!--메인 화면 시작-->
  <div class="main_box">

    <!--우측 화면 시작-->
    <div class="main_right">
      <!--검색창 시작-->
      <div class="section_01">
        <div class="right-side">
          <div class="search">
            <input type="text" placeholder="원하는 매물을 검색하세요!">
            <img src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/icon/search.png">
          </div>
        </div>
      </div>
      <!--검색창 끝-->

      <!--카카오 API 시작-->
      <div class="section_02">
        <!--카카오맵 시작-->
        <div class="left-side">
          <div class="kakao">
            <div id="map"></div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=605db5303d35869f7dea1bc7ebc32ea0"></script>
            <script src="./js/kakao.js"></script>
          </div>
        </div>
        <!--카카오맵 끝-->
      </div>
      <!--카카오 API 끝-->
    </div>
    <!--우측 화면 끝-->


    <!--좌측 화면 시작-->
    <!-- <div class="main_left">
      <div class="main_announcement">

      </div>

      <div class="main_board">

      </div>
    </div> -->
    <!--좌측 화면 끝-->



  </div>
  <!--메인 화면 끝-->

</section>


<?php include "../front/footer/footer.php" ?>

</body>

</html>