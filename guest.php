<?php
    require("./guestHeader.php");
?>
<div class="sign-up">
    <h1>Sign up</h1>

    <form action="./includes/signUp.inc.php" method="post">

        <input type="text"class="input-box"placeholder="account" name="account">
        <input type="password"class="input-box"placeholder="password" name="password">
        <input type="password"class="input-box"placeholder="confirm__password" name="confirm_password">
        <input type="email"class="input-box"placeholder="email" name="email">
        <button type="submit"class="signup-btn" name="submit_btn">Sign up</button>
    </form>
</div>