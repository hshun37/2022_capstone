<?php
include("../../api/db.php");
$sql = "SELECT * FROM `home` order by houseId desc";
$order = mysqli_query($db, $sql);
for(;$row = mysqli_fetch_array($order, MYSQLI_ASSOC);) {
?>
<li>
  <ul>
		<li>test: <?php echo $row["houseId"]?></li>
    <li>이름: <?php echo $row["houseName"]?> <?php echo $row["COL 11"]?></li>
    <li>가격: <?php echo $row["COL 10"]?></li>
    <li>원/투룸: <?php echo $row["COL 5"]?></li>
    <li>월/전세: <?php echo $row["COL 9"]?></li>
	</ul>
</li>
<?php
}
?>