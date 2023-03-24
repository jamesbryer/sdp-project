<?php

include "../header.php";
?>
<div style="padding-top: 50px;"></div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="index-login-signup">
                <h3>Sign Up</h3>
                <p>Don't have an account? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <div class="form-group">
                        <input class="form-control centre" type="text" name="uid" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control centre" type="password" name="pwd" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control centre" type="password" name="pwdrepeat" placeholder="Repeat password" required>
                    </div>
                    <div class="form-group"><input class="form-control centre" type="text" name="email" placeholder="Email" required></div>

                    <button class="btn" type="submit" name="submit">Sign Up</button>
                </form>
            </div>
        </div>
        <div class="col">
            <div class="index-login-login">
                <h3>Log In</h3>
                <p>If you already have an account, log in here!</p>
                <form action="includes/login.inc.php" method="post" required>
                    <div class="form-group">
                        <input class="form-control centre" type="text" name="uid" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control centre" type="password" name="pwd" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button class="btn" type="submit" name="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>