<?php
include("../../db.php");
$index = $_GET['index'];
$sql = "DELETE FROM `zzimList` WHERE `index` = '$index';";
$result = mysqli_query($db, $sql);
?>
<script>
	location.href = "http://isc963.dothome.co.kr/front/myPage/myPage.php";
</script>
