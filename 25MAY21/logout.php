<?php
require('include/database.php');
require('include/function.php');
unset($_SESSION['UNAME']);
unset($_SESSION['UID']);
redirect('index.php');
?>