<?php
session_start();
include("../../api/db.php");
if(isset($_SESSION["id"])){
	$id = $_SESSION["id"];
	$sql = "SELECT * FROM `zzimList`, `user`, `home` WHERE zzimList.id = user.id AND zzimList.houseId = home.houseId AND user.id='$id';";
	$order = mysqli_query($db, $sql);
	for(;$row = mysqli_fetch_array($order, MYSQLI_ASSOC);) {
?>
	<tr>
		<td></td>
		<td><?php echo $row["houseName"] . " " . $row["COL 11"]?></td>
		<td><?php echo $row["COL 10"] ?></td>
		<td><?php echo $row["COL 5"] ?></td>
		<td><?php echo $row["COL 9"] ?></td>
	</tr>
<?php
  }
}
?>