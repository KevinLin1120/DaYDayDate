<?
    if(isset($_POST['submit_btn'])){
        require_once './dbConn.inc.php';
        $account=$_POST['account'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];
        $email=$_POST['email'];

        if(empty($account)||empty($password)||empty($email)||empty($confirm_password))
        {
            header("Location: ../guest.php?error=empty&account=".$account ."&password=".$password);
            exit();
        }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$account)){
            header("Location: ../guest.php?error=invalidaccount");
            exit();
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("Location: ../guest.php?error=invalidemail".$email);
            exit();
        }elseif(!preg_match("/^[a-zA-Z0-9]*$",$account) && !filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("Location: ../guest.php?error=invalidaccout&email");
            exit();
        }elseif($password !==$confirm_password){
            header("Location: ../guest.php?error=checkpassword&&acount".$account."email=" .$email);
            exit();
        }else{
            $sqlQuery="SELECT username FROM users WHERE username=?";
            $stmt=mysqli_stmt_init($db_link);
            if(!mysqli_stmt_prepare($stmt,$sqlQuery)){
                header("Location:../guest.php?error=sqlQueryError");
                exit();
            }else{  
                mysqli_stmt_bind_param($stmt,"s",$account);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $result=mysqli_stmt_num_rows($stmt);
                if($result > 0){
                    header("Location: ../guest.php?error=useristaken&email=" .$email);
                    exit();
                }else{
                    $sqlInsert="INSERT INTO users (username , pwd, email)VALUES(?,?,?)";
                    $stmt=mysqli_stmt_init($db_link);
                    if(!mysqli_stmt_prepare($stmt,$sqlInsert)){
                        header("Location:../guest.php?error=sqlQueryError");
                        exit();
                    }else{
                        $hasdedPW=password_hash($password,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"sss",$account,$email,$hasdedPW);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        header("Location:../guest.php?info=success");   
                        exit();
                    }
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($db_link);
        }
    }else{
        header("Location: ../guest.php");
        exit();
    }
?>