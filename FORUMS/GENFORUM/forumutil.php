<?php
  // return true if $str is suitable as a name
  function forum_checkString($str, $maxlen=40) {
    if (strlen($str) > $maxlen) return false;
    
    if (strstr($str, '<')) return false;
    if (strstr($str, '>')) return false;
    if (strstr($str, '&')) return false;
    if (strstr($str, '"')) return false;
    if (strstr($str, '\\')) return false;
    
    return true;
  }

  // prepare string for display in an html page  
  function forum_prepString($str) {
    $message = chop($str);

    if (strlen($message) >= 3500) {
      $message = substr($message, 0, 3480) . "[!!!]...TRUNCATED[/!!!]";
    }

    // Strip out html tags
    $message = stripslashes($message);

    // convert http: references to links:
    $message = ereg_replace('http://[[:alnum:]]+(\.[[:alnum:]~_-]+)+([/\.][[:alnum:]?&=~_-]+)*/*', 
                            '<a href="\\0" target="_blank"><span class="whitelink">\\0</span></a>',$message); 

    // convert forum codes:
    $message = str_replace('[!!!]',  '<span class="forumedit">',     $message);
    $message = str_replace('[/!!!]',  '</span>',     $message);
    $message = str_replace('[n]',  '<br>',    $message);
    $message = str_replace('[b]',  '<b>',     $message);
    $message = str_replace('[/b]', '</b>',    $message);
    $message = str_replace('[i]', '<i>',      $message);
    $message = str_replace('[/i]',  '</i>',   $message);
    $message = str_replace('[u]', '<u>',      $message);
    $message = str_replace('[/u]',  '</u>',   $message);
    $message = str_replace('[c]', '<pre>',   $message);
    $message = str_replace('[/c]',  '</pre>',$message);
    
    // convert smilies:
    $message = str_replace(':)', '<img src="../data/images/icon_smiley.gif" width="16" height="16">', $message);
    $message = str_replace(';)', '<img src="../data/images/icon_winkey.gif" width="16" height="16">', $message);
    $message = str_replace(':D', '<img src="../data/images/icon_grin.gif"   width="16" height="16">', $message);
    $message = str_replace('B)', '<img src="../data/images/icon_cool.gif"   width="16" height="16">', $message);
    $message = str_replace(':(', '<img src="../data/images/icon_sad.gif"    width="16" height="16">', $message);
    $message = str_replace('>(', '<img src="../data/images/icon_mad.gif"    width="16" height="16">', $message);
    $message = str_replace(':o', '<img src="../data/images/icon_oh.gif"     width="16" height="16">', $message);
    
    $message = str_replace('[quote]',  '<blockquote><span class="tinytext">quote:</span><hr><i>', $message);
    $message = str_replace('[/quote]', '</i><hr></blockquote>', $message);

    $message = str_replace("\r\n", '<br>',    $message);
    $message = str_replace("\n",   '<br>',    $message);
    
    return $message;
  }

  // prepare string for storage  
  function forum_cleanString($str) {
    $message = chop($str);

    if (strlen($message) >= 3500) {
      $message = substr($message, 0, 3480) . "[!!!]...TRUNCATED[/!!!]";
    }

    // Strip out html tags
    $message = stripslashes($message);
    $message = preg_replace("'<[\/\!]*?[^<>]*?>'si", "", $message);

    $message = str_replace("\r\n", '[n]',    $message);
    $message = str_replace("\n",   '[n]',    $message);
    
    return $message;
  }

  // prepare string for display in an edit box  
  function forum_cleanEditString($str) {
    $message = chop($str);

    if (strlen($message) >= 4000) {
      $message = substr($message, 0, 3980) . "...TRUNCATED";
    }

    $message = str_replace('<b>',  '[b]',    $message);
    $message = str_replace('</b>', '[/b]',   $message);
    $message = str_replace('<i>',  '[i]',    $message);
    $message = str_replace('</i>', '[/i]',   $message);
    $message = str_replace('<u>',  '[u]',    $message);
    $message = str_replace('</u>', '[/u]',   $message);
    $message = str_replace('<code>', '[c]',  $message);
    $message = str_replace('</code>','[/c]', $message);

    $message = str_replace('[n]', "\r\n",   $message);
    $message = str_replace('[n]', "\n",     $message);

    // Strip out html tags
    $message = stripslashes($message);
    $message = preg_replace("'<[\/\!]*?[^<>]*?>'si", "", $message);
    
    return $message;
  }
?>
