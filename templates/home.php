<h1>HOME</h1>
<?php
session_start();
if (isset($_SESSION['user'])) {
    echo '<p> hello, ' . $_SESSION['user'] . '</p>';
    echo '<a href="/logout">Logout</a>';
} else {
    echo '<a href="/login">Login</a>';
}

?>
<br>
<a href="/get_form">get form</a>