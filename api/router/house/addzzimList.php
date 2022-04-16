<?php
include("../../db.php");
if(isset($_SESSION['id'])){
    if(isset($_POST["houseId"])){
        $id = mysqli_real_escape_string($db,$_SESSION["id"]);
        $houseId = mysqli_real_escape_string($db,$_POST["houseId"]);

        $save = "INSERT INTO `zzimList`(`id`, `houseId`) VALUES ('$id',`$houseId`)";
        $result = mysqli_query($db, $save);

        echo "<script>  history.back(); </script>";

    }
    else{
        //예외처리
        echo "<script> alert('입력 받은 찜 값이 없음 올바른 경로로 접속해 주세요'); location.replace('../../../front/index.php')</script>";
    }
}

else{


}

?>