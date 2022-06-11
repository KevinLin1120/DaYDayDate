<?php
    require("./loginHeader.php");
 ?>
 <div class="sign-up">
        <h1>Log in</h1>
        <form action="./includes/LogIn.inc.php" method="POST">
            <input type="email"class="input-box"placeholder="account">
            <input type="password"class="input-box"placeholder="password">
            <div class="fsBtn">
                <p div class="sign-in"><a href="signin.html">Sign in</a></p>
                <p div class="forgot"><a href="forget.html">Forget pwd</a></p>
            </div>
            <button type="button"class="signup-btn">Log in</button>
        </form>
    </div>