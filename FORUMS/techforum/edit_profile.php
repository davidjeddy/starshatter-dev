<?php
  require('forumlock.php');
  require('forumuser.php');
  require('../data/forumtop-tech.php'); ?>
 
<tr><td colspan="5" class="sixsix"><font class="newtitle">
<?php if ($newauthor) { ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register New Author
<?php } else { ?>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Edit Profile for <?php echo $author ?>
<?php $newauthor = false; } ?>
</font></td>
</tr>


<form action="save_profile.php" method="post">
<input class="input" type="hidden" name="newaccount" value="<?php echo $newauthor ?>">

<!-- PROFILE DATA -->
<tr>

<td width="10%" colspan="1" class="fourfour"><font class="words2">Author:*</font></td>
<td width="90%" colspan="4" class="fourfour"><input class="input" name="login" value="<?php echo $newauthor ? '' : $author ?>" size="30" maxlength="30">
</td>
</tr>

<tr>
<td class="fourfour"><font class="words2">Password:*</font></td>
<td colspan="4"class="fourfour"><font class="words2">
<input class="input" type="password" name="password" value="" size="16" maxlength="16">
<?php if (!$newauthor) { ?>
New Password:</font> <input class="input" type="password" name="newpassword" value="" size="16" maxlength="16">
<?php } ?>
</td>
</tr>

<tr>
<td class="fourfour"><font class="words2">In Real Life:</font></td>
<td colspan="4"class="fourfour"><input class="input" name="irl" value="<?php echo $newauthor ? '' : $forumuser['irl'] ?>" size="30" maxlength="60"></td>
</tr>

<?php if (!$newauthor) { ?>
<tr>
<td class="fourfour"><font class="words2">Registered:</font></td>
<td colspan="4"class="fourfour"><font class="words2"><?php echo $forumuser['registered']?></font></td>
</tr>

<tr>
<td class="fourfour"><font class="words2">Posts:</font></td>
<td colspan="4"class="fourfour"><font class="words2"><?php echo $forumuser['posts']?></font></td>
</tr>

<?php } ?>
<tr>
<td class="fourfour"><font class="words2">Email:*</font></td>
<td colspan="4"class="fourfour">
<input class="input" name="email" value="<?php echo $newauthor ? '' : $forumuser['email']?>" size="30" maxlength="80"></td>
</tr>

<tr>
<td class="fourfour"><font class="words2">Homepage:</font></td>
<td colspan="4"class="fourfour"><input class="input" name="homepage" value="<?php echo $newauthor ? '' : $forumuser['homepage']?>" size="30" maxlength="80"></td>
</tr>

<tr>
<td class="fourfour"><font class="words2">Occupation:</font></td>
<td colspan="4"class="fourfour"><input class="input" name="occupation" value="<?php echo $newauthor ? '' : $forumuser['occupation']?>" size="30" maxlength="30"></td>
</tr>

<tr>
<td class="fourfour"><font class="words2">Location:</font></td><td colspan="4"class="fourfour"><input class="input" name="location" value="<?php echo $newauthor ? '' : $forumuser['location']?>" size="30" maxlength="30"></td>
</tr>

<tr>
<td class="fourfour"><font class="words2">Interests:</font></td><td colspan="4"class="fourfour">
<input class="input" name="interests" value="<?php echo $newauthor ? '' : $forumuser['interests']?>" size="30" maxlength="30"></td>
</tr>


<tr>
<td class="fourfour"><font class="words2">Signature:</font></td>
<td colspan="4"class="fourfour">

<textarea class="TEXTAREA" type="text" name="sig" rows=3 cols=30><?php echo $newauthor ? '' : $forumuser['sig']?>
</textarea></td>

</tr>
<tr>
<td class="fourfour" colspan="5" align="center">
<input class="submit" type="submit" name="submit" value="Submit Changes">&nbsp;&nbsp;
<input class="submit" type="reset" name="reset" value="Reset Fields">
</td></tr>


</form>

</td>
</tr>


 
</table>
</div>
</div>
</body>
</html>