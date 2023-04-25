<?php

include "../header.php";

//redirect user from login page if they are already logged in
if (isset($_SESSION['user_uid'])) {
    header("Location: ../");
    exit();
}
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
                        <input class="form-control centre" type="password" name="pwdrepeat"
                            placeholder="Repeat password" required>
                    </div>
                    <div class="form-group"><input class="form-control centre" type="text" name="email"
                            placeholder="Email" required></div>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

</html>