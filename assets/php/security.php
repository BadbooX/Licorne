<?php
if($_SESSION['logged'] != 7) {
            session_unset(); 
            session_destroy();
            header('Location:connexionadmin.php?login_err=session');
        }
        ?>