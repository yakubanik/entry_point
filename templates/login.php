<h1>Login</h1>
<form action="/auth/login" method="post">
    <label>
        Username<input type="text" name="username">
    </label><br><br>
    <label>
        Password<input type="password" name="password">
    </label><br>
    <input type="submit" value="Login">
</form>
<?php
session_start();
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}