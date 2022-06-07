<?php
include("../../../api/db.php");
session_start();


if(isset($_SESSION['id'])){
    //올바르지 않은 경로(houseId가 없을경우) 예외처리를 위해 선 선언
    $houseId = mysqli_real_escape_string($db,$_GET["houseId"]);
    if(isset($_GET["houseId"])){
        //널 값 처리
        if($_POST["title"] != "" && $_POST["description"] != ""){
            $id = mysqli_real_escape_string($db,$_SESSION["id"]);
            $tite = mysqli_real_escape_string($db,$_POST["title"]);
            $description = mysqli_real_escape_string($db,$_POST["description"]);

            //index 처리
            $checkIndex = "SELECT `index` FROM `review`";
            $check_order = mysqli_query($db, $checkIndex);

            //index가 0일결우
            if(mysqli_num_rows($check_order) == ""){
                $index=1;
                $save ="INSERT INTO `review`(`houseId`, `user_id`, `title`, `content`, `index`) VALUES ('$houseId','$id','$tite','$description','$index')";
                $result = mysqli_query($db, $save);
                echo "<script> alert('입력완료'); location.replace('../../../front/map/submap.php?houseId=$houseId') </script>";
                exit();

            }
            //index가 1이상일 경우
            else if(mysqli_num_rows($check_order) >= 0) {
                //가장 마지막 번호 기준으로 index 값 부여
                while($row= mysqli_fetch_array($check_order)){
                    $index = $row["index"];
                }
                $index++;
                $save = "INSERT INTO `review`(`houseId`, `user_id`, `title`, `content`, `index`) VALUES ('$houseId','$id','$tite','$description','$index')";
                $result = mysqli_query($db, $save);
                echo "<script> alert('입력완료'); location.replace('../../../front/map/submap.php?houseId=$houseId') </script>";
                exit();

            }
            //review 테이블에 대한 sql 퀴리가 생성되지 않았거나 테이블에 문제가 생겼을 경우 예외처리
            else{
            echo "<script> alert('데이터 오류 관리자에게 문의 바람'); location.replace('../../../front/index.php')</script>";
            exit();
            }

    }
        else{
            //title이 널값일 경우
            if($_POST["title"] == ""){
                echo "<script> alert('제목을 입력해주세요'); location.replace('../../../front/map/submap.php?houseId=$houseId')</script>";
                exit();
            }
            //content가 널값일 경우
            else{
                echo "<script> alert('내용을 입력해주세요'); location.replace('../../../front/map/submap.php?houseId=$houseId')</script>";
                exit();

            }

        }


    }
    //addreview에 직접적인 접근을 시도했을 경우 예외처리
    else{
        echo "<script> alert('올바르지않은 경로 입니다.');  location.replace('../../../front/index.php')</script>";
        exit();
    }
}

//로그아웃 상태 일때 예외처리
else{
    echo "<script> alert('디쿠톡 회원만 사용가능한 기능입니다. 로그인 페이지로 갑니다'); location.replace('../../../../front/login/login.php')</script>";
    exit();
}








?>
