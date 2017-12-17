<?php
  require('forumlock.php');
  require('forumutil.php');
  require('forumuser.php');
  require('../data/forumtop-gfx.php'); ?>
 
<?php $profile = $forumusers[$req_author] ?>


<tr height="40" class="forumtitle">
  <td colspan="5" class="fourfour"><font class="newtitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Profile for <?php echo $profile['login'] ?></font></td>
</tr>

<tr><td colspan="1" width="20%" class="fourfour"><font class="words2">Author:</font></td>
<td colspan="4" width="80%" class="fourfour"><font class="words2"><?php echo $profile['login'] ?></font></td></tr>
<tr><td colspan="1" width="20%" class="fourfour"><font class="words2">In Real Life:</font></td>
<td colspan="4" width="80%" class="fourfour"><font class="words2"><?php echo $profile['irl'] ?></font></td></tr>
<tr><td colspan="1" width="20%" class="fourfour"><font class="words2">Registered:</font></td>
<td colspan="4" width="80%" class="fourfour"><font class="words2"><?php echo $profile['registered'] ?></td></tr>
<tr><td colspan="1" width="20%" class="fourfour"><font class="words2">Posts:</font></td>
<td colspan="4" width="80%" class="fourfour"><font class="words2"><?php echo $profile['posts'] ?></font></td></tr>
<tr><td colspan="1" width="20%" class="fourfour"><font class="words2">Email:</font></td>
<td colspan="4" width="80%" class="fourfour"><font class="words2"><a href="mailto:<?php echo $profile['email'] ?>" class="shipdesigners"><?php echo $profile['email'] ?></a></font></td></tr>
<tr><td colspan="1" width="20%" class="fourfour"><font class="words2">Homepage:</font></td>
<td colspan="4" width="80%" class="fourfour"><font class="words2"><a href="<?php echo $profile['homepage'] ?>" class="shipdesigners"><?php echo $profile['homepage'] ?></a></font></td></tr>
<tr><td colspan="1" width="20%" class="fourfour"><font class="words2">Occupation:</font></td>
<td colspan="4" width="80%" class="fourfour"><font class="words2"><?php echo $profile['occupation'] ?></font></td></tr>
<tr><td colspan="1" width="20%" class="fourfour"><font class="words2">Location:</font></td>
<td colspan="4" width="80%" class="fourfour"><font class="words2"><?php echo $profile['location'] ?></font></td></tr>
<tr><td colspan="1" width="20%" class="fourfour"><font class="words2">Interests:</font></td>
<td colspan="4" width="80%" class="fourfour"><font class="words2"><?php echo $profile['interests'] ?></font></td></tr>
<tr><td colspan="1" width="20%" class="fourfour"><font class="words2">Messaging:</font></td>
<td colspan="4" width="80%" class="fourfour"><font class="words2"><?php echo $profile['msg'] ?></font></td></tr>


<script src="../../scripts/contact-copyright-forum.js"></script>
</table>
</div>
</div>
</body>
</html>