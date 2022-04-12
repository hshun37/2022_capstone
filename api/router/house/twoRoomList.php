<?php
include("../../api/db.php");
$sql = 'SELECT * FROM `house` WHERE `COL 4` = "투룸" order by houseid desc';
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
?>