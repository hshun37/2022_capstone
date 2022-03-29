<?php
//정보 수정
session_start();

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $tel = $_SESSION['tel'];
  } else {
    $id = "";
    $name = "";
    $email = "";
    $tel = "";
  }
include("../../db.php");

if( isset($_POST["user_pass"]) && isset($_POST["pw"]) && isset($_POST["name"]) && isset($_POST["email"])  && isset($_POST["tel"])){

    $user_pass = mysqli_real_escape_string($db, $_POST["user_pass"]);
	$c_password = mysqli_real_escape_string($db, $_POST["pw"]);
	$c_name = mysqli_real_escape_string($db, $_POST["name"]);
	$c_email = mysqli_real_escape_string($db, $_POST["email"]);
	$c_tel = mysqli_real_escape_string($db, $_POST["tel"]);


	if(empty($c_email) && empty($c_password) &&
	empty($c_name) && empty($c_tel) && empty($user_pass)){
        echo "<script> 
        alert('값을 입력해주세요'); 
        location.replace('http://isc963.dothome.co.kr/front/myPage/myPage.php')</script>";
	} 
    else {
		
        $sql = "SELECT * FROM user WHERE id = '$id';";
        $reslt = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($reslt);
        $hash = $row['password'];
        //복호화
		$cp = password_verify($user_pass, $hash);
        $c_password = password_hash($c_password, PASSWORD_DEFAULT);

        if($cp)
        {
        //중복체크
        $check_r = "SELECT * FROM user WHERE email = '$c_email';";
        $serch = mysqli_query($db, $check_r);
            if(mysqli_num_rows($serch) != 0) {
                echo "<script> alert('이미 사용되고 있는 email 입니다.'); location.replace('../../../front/myPage/myPage.php') </script>";
                exit();
            }
            else{
            $check_r = "SELECT * FROM user WHERE tel = '$c_tel';";
            $serch = mysqli_query($db, $check_r);
                if (mysqli_num_rows($serch) != 0) {
                    echo "<script> alert('이미 사용되고 있는 번호 입니다.'); location.replace('../../../front/myPage/myPage.php') </script>";
                    exit();
                }
                else{
                    
                    $save = " UPDATE user SET password = '$c_password', name = '$c_name', email = '$c_email', tel = '$c_tel' WHERE id = '$id';";
                    $check = mysqli_query($db, $save);
                    $r_sql = " SELECT * FROM user WHERE id = '$id'; ";
                    $r_reslt = mysqli_query($db, $r_sql);
                    $rc = mysqli_fetch_assoc($r_reslt);

                    $_SESSION['id'] = $rc['id']; 
                    $_SESSION['name'] = $rc['name'];
                    $_SESSION['email'] = $rc['email'];
                    $_SESSION['tel'] = $rc['tel'];
            
                    echo "<script> alert('회원정보 수정 성공'); location.replace('../../../front/myPage/myPage.php') </script>";
                }
            }

        }
        else
        {
            echo "<script> alert('이전 비밀번호가 다릅니다'); location.replace('../../../front/myPage/myPage.php') </script>";
        }

	}
} else {
	//예외처리
	echo "<script> alert('알 수 없는 에러 발생 관리자에게 문의하세요'); location.replace('http://isc963.dothome.co.kr/front/myPage/myPage.php')</script>";
}
?>