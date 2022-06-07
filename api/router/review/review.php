<?php
include("../../api/db.php");
$houseId = $_GET['houseId'];
$sql = "SELECT * FROM `review` WHERE `houseId` = '$houseId';";
$order = mysqli_query($db, $sql);
$test = $row["user_id"];

echo "<script>";
echo "console.log('$test')";
echo "</script>";


for(; $row = mysqli_fetch_array($order, MYSQLI_ASSOC); ){
?>
	<hr/>
	<li><?php echo "제목: $row[title]"; ?></li>
	<li><?php echo "작성자: $row[user_id]"; ?></li>
	<li><?php echo "내용: $row[content]"; ?></li>
	<hr/>
<?php
}
?>