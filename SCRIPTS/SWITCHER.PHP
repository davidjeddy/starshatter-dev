<?php
setcookie ('sitestyle', $set, time()+31536000, '/', 'bitsy/ssd/', '0');
header("Location: $HTTP_REFERER");
?>
