<?php
    session_start();
    session_destroy();
    die('{success:true}');
?>