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
  <link rel="stylesheet" href="../../front/css/map.css?fdfdf">
  <link rel="stylesheet" href="../../front/css/switch.css?fdsfsdf">
  <link rel="stylesheet" href="../../front/css/menuBar.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <script src="../../front/js/kakaotest.js"></script>
          </div>
        </div>
      </div>

      <!-- 매물 데이터 -->
      <div class="building">
        <div class="map_side_02">
          <span class="map_side_menu_02 all-room">
            <a href="javascript:allRoom_open();">전체</a>
          </span>
          <span class="map_side_menu_02 one-room">
            <a href="javascript:oneRoom_open();">원룸</a>
          </span>
          <span class="map_side_menu_02 two-room">
            <a href="javascript:twoRoom_open();">투룸</a>
          </span>
        </div>

        <div class="loop-bilding all-room-detail" style="overflow-y:auto; overflow-x:hidden; width:100%; height:810px;">
          <ul>

            <?php include "../../api/router/house/houseList.php" ?>
            <!-- <li>
              <ul>
                <li>이름: <?php //echo $row["COL 5"] 
                        ?> <?php //echo $row["COL 11"] 
                            ?></li>
                <li>가격: <?php //echo $row["COL 9"] 
                        ?></li>
                <li>원/투룸: <?php //echo $row["COL 4"] 
                          ?></li>
                <li>월/전세: <?php //echo $row["COL 8"] 
                          ?></li>
                <li>
                  <form action="" method="POST">
                    <div>
                      <input type="checkbox" name="" value="" checked id="switch">
                      <label for="switch" class="switch_label">
                        <span class="onf_btn"></span>
                      </label>
                    </div>
                  </form>
                </li>
              </ul>
            </li> -->
          </ul>
        </div>

        <div class="loop-bilding one-room-detail" style="overflow-y:auto; overflow-x:hidden; width:100%; height:810px;">
          <ul>
            <?php include "../../api/router/house/oneRoomList.php" ?>
          </ul>
        </div>

        <div class="loop-bilding two-room-detail" style="overflow-y:auto; overflow-x:hidden; width:100%; height:810px;">
          <ul>
            <?php include "../../api/router/house/twoRoomList.php" ?>
          </ul>
        </div>

      </div>

    </div>
  </section>

</body>

</html>