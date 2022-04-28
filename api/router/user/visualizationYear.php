<?php
session_start();
include("../../db.php");
if(isset($_SESSION["id"])){
	$id = $_SESSION["id"];
	$sql = "SELECT * 
	FROM `zzimList`, `user`, `house` 
	WHERE zzimList.id = user.id 
	AND zzimList.houseId = house.houseId 
	AND user.id='$id'
	AND `COL 8` = '전세';";
	$order = mysqli_query($db, $sql);
	$data = array();
	for(;$row = mysqli_fetch_array($order, MYSQLI_ASSOC);){
		$price = explode("/", $row["COL 9"]);
		array_push($data, [
			"name" => $row["COL 5"] . " " . $row["COL 11"],
			"price" => intval($price[0]),
		]);
	}
} else {
	
}

echo json_encode($data, JSON_UNESCAPED_UNICODE), "\n";
?>