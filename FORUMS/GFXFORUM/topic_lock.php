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
      $lockdate = date("m.d.y h:i A");
      $errormsg = forum_extendThread($topic, $login, 'not', 'THREAD LOCKED', '[!!!]Thread locked by ' . $login . ' as of '. $lockdate . '[/!!!]');
      
      if (!$errormsg) {
        $errormsg = forum_lockTopic($topic);
        if (!$errormsg)
          $saveperm = true;
      }
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
<?php require('../data/forumtop-gfx.php'); ?>

<tr>
  <td colspan="5" class="fourfour"><font class="newtitle">
  <?php //echo ($savedOK) ? "Locked Thread" : "Thread Locked" ?>
<?php echo"Locked Thread<BR>"?>


<?php// echo ($savedOK) ? "<a href=\"/forum\"><span class=\"whitelink\">Return to main forum</span></a><br>" : "$errormsg <br>" ?>

</font>
</td></tr>
<script src="../../SCRIPTS/contact-copyright-forum.js"></script>
</table>
</div>
</div>
</body>
</html>