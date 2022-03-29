<?php
include("../../api/db.php");
$sql = "SELECT * FROM `bbs` order by bbsId desc limit 0,20";
$order = mysqli_query($db, $sql);
for(;$row = mysqli_fetch_array($order, MYSQLI_ASSOC);) {
?>
	<tr>
		<td><?php echo $row['bbsId'] ?></td>
		<td class="tit">
			<a href="#"><?php echo $row['title'] ?></a>
		</td>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['date'] ?></td>
		<td><?php echo $row['view'] ?></td>
	</tr>
<?php
}
?>