<?php
require '../classes/AuthClass.php';

session_start();

if (isset($_POST['login_submit'])) {
    $auth = new Auth();
    $auth->loginAction();
}

if (isset($_GET['logout'])) {
    $auth = new Auth();
    $auth->logoutAction($_GET['logout']);
}
