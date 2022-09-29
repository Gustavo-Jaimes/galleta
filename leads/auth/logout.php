<?php
    session_start();
    if (session_destroy()) {
      header('Location: login.php?closed');
    } 
    else {
      echo "There was a problem during logging out. We're sorry. <br> If the problem persists, contact the administrator.";
    }
?>
