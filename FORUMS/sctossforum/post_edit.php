<?php
  require('forumlock.php');
  require('forumutil.php');
  require('forumuser.php');
  require('forumtopic.php');
  
  $saveperm = false;
  $savedOK  = false;
  $errormsg = false;
  $uid      = 'invalid';
  $testuser = false;
  $found    = false;

  if (strlen($login) > 3 && strlen($password) > 3) {
    $testuser = $forumusers[$login];
    $found    = (strcmp($testuser['login'], $login) == 0);
  }

  if (!$found) {
    $errormsg = "No user by that name could be located.  Please check the spelling and try again...";
  }
  else {
    if (strcmp($testuser['password'], $password) == 0) {
      $editdate = date("m.d.y h:i A");
      $errormsg = forum_editThread($topic, $msg, $login, $msgicon, $subject,
                                   forum_cleanString($msgbody) . 
                                   "<br><br><span class='forumedit'>Message Edited by $login as of $editdate</span>");
      if (!$errormsg)
        $saveperm = true;
    }
    else {
      $errormsg = "ACCESS DENIED";
    }
  }

  // do we have permission to save?
  if ($saveperm) {
    header("Location:thread.php?topic=$topic");
  }
?>
<?php require('../data/forumtop-sctoss.phperal.php'); ?>
 
<table width="100%"><tr><td width="20">&nbsp;</td><td>

<!-- PROFILE BANNER -->
<table width="100%" cellpadding="4" cellspacing="2" class="forumborders">
<tr height="40" class="forumtitle">
  <td>
  <?php echo ($savedOK) ? "Modified Post" : "Could Not Edit Post" ?>
  </td>
</tr>
</table>

<p>

<?php echo ($savedOK) ? "<a href=\"/forum\"><span class=\"whitelink\">Return to main forum</span></a><br>" :
                        "$errormsg <br>" ?>

</td><td width="20">&nbsp;</td></tr></table>


<table>
<tr valign="top">
<td width="780">
<span class="tinytext"><center>
<br><br>
Copyright © 1997-2001 by John DiCamillo.
All rights Reserved. 
</center></span>
</td>
</tr>
</table>

</body>
</html>
