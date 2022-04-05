<?php
session_start();
include('../../db.php');

if(isset($_POST['title']) && isset($_POST['description'])){
	$title = mysqli_real_escape_string($db, $_POST["title"]);
	$description = mysqli_real_escape_string($db, $_POST["description"]);
	$id = $_SESSION["id"];
	$formated_DATE = date('Y-m-d');
	$bbsId = $_GET['id'];

	if(empty($title) || empty($description)){
		# case: empty
        echo "<script> 
        alert('$title'); 
        location.replace('http://isc963.dothome.co.kr/front/write/write.php')</script>";
	} else {
		$save = "UPDATE `board` SET `title`='$title',`description`='$description', `date`='$formated_DATE' WHERE bbsId = $bbsId;";
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