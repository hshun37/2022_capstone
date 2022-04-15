<?php
include("../../db.php");

if(isset($_GET['item'])){
	# 검색 했을 때
	$item = $_GET['item'];
	$concat = "SELECT *, CONCAT (`COL 12`,`COL 13`) 'names' 
	FROM `house` 
	where `COL 1` like '%$item%' or
	`COL 2` like '%$item%' or
	`COL 3` like '%$item%' or
	`COL 4` like '%$item%' or
	`COL 5` like '%$item%' or
	`COL 6` like '%$item%' or
	`COL 8` like '%$item%' or
	`COL 12` like '%$item%'
	order by houseId desc";
} else { 
	# 기본
	$concat = "SELECT *, CONCAT (`COL 12`,`COL 13`) 'names' FROM `house`
	order by houseId desc";
}
$c_order= mysqli_query($db,$concat);
$sql = "SELECT * FROM location";
$order = mysqli_query($db, $sql);
$locate= array();

while($row= mysqli_fetch_array($order)) {
	$c_order= mysqli_query($db,$concat);
	while($c_row= mysqli_fetch_array($c_order)){
		if($c_row['names']==$row['name']){
      array_push($locate, [
				'x' => $row['location_x'], 
        'y' => $row['location_y']
				]
			);
		}
	}
}


echo json_encode($locate), "\n";
?>