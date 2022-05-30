<?php
include("../../api/db.php");

if (isset($_GET['item'])) {
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
} else if (isset($_GET['items'])) {
	//옆 리스트 클릭시
	$items = $_GET['items'];
	$sql = "SELECT * 
	FROM `house` 
	ORDER BY FIELD(`COL 5`, '$items')desc, houseId asc";
} else if (isset($_GET['locate_x'])){
    $locate_x=$_GET['locate_x'];
    $locate_y=$_GET['locate_y'];
    $locate_nx=$_GET['locate_nx'];
    $locate_ny=$_GET['locate_ny'];
   $sql= 
    "SELECT *
    FROM house,location
    where location.name IN(concat(`COL 12`,`COL 13`)) and location.location_x >= $locate_x and location.location_x <=$locate_nx and location.location_y >=$locate_y and location.location_y<=$locate_ny
    order by houseId desc";
}

else {
	# 기본
	// $sql = "SELECT * FROM `house` order by houseId desc";
	$sql = "SELECT *
                FROM house,location
                where location.name IN(concat(`COL 12`,`COL 13`))
                order by houseId desc";
}
$order = mysqli_query($db, $sql);
for (; $row = mysqli_fetch_array($order, MYSQLI_ASSOC);) {
?>
	<li>
		<ul onclick="location.href='http://isc963.dothome.co.kr/front/map/map.php?items=<?php echo $row['COL 5'] ?>'">

			<form 
			action="../../api/router/user/addzzimList.php?houseId=<?php echo $row['houseId'] ?>" 
			method="POST">
				<li>이름: <?php echo $row["COL 5"] ?> <?php echo $row["COL 11"] ?></li>
				<li>가격: <?php echo $row["COL 9"] ?></li>
				<li>원/투룸: <?php echo $row["COL 4"] ?></li>
				<li>월/전세: <?php echo $row["COL 8"] ?></li>
				<li>
					<input id="btn" type="submit" value="찜하기" />
				</li>
			</form>
			<form action="http://isc963.dothome.co.kr/front/map/submap.php?houseId=<?php echo $row['houseId']?>"
			method="POST">
				<li>
					<input id="btn" type="submit" value="상세보기"/>
				</li>
			</form>
		</ul>
	</li>
<?php
}
# 지도 움직이기?
?>