<?php
session_start();
session_destroy();
    header("Location: ../views/usuarios/login.php");
    exit();

