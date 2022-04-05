<?php
session_start();
include('../../db.php');

if(isset($_POST['title']) && isset($_POST['description'])){
	$title = mysqli_real_escape_string($db, $_POST["title"]);
	$description = mysqli_real_escape_string($db, $_POST["description"]);
	$id = $_SESSION["id"];
	$formated_DATE = date('Y-m-d');

	if(empty($title) || empty($description)){
		# case: empty
        echo "<script> 
        location.replace('http://isc963.dothome.co.kr/front/write/write.php')</script>";
	} else {
		$save = "INSERT INTO `board`(`title`, `description`, `id`, `date`, `view`) VALUES ('$title','$description','$id','$formated_DATE', 0)";
		$result = mysqli_query($db, $save);

		header("location: http://isc963.dothome.co.kr/front/board/board.php");
		exit();
	}
} else {
	# error
	header("location: http://isc963.dothome.co.kr/");
	exit();
}

?>