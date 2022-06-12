<?php
    require("./guestHeader.php");
?>
<div class="sign-up">
    <h1>Sign up</h1>

    <form action="./includes/signUp.inc.php" method="post">
    <?php
        if(isset($_GET['error'])){
            //判斷錯誤類型
            if($_GET['error']=="empty"){
                echo '<p class="text-danger">欄位未填</p>';
            }elseif($_GET['error']=="invalidaccount"){
                echo '<p class="text-danger">使用者名稱無效</p>';
            }elseif($_GET['error']=="invalidemail"){
                echo '<p class="text-danger">email格式有問題</p>';
            }elseif($_GET['error']=="invalidaccout&email"){
                echo '<p class="text-danger">使用者名稱無向 email格式有問題</p>';
            }elseif($_GET['error']=="invalidaccout&email"){
                echo '<p class="text-danger">使用者名稱無向 email格式有問題</p>';
            }elseif($_GET['error']=="checkpassword"){
                echo '<p class="text-danger">兩次輸入密碼不同</p>';
            }elseif($_GET['error']=="useristaken"){
                echo '<p class="text-danger">帳號已經註冊</p>';
            }
        }elseif(isset($_GET['info'])&&$_GET['info']="success"){
            echo '<p class="text-danger">註冊成功</p>';
        }
    ?>
        <input type="text"class="input-box"placeholder="account" name="account">
        <input type="password"class="input-box"placeholder="password" name="password">
        <input type="password"class="input-box"placeholder="confirm__password" name="confirm_password">
        <input type="email"class="input-box"placeholder="email" name="email">
        <button type="submit"class="signup-btn" name="submit_btn">Sign up</button>
    </form>
    
</div>