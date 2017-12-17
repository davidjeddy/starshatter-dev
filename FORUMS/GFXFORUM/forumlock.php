<?php
    $lockFile = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/forum/data/FORUMLOCK';
    
    if (file_exists($lockFile)) {
      header("Location:locked.htm");
      exit();
    }
?>
