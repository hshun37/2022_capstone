<?php
include("../../api/db.php");
$bbsId = $_GET['id'];
$sql = "SELECT * FROM `board` where bbsId = $bbsId";
$order = mysqli_query($db, $sql);
$row = mysqli_fetch_array($order, MYSQLI_ASSOC);
?>
