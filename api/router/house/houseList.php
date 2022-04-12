<?php
include("../../api/db.php");

if(isset($_GET['item'])){
	# 검색 했을 때
	$item = $_GET['item'];
	$sql = "SELECT * 
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
$order = mysqli_query($db, $sql);
for(;$row = mysqli_fetch_array($order, MYSQLI_ASSOC);) {
?>
<li>
  <ul>
    <li>이름: <?php echo $row["COL 5"]?> <?php echo $row["COL 11"]?></li>
    <li>가격: <?php echo $row["COL 9"]?></li>
    <li>원/투룸: <?php echo $row["COL 4"]?></li>
    <li>월/전세: <?php echo $row["COL 8"]?></li>
	</ul>
</li>
<?php
}
# 지도 움직이기?
?>