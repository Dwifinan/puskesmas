<?php
session_start();
unset($_SESSION['auth']);
session_unset();
header('location: index.php');
exit;