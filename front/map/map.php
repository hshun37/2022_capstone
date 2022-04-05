<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디쿠방</title>
  <link rel="stylesheet" rel="icon" href="/favicon.ico">
  <link rel="stylesheet" href="../../front/css/btn.css?gg">
  <link rel="stylesheet" href="../../front/css/main.css?aa">
  <link rel="stylesheet" href="../../front/css/map.css?dgdfgfdgdfg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script defer src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
  <script defer src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <!-- <script defer src="../../front/js/map.js?hhh"></script> -->
</head>

<body>

  <?php include "../../front/header/header.php" ?>

  <section>
    <div class="map_container">

      <div class="map_kakao">
        <!-- kakao Map 매물 데이터 메뉴 -->
        <div class="map_menu">
          <div class="map_side">
            <span class="map_side_menu">방 찾기</span>
            <span class="map_side_menu">찜한 매물</span>
            <span class="map_side_menu">감성 데이터</span>
          </div>

          <div class="map_setting">
            <span class="material-icons">settings 설정</span>
          </div>
        </div>


        <!-- kakao Map API -->
        <div class="kakao_api">
          <div class="kakao">
            <div class="kakaoMap_size" id="map"></div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=605db5303d35869f7dea1bc7ebc32ea0"></script>
            <script src="../../front/js/kakao.js"></script>
          </div>
        </div>
      </div>

      <!-- 매물 데이터 -->
      <div class="building">
        <div class="map_side_02">
          <span class="map_side_menu_02">전체</span>
          <span class="map_side_menu_02">원룸</span>
          <span class="map_side_menu_02">투룸</span>
        </div>

        <div class="loop-bilding" style="overflow-y:auto; overflow-x:hidden; width:100%; height:810px;">
          <ul>
            <?php include "../../api/router/house/houseList.php" ?>
          </ul>
        </div>

      </div>

    </div>
  </section>

</body>

</html>