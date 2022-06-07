<?php
include("../../api/router/house/viewHouse.php");
?>
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
  <link rel="stylesheet" href="../../front/css/map.css?epppvlhh">
  <link rel="stylesheet" href="../../front/css/switch.css?fdsfsdf">
  <link rel="stylesheet" href="../../front/css/menuBar.css">
  <link rel="stylesheet" href="../../front/css/mapSub.css">
  <link rel="stylesheet" href="../../front/css/submap.css?wewewe">
  <link rel="stylesheet" href="../../front/css/comment.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script defer src="../../front/js/comment.js?gppphge"></script>
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

      <!-- 상세 페이지 -->
      <div class="building review-detail">
        <div class="map_side_sub_02">
          <span class="map_side_menu_02 all-room">
            <a href="#" onclick="history.back();">
              <span class="material-symbols-outlined">&nbsp;arrow_back</span>
            </a>
          </span>
          <span class="map_side_menu_02 one-room">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["COL 5"] ?> <?php echo $row["COL 11"] ?>
          </span>
        </div>

        <div class="loop-bilding all-room-detail" style="overflow-y:auto; overflow-x:hidden; width:100%; height:810px;">
          <div>
            <div class="sale">
            </div>
            <div class="monthly">
              &nbsp;&nbsp;&nbsp;<?php echo $row["COL 8"] ?>&nbsp;&nbsp;&nbsp;<?php echo $row["COL 9"] ?>
            </div>
          </div>
          <div class="line"></div>

          <div>
            <div class="review">
              &nbsp;&nbsp;&nbsp;리뷰
            </div>
            <div class="write-review">
              <a href="javascript:write_open();">리뷰 쓰기</a>
            </div>
						<br/>
						<div>
							<ul>
								<?php include("../../api/router/review/review.php")?>
							</ul>
						</div>
          </div>
        </div>
      </div>

      <!-- 리뷰 쓰기 페이지 -->
      <div class="building write-detail">
        <div class="map_side_sub_02">
          <span class="map_side_menu_02 all-room">
            <a href="#" onclick="history.back();">
              <span class="material-symbols-outlined">&nbsp;arrow_back</span>
            </a>
          </span>
          <span class="map_side_menu_02 one-room">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["COL 5"] ?> <?php echo $row["COL 11"] ?> 
          </span>
        </div>
        <div class="loop-bilding all-room-detail" style="overflow-y:auto; overflow-x:hidden; width:100%; height:810px;">
          <form class="board_write_wrap" method="POST" action="../../api/router/notice/addreview.php?houseId=<?php echo $_GET['houseId'] ?>">
            <div class="board_write">
              <div class="title">
                <dl>
                  <dt class="title" style="display:flex; justify-content: center;">리뷰 작성</dt>
                  <dd class="title-input"><input type="text" name="title" id="title" placeholder="제목 입력"></dd>
                </dl>
              </div>
              <div class="cont">
                <textarea placeholder="내용 입력" name="description" id="description"></textarea>
              </div>
            </div>
            <div class="bt_wrap">
              <button id="" type="submit" class="btn">등록</button>
              <a href="javascript:review_open()" class="btn">취소</a>
            </div>
          </form>
        </div>

      </div>

    </div>

    </div>
  </section>

</body>

</html>