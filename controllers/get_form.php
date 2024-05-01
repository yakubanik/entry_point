<?php
session_start();
session_unset();
foreach ($_GET as $get_key => $get_value) {
    if (!empty($get_value)) {
        $_SESSION[$get_key] = $get_value;
    }
}
header('Location: ' . '/get_form');
exit();