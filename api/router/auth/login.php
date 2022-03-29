<?php

session_start();
include('../../db.php');

 if(isset($_POST['id']) && isset($_POST['password']))
 {

    $id = mysqli_real_escape_string($db, $_POST['id']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    //초기 입력값 확인
    if(empty($id))
    {
        echo "<script> 
        alert('아이디가 입력되지 않음'); 
        location.replace('../../../front/login/login.php')</script>";
    }

    else if(empty($password))
    {
        echo "<script> alert('패스워드가 입력되지 않음'); location.replace('../../../front/login/login.php')</script>";
    }

    else
    {
        $sql = " select * from user where  id = '$id'";
        $reslt = mysqli_query($db, $sql);
        
        //로그인 정보확인
        if(mysqli_num_rows($reslt) == 1)
        {
         $row = mysqli_fetch_assoc($reslt);
         $hash = $row['password'];
         $cp = password_verify($password, $hash);
        
            //해쉬값 복호화
            if($cp)
            {
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['tel'] = $row['tel'];
                echo "<script> alert('로그인 성공'); location.replace('../../../front/index.php')</script>";  
            }
            else
            {
                echo "<script> alert('비밀번호를 확인하세요'); location.replace('../../../front/login/login.php')</script>";
            }

        }
        else
        {
            echo "<script> alert('아이디를 확인하세요'); location.replace('../../../front/login/login.php')</script>";
        }

    }

 }

 else
 {
    echo "<script> alert('알 수 없는 오류 발생 서버관리자에게 문의 바람'); location.replace('../../../front/index.php')</script>";
 }



?>