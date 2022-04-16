<?php
session_start();
include("../../api/db.php");
if(isset($_SESSION["id"])){
	$id = $_SESSION["id"];
	$sql = "SELECT * FROM `zzimList`, `user`, `house` WHERE zzimList.id = user.id AND zzimList.houseId = house.houseId AND user.id='$id';";
	$order = mysqli_query($db, $sql);
	for(;$row = mysqli_fetch_array($order, MYSQLI_ASSOC);) {
?>
	<tr>
		<td><input type="checkbox" id="checkbox"></td>
		<td><?php echo $row["COL 5"] . " " . $row["COL 11"]?></td>
		<td><?php echo $row["COL 9"] ?></td>
		<td><?php echo $row["COL 4"] ?></td>
		<td><?php echo $row["COL 8"] ?></td>
	</tr>
<?php
  }
}
?>