<?php
session_start();
session_destroy();
header("location: ../Vista/login/index.php");
exit();
