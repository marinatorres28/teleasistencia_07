<?php
session_start();
unset($_SESSION['username']);
header('Location: ../vista/login.php');