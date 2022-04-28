<?php
session_start();
include("../../api/db.php");
if(isset($_SESSION["id"])){
	$id = $_SESSION["id"];
	$sql = "SELECT * FROM `zzimList`, `user`, `house` WHERE zzimList.id = user.id AND zzimList.houseId = house.houseId AND user.id='$id';";
	$order = mysqli_query($db, $sql);
	for(;$row = mysqli_fetch_array($order, MYSQLI_ASSOC);) {
		$index = $row['index'];
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<tr>
		<td><?php echo $row["COL 5"] . " " . $row["COL 11"]?></td>
		<td><?php echo $row["COL 9"] ?></td>
		<td><?php echo $row["COL 4"] ?></td>
		<td><?php echo $row["COL 8"] ?></td>
		<td><a href="../../api/router/user/deletezzimList.php?index=<?php echo $index ?>" style="background-color:transparent; border:0;"><i class="fa-solid fa-x"></i></a></td>
	</tr>
<?php
  }
}
?>