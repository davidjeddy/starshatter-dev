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
    $errormsg = "Incorrect User / password.  Please check the spelling and try again...";
  }
  else {
    if (strcmp($testuser['password'], $password) == 0) {
      $errormsg = forum_createTopic();
      if (!$errormsg)
        $saveperm = true;
    }
    else {
      $errormsg = "ACCESS DENIED";
    }
  }

  // do we have permission to save?
  if ($saveperm) {
    $savedOK = forum_saveTopics();
    header("Location:main.php");
  }
?>
<?php require('../data/forumtop-gfx.php'); ?>
 
<tr>
  <td colspan="5" class="fourfour"><font class="words2">
  <?php echo ($savedOK) ? "Something's wrong. We could not created the new topic $subject" : "Could Not Create Topic: $subject" ?><br><br>
<!--document.history. back-->
</font>
</td>
</tr>
<script src="../../scripts/contact-copyright-forum.js"></script>
</table>
</div>
</div>
</body>
</html>