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

else if(isset($_GET['houseId'])){
	$houseId = $_GET['houseId'];
	$concat = "SELECT *, CONCAT (`COL 12`,`COL 13`) 'names' FROM `house` WHERE `houseId` = '$houseId'";
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

if (isset($_GET['locate_x'])){
    $locate_x=$_GET['locate_x'];
    $locate_y=$_GET['locate_y'];
    $locate_nx=$_GET['locate_nx'];
    $locate_ny=$_GET['locate_ny'];
   $concat= 
    "SELECT *
    FROM house,location
    where location.name IN(concat(`COL 12`,`COL 13`)) and location.location_x >= $locate_x and location.location_x <=$locate_nx and location.location_y >=$locate_y and location.location_y<=$locate_ny
    order by houseId desc";
    $c_order= mysqli_query($db,$concat);
    while($c_row= mysqli_fetch_array($c_order)){
      array_push($locate, [
				'x' => $c_row['location_x'], 
                'y' => $c_row['location_y'],
                'id' => $c_row['COL 5']
				]
			);
	}

 //아래는 전체 목록 불러오기 센터값 법위 지정 오류로 주석처리 주석풀면 전체 목록을 띄움과 동시에 리스트 부분에는 해당 범위의 목록만 나옴 
    // while($row= mysqli_fetch_array($order)){
    //     $c_id=0;
    //     if ($locate[$c_id]['x']!= $row['location_x']) {
    //         array_push($locate, [
	// 			'x' => $row['location_x'], 
    //             'y' => $row['location_y'],
    //             'id' => $row['COL 5']
	// 			]
	// 		);
            
    //     }
    //     $c_id++;

    // }


}
else{
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
}


echo json_encode($locate), "\n";
?>