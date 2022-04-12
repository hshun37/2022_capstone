<?php
include("../../api/db.php");

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
	$sql = "SELECT * FROM `house` order by houseId desc";
}
$rel = mysqli_query($db, $sql);
for(;$row1 = mysqli_fetch_array($rel, MYSQLI_ASSOC);) {
?>
<li id =<?php echo $row1["COL 3"] ?>, onclick="clickreader(this.id)">
  <ul>
    <li>이름: <?php echo $row1["COL 5"]?> <?php echo $row1["COL 11"]?></li>
    <li>가격: <?php echo $row1["COL 9"]?></li>
    <li>원/투룸: <?php echo $row1["COL 4"]?></li>
    <li>월/전세: <?php echo $row1["COL 8"]?></li>
	</ul>
</li>


<?php
}
?>


<?php
    $concat =  "SELECT *
                FROM house,location
                where location.name IN(concat(`COL 12`,`COL 13`))";
    // $concat="SELECT *, CONCAT (`COL 12`,`COL 13`) 'names' FROM house";

    $c_order= mysqli_query($db,$concat);
	// $sql = "SELECT * FROM location";
	// $order = mysqli_query($db, $sql);
    $locate= array();

    while($row= mysqli_fetch_array($c_order)) {
             if($c_row['names']==$row['name']){
                 array_push($locate,[
                    'x' => $row['location_x'],
                    'y' => $row['location_y']
                    
                 ]
             );
             
             }
         }



echo json_encode($locate), "\n";


?>

<?php
# 지도 움직이기?
?>