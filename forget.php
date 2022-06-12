<?php
    require("./loginHeader.php");
 ?>
 <div class="sign-up">
    <h1>Forget Password</h1>
    <form action="./includes/forget.inc.php" method="POST">
        <input type="email"class="input-box"placeholder="email" name="email">
        <button type="submit"class="submit_btn" name="submit_btn">Confirm</button>
    </form>
</div>