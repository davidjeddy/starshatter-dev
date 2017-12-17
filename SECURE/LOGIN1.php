<?php
header("Set-Cookie:expires=Friday, 16-Jan-2037 00:00:00 GMT;\n\n");
setcookie("username","$username");
setcookie("password","$password");
header("Location:index1.php");
?>