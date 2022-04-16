<?php
include("../../db.php");

// if(isset($_GET['item'])){
// 	# 검색 했을 때
// 	$item = $_GET['item'];
// 	$concat = "SELECT *, CONCAT (`COL 12`,`COL 13`) 'names' 
// 	FROM `house` 
// 	where `COL 1` like '%$item%' or
// 	`COL 2` like '%$item%' or
// 	`COL 3` like '%$item%' or
// 	`COL 4` like '%$item%' or
// 	`COL 5` like '%$item%' or
// 	`COL 6` like '%$item%' or
// 	`COL 8` like '%$item%' or
// 	`COL 12` like '%$item%'
// 	order by houseId desc";
// } 
// else { 
// 	# 기본
// 	$sql = "SELECT * FROM `house` order by houseId desc";
// }



    $concat =  "SELECT *
                FROM house,location
                where location.name IN(concat(`COL 12`,`COL 13`))";
    // $concat="SELECT *, CONCAT (`COL 12`,`COL 13`) 'names' FROM house";

    $c_order= mysqli_query($db,$concat);
	//$sql = "SELECT * FROM location";
	//$order = mysqli_query($db, $sql);
    $locate= array();

    while($row= mysqli_fetch_array($c_order)) {

                 array_push($locate,[

                    'locate'=> $row["COL 1"],
                    'price' => $row["COL 9"],
                    'detail_locate' => $row["COL 11"],
                    'type' => $row["COL 8"],
                    'name' => $row["COL 5"],
                    'address' => $row['name'],
                    'x' => $row['location_x'],
                    'y' => $row['location_y']
                 ]
             );
             
             
         }



echo json_encode($locate), "\n";

?>
<?php
# 지도 움직이기?
?>