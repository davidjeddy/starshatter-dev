<?php
  require('forumlock.php');
  require('forumutil.php');
  require('forumuser.php');
  require('forumtopic.php');
  require('../data/forumtop-gen.php'); ?>
<tr>
<td colspan="5" class="sixsix">
<font class="newtitle">
<?php
    $newthread = false;
    $editmsg   = false;
    $deletemsg = false;
    $reply     = false;
    $submitmsg = "Submit Message";
    
    if (strcmp($action, 'new') == 0) { 
      $newthread = true;
    	echo "Start New Thread";
    }
    else if (strcmp($action, 'delete') == 0) {
      $deletemsg = true;
      $index = $topic;
      $m     = $msg;
      $topic = $forumtopics[$index];
      
      $thread = forum_loadThread($index);
      $msg    = $thread[$m];
      
      $subject = stripslashes($topic['subject']);
      
      if ($msg) {
        $subject = stripslashes($msg['subject']);
        $submitmsg = "Delete Message";
        echo "Delete Message: $subject";
      }
      else {
        $deletemsg = false;
        echo "Post Reply to Thread: $subject";
      }
    }
    else if (strcmp($action, 'edit') == 0) {
      $editmsg = true;
      $index = $topic;
      $m     = $msg;
      $topic = $forumtopics[$index];
      
      $thread = forum_loadThread($index);
      $msg    = $thread[$m];
      
      $subject = stripslashes($topic['subject']);
      
      if ($msg) {
        $subject = stripslashes($msg['subject']);
        $submitmsg = "Edit Message";
        echo "Edit Message: $subject";
      }
      else {
        $editmsg = false;
        echo "Post Reply to Thread: $subject";
      }
    }
    else {
      $index = $topic;
      $m     = $msg;
      $topic = $forumtopics[$index];
      
      $thread = forum_loadThread($index);
      $msg    = $thread[$m];
      
      $subject = stripslashes($topic['subject']);
      
      if ($msg) {
        $subject = stripslashes($msg['subject']);
        $reply   = $msg['message'];
        echo "Post Reply to Message: $subject";
      }
      else {
        echo "Post Reply to Thread: $subject";
      }
    }
?>
</font>
</td>
</tr>



<?php if ($newthread) { ?>
<form action="start_topic.php" method="post">
<?php } else if ($deletemsg) { ?>
<form action="post_delete.php" method="post">
<input type="hidden" name="topic" value="<?php echo $index ?>">
<input type="hidden" name="msg" value="<?php echo $m ?>">
<?php } else if ($editmsg) { ?>
<form action="post_edit.php" method="post">
<input type="hidden" name="topic" value="<?php echo $index ?>">
<input type="hidden" name="msg" value="<?php echo $m ?>">
<?php } else { ?>
<form action="post_reply.php" method="post">
<input type="hidden" name="topic" value="<?php echo $index ?>">
<?php } ?>

<!-- MESSAGE DATA -->
<tr>
<td colspan="1" class="fourfour" width="10%"><font class="words1">Author:</font></td>
<td colspan="4" class="fourfour" width="90%"><input class="input" name="login" value="<?php echo $author ?>" size="30" maxlength="30"></td>
</tr>
<tr>
<td colspan="1" class="fourfour"><font class="words1">Password:</font></td>
<td colspan="4" class="fourfour"><input class="input" type="password" name="password" value="" size="10" maxlength="10"></td>
</tr>

<?php if (!$deletemsg)
	{ 
?>
		<tr>
		<td colspan="1" class="fourfour"><font class="words1">Message Icon:</font></td>
		<td colspan="4" class="fourfour" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php $i = 0; $icons = array("post", "question", "smiley", "winkey", "grin", "cool", "sad", "mad"); foreach ($icons as $iname)
	{
?>
<input class="input"  type="radio" name="msgicon" value="<?php echo $iname ?>" <?php if ($i++ == 0) { echo "checked"; } ?> >
&nbsp;&nbsp;
<img src="../data/images/icon_<?php echo $iname ?>.gif" height="16" width="16" align="abscenter">
&nbsp;&nbsp;&nbsp;&nbsp;
<?php if ($i == 8) echo "<br>";
  }
?>

</td>
</tr>
<?php } ?>

<tr>
<td colspan="1" class="fourfour"><font class="words1">Subject:</font></td>
<td colspan="4" class="fourfour"><input class="input" name="subject" value="<?php echo $reply ? "RE: " . $subject : $subject ?>" size="35" maxlength="35"></td>
</tr>
<?php if (!$deletemsg) { ?>
<tr valign="top">
    <td colspan="1" class="fourfour"><font class="words1">Message:</font></td>
    <td colspan="4" class="fourfour">
<textarea class="textarea" name="msgbody" rows="10" cols="50" ><?php 
  if ($editmsg) {
    echo forum_cleanEditString($msg['message']);
  }
  else if ($reply) {
    echo '[quote]' . forum_cleanEditString($reply) . '[/quote]';
  }
?></textarea>
</td>
</tr>
<?php } ?>
<tr>
<td colspan="5" align="center" class="fourfour">
<input class="submit" type="submit" name="submit" value="<?php echo $submitmsg ?>">&nbsp;&nbsp;
<input class="submit" type="reset" name="reset" value="Clear Fields">
</td>
</tr>

<!--</table>-->
</form>

<p>

<!-- MESSAGE LIST -->
<?php
  if ($topic && !$deletemsg && !$editmsg) {
    $thread = forum_loadThread($topic['index']);
?>


<!--topic reviews-->
<tr >
<td colspan="5"><br><br><br></td>
</tr>
<tr >
<td class="sixsix" colspan="5" align="center">
<font class="newtitle">Topic Review</font></td>
</tr>

<?php
    foreach ($thread as $post) {
      if (!$post['post_d']) {
        $post['post_d'] = date('m.d.y', $post['timestamp']);
        $post['post_t'] = date('h.i A', $post['timestamp']);
      }
      
      $icon = $post['icon'];
      if (!$icon)
        $icon = 'post';
?>


<tr height="20" valign="top">
  <td rowspan="2" width="15%" class="fourfour"><font class="bigyellow"><span class="forumdark"><?php echo $post['author'] ?></span></font>
  </td>
  <td class="fourfour" colspan="5"><img src="../data/images/icon_<?php echo $icon ?>.gif" width="16" height="16">&nbsp;&nbsp;
  <font class="newtitle"><?php echo stripslashes($post['subject']) ?></font><br>
  <table width="100%"><tr><td align="left" class="fourfour"><font class="bigyellow">
  <span class="tinytext"><?php echo $post['post_d'] . ' ' . $post['post_t'] ?></span></font></td><td align="right">
  </td>
  </tr></table>
  </td>
</tr>

<tr valign="top">
  <td class="fourfour" colspan="5"><font class="bigyellow"><?php echo forum_prepString($post['message']) ?></font></td>
</tr>

<?php } ?>
</table>
<?php } ?>


</td>
<script src="../../scripts/contact-copyright-forum.js"></script>


</table>
</div>

</body>
</html>