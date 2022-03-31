<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디쿠방</title>
  <link rel="stylesheet" rel="icon" href="/favicon.ico">
  <link rel="stylesheet" href="../../front/css/btn.css?aa">
  <link rel="stylesheet" href="../../front/css/main.css?aa">
  <link rel="stylesheet" href="../../front/css/view.css?hhh">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <!--헤더 시작-->
  <?php include "../../front/header/header.php" ?>
  <!--헤더 끝-->


  <section>
    <div class="board_wrap">
      <div class="board_title">
        <strong>자유게시판</strong>
        <p>욕설, 비방, 인격모독 발언은 제제를 받을 수 있습니다.</p>
      </div>
      <div class="board_view_wrap">
        <div class="board_view">
          <div class="title">
            제목 들어가는 칸
          </div>
          <div class="info">
            <dl>
              <dt>번호</dt>
              <dd>1</dd>
            </dl>
            <dl>
              <dt>글쓴이</dt>
              <dd>디쿠</dd>
            </dl>
            <dl>
              <dt>날짜</dt>
              <dd>2022.03.31</dd>
            </dl>
            <dl>
              <dt>조회</dt>
              <dd>111</dd>
            </dl>
          </div>
          <div class="cont">
            내용 들어가는 칸<br>디쿠<br>디쿠<br>디쿠<br>디쿠<br>디쿠<br>디쿠<br>
            디쿠<br>디쿠<br>디쿠
          </div>
        </div>
        <div class="bt_wrap">
          <a href="../../front/board/board.php" class="btn">목록</a>
          <a href="../../front/edit/edit.php" class="btn">수정</a>
        </div>
      </div>
    </div>
  </section>



  <!-- 푸터 시작 -->
  <?php include "../../front/footer/footer.php" ?>
  <!-- 푸터 끝 -->

</body>

</html>