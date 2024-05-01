<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'lol' && $password == 'lol'){
    $_SESSION['user'] = 'lol';
    header('Location: ' . '/');
} else {
    $_SESSION['message'] = 'invalid username or password';
    header('Location: ' . '/login');
}