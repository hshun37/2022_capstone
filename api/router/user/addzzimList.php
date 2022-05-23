<?php
session_start();
include("../../db.php");
echo $_SESSION['id'];
echo $_GET['houseId'];
if(isset($_SESSION["id"])){
    if(isset($_GET["houseId"])){      
        $id = mysqli_real_escape_string($db,$_SESSION["id"]);
        $houseId = mysqli_real_escape_string($db,$_GET["houseId"]);

        #중복 처리
        if(checkhouseId('zzimList','houseId',$houseId,$id)){
            $save = "INSERT INTO `zzimList`(`id`, `houseId`) VALUES ('$id','$houseId')";
            $result = mysqli_query($db, $save);
            echo "<script> alert('찜 목록으로 이동했습니다.'); history.back(); </script>";

        }
        else{
            echo "<script> alert('이미 찜 목록에 있는 방입니다.'); history.back(); </script>";
        }
    }
    else{
        //예외처리
        echo "<script> alert('올바르지 않은 입력 값 입니다. 올바른 경로로 다시 검색 하세요'); location.replace('../../../front/index.php')</script>";
    }
}
else{
    echo "<script> 
            var con = confirm('디쿠방 회원들만 사용 가능한 기능입니다. 로그인 하시겠습니까?'); 
            if(con)
            {
                location.replace('../../../front/login/login.php')
            }
            else
            {
                history.back();
            }
         </script>";
}
?>


<?php
    function checkhouseId($tableName,$col,$h_Id,$id){
        include("../../db.php");
        $check = "SELECT * FROM `$tableName` WHERE `$col` = '$h_Id' and `id` = '$id';";
        $row = mysqli_query($db, $check);

        if(mysqli_num_rows($row) == 0){
            return 1;
        }

        else{
            return 0;
        }

    }



?>