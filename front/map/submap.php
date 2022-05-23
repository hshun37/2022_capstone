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
  <link rel="stylesheet" href="../../front/css/map.css?eeeeee">
  <link rel="stylesheet" href="../../front/css/switch.css?fdsfsdf">
  <link rel="stylesheet" href="../../front/css/menuBar.css">
  <link rel="stylesheet" href="../../front/css/mapSub.css">
  <link rel="stylesheet" href="../../front/css/submap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script defer src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
  <script defer src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script defer src="../../front/js/map.js?fdsfdsfsdf"></script>

  <!-- <script defer src="../../front/js/map.js?hhh"></script> -->
</head>

<body>

  <?php include "../../front/header/header.php" ?>

  <section>
    <div class="map_container">

      <div class="map_kakao">
        <!-- kakao Map 매물 검색 메뉴 -->
        <div class="map_search">
          <div class="search">
            <form method="get" action="../../api/router/house/searchRoomList.php">
              <input name="item" type="text" placeholder="검색어 입력" />
              <img src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/icon/search.png" style="cursor: pointer"></a>
            </form>
          </div>
          <span class="setting">
            <div>
              <ul class="menuBar">
                <li>
                  <a href="#">방종류</a>
                  <ul class="submenu">
                    <li><label><input type="checkbox" name="" value="" checked>원룸</label></li>
                    <li><label><input type="checkbox" name="" value="" checked>투룸</label></li>
                    <li><label><input type="checkbox" name="" value="" checked>APT</label></li>
                  </ul>
                </li>
                <li>
                  <a href="#">거래유형</a>
                  <ul class="submenu">
                    <li><label><input type="checkbox" name="" value="" checked>월세</label></li>
                    <li><label><input type="checkbox" name="" value="" checked>전세</label></li>
                    <li><label><input type="checkbox" name="" value="" checked>반전세</label></li>
                  </ul>
                </li>
              </ul>
            </div>
          </span>
        </div>

        <!-- kakao Map API -->
        <div class="kakao_api">
          <div class="kakao">
            <div class="kakaoMap_size" id="map"></div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=605db5303d35869f7dea1bc7ebc32ea0&libraries=clusterer"></script>
            <script src="../../front/js/kakao3.js"></script>
          </div>
        </div>
      </div>

      <!-- 매물 데이터 -->
      <div class="building">
        <div class="map_side_sub_02">
          <span class="map_side_menu_02 all-room">
            <a href="../../front/map/map.php">
              <span class="material-symbols-outlined">&nbsp;arrow_back</span>
            </a>
          </span>
          <span class="map_side_menu_02 one-room">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;이름
          </span>
        </div>

        <div class="loop-bilding all-room-detail" style="overflow-y:auto; overflow-x:hidden; width:100%; height:810px;">
          <div>
            <div class="sale">
            </div>
            <div class="monthly">
              &nbsp;&nbsp;&nbsp;월세&nbsp;&nbsp;&nbsp;xxx/xxx
            </div>
          </div>
          <div class="line"></div>
          <div>
            <div class="review">
              &nbsp;&nbsp;&nbsp;리뷰
            </div>
          </div>
        </div>
      </div>

    </div>

    </div>
  </section>

</body>

</html>