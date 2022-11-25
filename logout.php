<?php
//iniciar e verificar a sessão que está inciada
session_start();
//remove a sessão
session_destroy();
header('location: index.php');
exit;
