<?php
// login.php
// Inicia a sessão
session_start();
session_unset();
session_destroy();
header("Location:index.html");
