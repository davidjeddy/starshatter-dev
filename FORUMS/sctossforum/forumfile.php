<?php
  $forumtopics = array();
  $forumindex  = 0;

  function forum_loadFile($fname) {
    global $HTTP_SERVER_VARS;
    
    $fp = 0;
    
    // get contents of a file into a string
    $filename = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/ssd/forums/data/' . $fname;

    if (file_exists($filename))
      $fp = fopen($filename, "r");

    $contents = fread($fp, filesize ($filename));
    fclose($fp);
    
    return $contents;
  }

  function forum_saveFile($fname, $contents) {
    global $HTTP_SERVER_VARS;

    $filename = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/ssd/forums/data/' . $fname;
    $fp = fopen($filename, "w");
    $savedOK = (fwrite($fp, $contents) >= 0);
    fclose($fp);
    
    return $savedOK;
  }
?>
