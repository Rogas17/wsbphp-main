<?php
    session_start();
    //echo session_status();
    session_destroy();
    //echo session_status();
    header("location: ../pages/index.php?logout=1");
?>