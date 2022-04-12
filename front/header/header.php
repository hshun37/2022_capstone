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
	<link rel="stylesheet" href="../../front/css/btn.css?ii">
	<link rel="stylesheet" href="../../front/css/main.css?fewf">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script defer src="../../front/js/main.js?ii"></script>
</head>

<!--헤더 시작-->
<header>
	<div class="container">
		<div class="header">

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
				<div class="menu-text">
					<a href="javascript:void(0)">
						<!-- <span class="material-icons">home</span> -->
						원룸
					</a>
				</div>
				<div class="menu-text">
					<a href="javascript:void(0)">
						<!-- <span class="material-icons">maps_home_work</span> -->
						투룸
					</a>
				</div>
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
<!--헤더 끝-->