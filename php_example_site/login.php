<?php $title = 'Home';
require_once 'templates/header.php';
?>
<div class="row">
    <h2 class="large-4 large-offset-4 medium-6 medium-offset-3 small-8 small-offset-2 columns subheader">Login</h2>
</div>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" id="login-form" class="large-4 large-offset-4 medium-6 medium-offset-3 small-8 small-offset-2 columns">
    <div class="row collapse postfix-radius">
        <div class="large-3 small-3 columns">
            <label for="username" class="prefix">Username</label>
        </div>
        <div class="large-9 small-9 columns">
            <input id="username" name="username" type="text" placeholder="Enter Username Here">
        </div>
    </div>
    <div class="row collapse postfix-radius">
        <div class="large-3 small-3 columns">
            <label for="password" class="prefix">Password</label>
        </div>
        <div class="large-9 small-9 columns">
            <input id="password" name="password" type="password" placeholder="At least 5 characters">
        </div>
    </div>
    <div class="row text-right">
        <input id="remember" name="remember" type="checkbox" value="remember">
        <label for="remember" class="inline">Remember Me</label>
    </div>
    <div class="row text-center">
        <div class="small-6 columns">
            <input class="button radius small" type="reset" id="reset" value="Clear">
        </div>
        <div class="small-6 columns">
            <input class="button radius small success" type="submit" id="submit" name="submit" value="Login">
        </div>
    </div>
</form>
<?php require_once 'templates/footer.php';?>