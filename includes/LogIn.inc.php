<?php
if(isset($_POST['submit_login'])){
    require_once './dbConn.inc.php';
    $account=$_POST['account'];
    $password=$_POST['password'];
    if(empty($account)||empty($password)){
        header("Location:../login.php?error=empty");
        exit();
    }else{
    //處理資料庫帳號密碼比對
    $sql="SELECT*FROM users WHERE username=?";
    $stmt=mysqli_stmt_init($db_link);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../login.php?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"ss",$account,$account);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        //不同於$result=mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($result)){
            $checkPW=password_verify($password,$row['password']);
            if($checkPW==false){
                header("Location:../login.php?info=passwordIncorrect");
                exit();
            }else{
                session_start();
                $_SESSION['_id']= $row['_id'];
                $_SESSION['_uesrname']= $row['username'];
                header("Location: ../login.php?login=success");
                exit();
            }
        }else{
            header("Location: ../login.php?info=usernameIncorrect");
            exit();
        }
    }

    }
}else{
    header("Location: ../login.php");
}
?>