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
  <link rel="stylesheet" href="../../front/css/board.css?aaa">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <!--헤더 시작-->
  <?php include "../../front/header/header.php" ?>
  <!--헤더 끝-->

  <section>

    <div class="title">
      <h2>공지사항</h2>
    </div>

    <div class="board_list_wrap">
      <table class="board_list">
        <thead>
          <tr>
            <th>번호</th>
            <th>제목</th>
            <th>글쓴이</th>
            <th>작성일</th>
            <th>조회</th>
          </tr>
        </thead>
        <tbody>
				<?php
        include("../../api/router/bbs/bbsList.php");
				?>
				</tobdy>
      </table>
      <div class="paging">
        <a href="#" class="bt">첫 페이지</a>
        <a href="#" class="bt">이전 페이지</a>
        <a href="#" class="num on">1</a>
        <a href="#" class="bt">다음 페이지</a>
        <a href="#" class="bt">마지막 페이지</a>
      </div>
      <div class="registration">
        <a href="javascript:void(0);" class="btn btn--blue">글쓰기</a>
      </div>
    </div>
  </section>



  <!-- 푸터 시작 -->
  <?php include "../../front/footer/footer.php" ?>
  <!-- 푸터 끝 -->

</body>

</html>