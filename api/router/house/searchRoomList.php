<?php
if(isset($_GET['item'])){
	$item = $_GET['item'];

	echo "<script>
	location.href = 'http://isc963.dothome.co.kr/front/map/map.php?item=$item';
	</script>";
}
?>