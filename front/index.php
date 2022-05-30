<?php
session_start();

if (isset($_SESSION['id'])) {
	$name = $_SESSION['name'];
} else {
	$name = "";
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>디쿠방</title>

	<!-- CSS 초기화 CDN 적용 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Lodash -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js" integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- GSAP & ScrollToPlugin -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js" integrity="sha512-agNfXmEo6F+qcj3WGryaRvl9X9wLMQORbTt5ACS9YVqzKDMzhRxY+xjgO45HCLm61OwHWR1Oblp4QSw/SGh9SA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- SCROLL MAGIC -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" rel="icon" href="../favicon.ico">
	<link rel="stylesheet" href="../front/css/main.css?back1">
	<link rel="stylesheet" href="../front/css/btn.css?ttttt">
	<link rel="stylesheet" href="../front/css/main_kakaoApi.css?fefef">
	<link rel="stylesheet" href="../front/css/main_animation.css?hhh">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script defer src="../front/js/main.js?hhh"></script>
</head>

<!--헤더 부분 시작-->
<header>
	<div class="container">
		<div class="header" style="border-bottom: none;">
			<!--대가대직방 로고-->
			<div>
				<span class="logo">
					<a href="../../front/index.php">디쿠방</a>
				</span>
			</div>
			<!--대가대직방 로고-->
			<!--메뉴 시작-->
			<span class="menu">
				<div class="menu-text">
					<a href="../../front/map/map.php">
						<!-- <span class="material-icons">location_on</span> -->
						지도
					</a>
				</div>
				<!-- <div class="menu-text">
					<a href="javascript:void(0)">
						<span class="material-icons">home</span>
						원룸
					</a>
				</div>
				<div class="menu-text">
					<a href="javascript:void(0)">
						<span class="material-icons">maps_home_work</span>
						투룸
					</a>
				</div> -->
				<div class="menu-text">
					<a href="../../front/board/board.php">
						<!-- <span class="material-icons">assignment</span> -->
						자유게시판
					</a>
				</div>
				<div class="menu-text">
					<a href="../../front/noti/noti.php">
						<!-- <span class="material-icons">notifications</span> -->
						공지사항
					</a>
				</div>
				<?php if ("" === $name) { ?>
					<div>
						<a href="../../front/login/login.php" class="login btn">로그인</a>
					</div>
					<div>
						<a href="../../front/signup/signup.php" class="signup btn">회원가입</a>
					</div>
				<?php } else { ?>
					<div class="menu-text">
						<span><a href="../../front/myPage/myPage.php" style="margin-right: 25px;">
								<?php echo "$name" ?>님</a>
						</span>
					</div>
					<div>
						<a href="../../api/router/auth/logout.php" class="signup btn">로그아웃</a>
					</div>
				<?php } ?>
			</span>
			<!--메뉴 끝-->

		</div>
	</div>
</header>
<!--헤더 부분 끝-->





<!--메인 화면 시작-->

<!--디쿠방에 오신것을 환영합니다!-->
<!-- <section class="scroll-spy dcu-room"> -->
<!--디쿠방에 오신것을 환영합니다!-->
<!-- <div class="duc_ment back-to-position delay-1">
    <div class="loading">
      <span>디</span><span>쿠</span>
      <span>방</span><span>에&nbsp;</span>
      <span>오</span><span>신</span>
      <span>것</span><span>을&nbsp;</span>
      <span>환</span><span>영</span>
      <span>합</span><span>니</span>
      <span>다</span><span>!</span>
    </div>
  </div> -->
<!-- </section> -->
<!--디쿠방에 오신것을 환영합니다!-->


<!--카카오 API 시작-->
<section class="scroll-spy kakao-api">
	<div class="dcu-room-ment">
		<h1 class=" back-to-position to-left delay-1">
			<p>디쿠방</p>에서 원하는&nbsp;<p>방</p>을 비교하세요.
		</h1>
	</div>
	<div class="kakao">
		<div id="map" class="back-to-position to-right delay-2"></div>
		<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=605db5303d35869f7dea1bc7ebc32ea0"></script>
		<script src="../front/js/kakao.js"></script>
	</div>
</section>
<!--카카오 API 끝-->


<!--미니 자유게시판-->
<!-- <section class="scroll-spy mini-board">
	<div class="board-ment">
		<h1 class="back-to-position to-right delay-1">
			<p>눈이 편하게</p>&nbsp; 비교해 보세요.
		</h1>
	</div>
	<div class="chartEx">

	</div>
</section> -->


<!--메인 화면 끝-->




<!--푸터 부분 시작-->
<footer>
	<?php include "../front/footer/footer.php" ?>
</footer>
<!--푸터 부분 끝-->



<!--최상단 이동-->
<div id="to-top">
	<div class="material-icons">arrow_upward</div>
</div>
<!--최상단 이동-->



</body>

</html>