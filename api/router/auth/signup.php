<?php
# 회원가입 처리
include("../../db.php");

if(isset($_POST["id"]) && isset($_POST["pw"]) 
&& isset($_POST["name"]) && isset($_POST["email"])
&& isset($_POST["year"]) && isset($_POST["month"]) && isset($_POST["day"]) 
&& isset($_POST["gender"]) && isset($_POST["tel"])){
	# security
	$id = mysqli_real_escape_string($db, $_POST["id"]);
	$password = mysqli_real_escape_string($db, $_POST["pw"]);
	$name = mysqli_real_escape_string($db, $_POST["name"]);
	$email = mysqli_real_escape_string($db, $_POST["email"]);
	$year = mysqli_real_escape_string($db, $_POST["year"]);
	$month = mysqli_real_escape_string($db, $_POST["month"]);
	$day = mysqli_real_escape_string($db, $_POST["day"]);
	$sex = mysqli_real_escape_string($db, $_POST["gender"]);
	$tel = mysqli_real_escape_string($db, $_POST["tel"]);


	if(empty($id) && empty($password) &&
	empty($name) && empty($tel)){
		# case: empty
		header("location: http://isc963.dothome.co.kr/front/signup/signup.php");
		exit();
	} else {
		# security
		$password = password_hash($password, PASSWORD_DEFAULT);

		# id 중복 체크
		$checkId = "SELECT * FROM user WHERE id = '$id';";
		$order = mysqli_query($db, $checkId);

		if(mysqli_num_rows($order) > 0) {
			# 중복
			header("location: http://isc963.dothome.co.kr/front/signup/signup.php");
		} else {
			# 중복 x
			$save = "INSERT INTO `user`(`id`, `password`, `name`, `email`, `age`, `sex`, `tel`) VALUES ('$id','$password','$name','$email','$year$month$day','$sex','$tel')";
			$result = mysqli_query($db, $save);

			header("location: http://isc963.dothome.co.kr/front/login/login.php");
			exit();
		}
	}
} else {
	# error
	header("location: http://isc963.dothome.co.kr/");
	exit();
}
?>