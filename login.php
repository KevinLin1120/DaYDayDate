<?php
    require("./loginHeader.php");
 ?>
 <div class="sign-up">
        <h1>Log in</h1>
        <form action="./includes/logIn.inc.php" method="POST">
            <input type="email"class="input-box"placeholder="account" name="account">
            <input type="password"class="input-box"placeholder="password" name="password">
            <div class="fsBtn">
                <p div class="sign-in"><a href="./guest.php">Sign in</a></p>
                <p div class="forgot"><a href="./forget.php">Forget pwd</a></p>
            </div>
            <button type="button"class="signup-btn" name="submit_login">Log in</button>
        </form>
    </div>
<?php
    if(isset($_SESSION['_id'])&& $_SESSION['_id'] != " "){
        echo "<p>成功登入</p>";
    }else{
        echo "<p>成功登出</p>";
    }
?>