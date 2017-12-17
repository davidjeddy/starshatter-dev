<?php
  require('forumlock.php');
  require('forumutil.php');
  require('forumuser.php');
  require('forumtopic.php');
?>
<?php require('../data/forumtop-gfx.php'); ?>

<tr>
	<td class="fourfour"  colspan="5" class="fourfour">
	<font class="newtitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
    if (strcmp($action, 'lock') == 0) {
      $locktopic = true;
      $submitmsg = "Lock Thread";
      $index = $topic;
      $topic = $forumtopics[$index];
      $subject = stripslashes($topic['subject']);
      
      echo "Lock Thread: $subject";
    }
    else {
      echo "You rang?";
    }
?>
	</td>
</tr>




<?php if ($locktopic) { ?>
<form action="topic_lock.php" method="post">
<input type="hidden" name="topic" value="<?php echo $index ?>">
<?php } else { ?>
<form action="main.php" method="post">
<?php } ?>

<!-- MESSAGE DATA -->

<tr><td class="fourfour"  width="20%" ><font class="words2">Admin</font></td>
<td class="fourfour" width="80%"><input name="login" value="<?php echo $author ?>" size="30" maxlength="30"></td></tr>
<tr><td class="fourfour"  width="20%"><font class="words2">Password</font></td>
<td class="fourfour"  width="80%"><input type="password" name="password" value="" size="10" maxlength="10"></td></tr>
<tr><td class="fourfour"  width="20%"><font class="words2">Message Subject</font></td>
<td class="fourfour"  width="80%"><font class="words2"><?php echo $subject ?></font></td></tr>
<tr><td class="fourfour"></td><td class="fourfour">
<input type="submit" name="submit" value="<?php echo $submitmsg ?>">&nbsp;&nbsp;
<input type="reset" name="reset" value="Clear Fields">
</td></tr>

</form>

<p>

<!-- MESSAGE LIST -->
<?php
  if ($topic) {
    $thread = forum_loadThread($topic['index']);
?>

<tr height="40" class="forumheader"><td class="fourfour"  colspan="2" align="left"><font class="newtitle">Topic Review</font></td></tr>
<?php
    foreach ($thread as $post) {
      if (!$post['post_d']) {
        $post['post_d'] = date('m.d.y', $post['timestamp']);
        $post['post_t'] = date('h.i A', $post['timestamp']);
      }
?>

<tr height="20" valign="top" class="forumdark">

  <td class="fourfour" rowspan="2" width="15%"><font class="words2"><?php echo $post['author'] ?></font></td>
  <td class="fourfour" width="85%"><font class="words2"><?php echo stripslashes($post['subject']) ?><br>
  <table width="100%"><tr><td class="fourfour" align="left">
  <font class="words2"><?php echo $post['post_d'] . ' ' . $post['post_t'] ?></font></td>
  <td class="fourfour"  align="right">
  </td></tr></table>
  </td>
</tr>
<tr valign="top" >
  <td class="fourfour"  width="85%"><font class="words2"><?php echo forum_prepString($post['message']) ?></font></td>
</tr>

<?php } ?>

<?php } ?>


<script src="../../SCRIPTS/contact-copyright-forum.js"></script>
</table>
</div>
</div>
</body>
</html>