<?php
$db = mysqli_connect("localhost", "isc963", "capstone12!", "isc963");

if($db) {
	// echo "db connect";
} else {
	echo "db connect failure";
}
?>