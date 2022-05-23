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
} 

else if(isset($_GET['items'])){
    //옆 리스트 클릭시
    $items = $_GET['items'];
	// $sql = "SELECT * 
    // FROM location
    // ORDER BY FIELD(`COL 5`, '$item') desc";
    // $concat =  "SELECT *
    //             FROM house,location
    //             where location.name IN(concat(`COL 12`,`COL 13`))
    //             order by FIELD(`COL 5`, '$item') desc";

    $concat = 
    "SELECT *, CONCAT (`COL 12`,`COL 13`) 'names' 
	FROM `house`
	order by FIELD(`COL 5`, '$items') desc, houseId desc";


}

else { 
	# 기본
	$concat = "SELECT *, CONCAT (`COL 12`,`COL 13`) 'names' FROM `house`
	order by houseId desc";

    // $concat =  "SELECT *
    //             FROM house,location
    //             where location.name IN(concat(`COL 12`,`COL 13`))
    //             order by houseId desc";
}
$c_order= mysqli_query($db,$concat);
if(isset($_GET['items'])){
    $items = $_GET['items'];
    #옆 리스트 클릭시 배열 정렬
    $sql = "SELECT location.name,location.location_x,location.location_y,house.`COL 5`,houseId
           FROM location,house 
           where location.name        
           IN (CONCAT (`COL 12`,`COL 13`))
           order by FIELD(`COL 5`, '$items') desc, houseId desc";

}
else{
$sql = "SELECT * FROM location";
}
$order = mysqli_query($db, $sql);
$locate= array();

while($row= mysqli_fetch_array($order)) {
	$c_order= mysqli_query($db,$concat);
	while($c_row= mysqli_fetch_array($c_order)){
		if($c_row['names']==$row['name']){
      array_push($locate, [
				'x' => $row['location_x'], 
                'y' => $row['location_y'],
                'id' => $c_row['COL 5']
				]
			);
		}
	}
}


echo json_encode($locate), "\n";
?>