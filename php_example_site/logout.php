<?php
session_start();
$_SESSION = null;
session_unset();
session_destroy();
$_COOKIE = null;
unset($_COOKIE);

