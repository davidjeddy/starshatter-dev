<?php
  require('forumlock.php');
  require('forumutil.php');
  require('forumuser.php');
  
  $saveperm = false;
  $savedOK  = false;
  $errormsg = false;
  $uid      = 'invalid';
  $testuser = false;
  $found    = false;

  if (strlen($login) < 4 || strlen($password) < 4) {
    $errormsg = "Username / password must be atleast 4 characters (alpha numerical ONLY!).<br><br><a href=\"edit_profile.php?newauthor=true\" class=\"shipdesigners\">&#60;- Return to Profile</a><br>";
  }
  else {  
    $testuser = $forumusers[$login];
    $found    = (strcmp($testuser['login'], $login) == 0);

    if ($newaccount) {
      // return error page:  
      if (!$found) {
        $errormsg = forum_createUser();
        if (!$errormsg)
          $saveperm = true;
      }
      else {
        $errormsg = "A user with name \"$login\" already exists.  Please choose another name. <br><br><a href=\"edit_profile.php?newauthor=true\" class=\"shipdesigners\">&#60;- Return to Profile</a><br>";
      }
    }
    else if (!$found) {
      $errormsg = "No user by that name could be located.  Please check the spelling and try again...<br><br><a href=\"edit_profile.php?newauthor=true\" class=\"shipdesigners\">&#60;- Return to Profile</a><br>";
    }
    else {
      $errormsg = forum_updateUser($login);      
      if (!$errormsg)
        $saveperm = true;
    }
  }

  // do we have permission to save?
  if ($saveperm) {
    $savedOK = forum_saveUsers();
    header("Set-Cookie:author=$login;expires=Friday, 16-Jan-2037 00:00:00 GMT;\n\n"); 
  }
?>
<?php require('../data/forumtop-tech.php'); ?>


<tr>
	<td  colspan="5" class="fourfour"><font class="words2"><?php echo ($savedOK) ? "Saved Profile for $login" : "Could Not Save user profile for:  $login" ?>
<br><br>

<?php echo ($savedOK) ? "<a href=\"main.php\" class=\"shipdesigners\">&#60;- Return to Starshatter Dev. General Forum</a><br>" : "$errormsg <br>" ?>
</font>
</td>
</tr>

<script src="../../SCRIPTS/contact-copyright-forum.js"></script>
</table>
</div>
</div>
</body>
</html>