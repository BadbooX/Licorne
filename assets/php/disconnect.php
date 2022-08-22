<?php
session_start();
session_unset(); 
session_destroy();

header('location:connexionadmin.php?login_err=succesdisco');

?>