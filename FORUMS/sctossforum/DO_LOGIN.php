<?php
  require('forumlock.php');
  require('forumuser.php');
  
  $loginOK  = false;
  $errormsg = '';
  $uid      = 'invalid';
  $testuser = false;
  $found    = false;

  if (strlen($login) > 3 && strlen($password) > 3) {
    $testuser = $forumusers[$login];
    $found    = (strcmp($testuser['login'], $login) == 0);
  }

  if (!$found) {
    $errormsg = "Incorrect Username / password. Please go back and try again.";
  }
  else {
    $testuser = $forumusers[$login];
    
    if (strcmp($testuser['password'], $password) == 0) {
      $loginOK      = true;
    }
    else {
      $errormsg = "AUTHORIZATION DENIED<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You have MAXed out your attempts for login in. Please find youe username / password and try again later.";
    }
  }

  // do credentials match?
  if ($loginOK) {
    header("Location:main.php");
    header("Set-Cookie:author=$login;expires=Friday, 16-Jan-2037 00:00:00 GMT;\n\n"); 
  }
?>
<?php require('../data/forumtop-sctoss.php'); ?>
 
<tr>
<td class="fourfour" colspan="5">
<font class="bigyellow"><?php echo ($loginOK) ? "Welcome $login" : "ACCESS DENIED" ?></font><br>
<font class="words2">&nbsp;&nbsp;&nbsp;<?php echo ($loginOK) ? "<a href=\"/forum\"><span class=\"whitelink\">Continue...</span></a><br>" : "$errormsg <br>" ?></font>
<p align="left">
<a href="login.php" class="shipdesigners">&#60;- RETURN TO LOGIN</a>
</p>
</td></tr>

<script src="../../SCRIPTS/contact-copyright-forum.js"></script>
</table>
</div>
</div>
</body>
</html>
