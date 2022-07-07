<?php

session_start();

session_destroy();

echo "you have been loged out. <a href='index.php'>click here </a> to return";
?>