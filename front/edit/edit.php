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
  <link rel="stylesheet" href="../../front/css/btn.css?aaa">
  <link rel="stylesheet" href="../../front/css/main.css?aaa">
  <link rel="stylesheet" href="../../front/css/edit.css?aaa">
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
      <form class="board_write_wrap" method="POST">
        <div class="board_write">
          <div class="title">
            <dl>
              <dt>제목</dt>
              <dd><input type="text" name="" id="" placeholder="제목 입력" value="글 제목이 들어갑니다"></dd>
            </dl>
          </div>
          <div class="info">
            <dl>
              <dt>글쓴이</dt>
              <dd><input type="text" name="" id="" placeholder="글쓴이 입력" value="디쿠"></dd>
            </dl>
            <dl>
              <dt>비밀번호</dt>
              <dd><input type="password" name="" id="" placeholder="비밀번호 입력" value="1234"></dd>
            </dl>
          </div>
          <div class="cont">
            <textarea placeholder="내용 입력">변경내용 추가 하세용~</textarea>
          </div>
        </div>
        <div class="bt_wrap">
          <button id="" type="submit" class="btn">수정</button>
          <a href="../../front/view/view.php" class="btn">취소</a>
        </div>
      </form>
    </div>
  </section>



  <!-- 푸터 시작 -->
  <?php include "../../front/footer/footer.php" ?>
  <!-- 푸터 끝 -->

</body>

</html>