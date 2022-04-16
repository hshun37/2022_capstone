<?php
session_start();
include("../../db.php");
echo $_SESSION['id'];
echo $_GET['houseId'];
if(isset($_SESSION["id"])){
    if(isset($_GET["houseId"])){
        $id = mysqli_real_escape_string($db,$_SESSION["id"]);
        $houseId = mysqli_real_escape_string($db,$_GET["houseId"]);

        $save = "INSERT INTO `zzimList`(`id`, `houseId`) VALUES ('$id','$houseId')";
        $result = mysqli_query($db, $save);

        echo "<script>  history.back(); </script>";
    }
    else{
        //예외처리
        echo "<script> alert('알 수 없는 오류 발생 서버관리자에게 문의 바람'); location.replace('../../../front/index.php')</script>";
    }
}

else{
    echo "<script> alert('알 수 없는 오류 발생 서버관리자에게 문의 바람'); location.replace('../../../front/index.php')</script>";
}
?>