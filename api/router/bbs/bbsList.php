<?php
include("../../api/db.php");
$sql = "SELECT * FROM `board` order by bbsId desc limit 0,20";
$order = mysqli_query($db, $sql);
for(;$row = mysqli_fetch_array($order, MYSQLI_ASSOC);) {
	$bbsId = $row['bbsId'];
?>
	<tr>
		<td><?php echo $row['bbsId'] ?></td>
		<td class="tit">
			<a href="http://isc963.dothome.co.kr/front/view/view.php?id=<?php echo $row['bbsId']?>">
			<?php echo $row['title'] ?>
		</a>
		</td>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['date'] ?></td>
		<td><?php echo $row['view'] ?></td>
	</tr>
<?php
}
?>