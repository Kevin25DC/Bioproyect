<?php

session_start();
session_destroy();

header("Location:../vista/login_view.html");

?>