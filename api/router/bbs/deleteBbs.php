<?php
session_start();
include('../../db.php');

$bbsId = $_GET['id'];

$save = "DELETE FROM `board` WHERE bbsId = $bbsId;";
$result = mysqli_query($db, $save);

header("location: http://isc963.dothome.co.kr/front/board/board.php");
exit();
?>