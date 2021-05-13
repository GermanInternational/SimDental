<?php
session_start();

unset($_SESSION['nombre']);
unset($_SESSION["contra"]);
unset($_SESSION["rol"]);

session_destroy();
header('Location: ../index.html');

?>