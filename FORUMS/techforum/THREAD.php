<?php
  require('forumlock.php');
  require('forumutil.php');
  require('forumuser.php');
  require('forumtopic.php');
  $lastvisit = time();
  header("Set-Cookie:lastvisit=$lastvisit;expires=Friday, 16-Jan-2037 00:00:00 GMT;\n\n"); 
  require('../data/forumtop-tech.php'); ?>


<?php	
  $index = $topic;
  $topic = $forumtopics[$index];
  $prevOK = false;
  $nextOK = false;
  
  if ($index > 1) $prevOK = true;
  if ($index < count($forumtopics)) $nextOK = true;
?>

<!-- THREAD BANNER -->
<tr>
<td colspan="3"  class="sixsix" align="left"><font class="newtitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $topic ? stripslashes($topic['subject']) : "Could not load requested thread" ?></font>
</td>
<td colspan="2" class="sixsix" align="right">
<font class="sigfont">
<?php if (!$topic['locked'] && strcmp($author, 'Admin')==0) { ?><a href="topic.php?action=lock&topic=<?php echo $index?>" class="shipdesigners">lock thread</a> |
<?php } if ($prevOK) { ?><a href="thread.php?topic=<?php echo $index-1?>" class="shipdesigners"><?php } ?>previous<?php if ($prevOK) { ?></a><?php } ?> |
<?php if ($topic['locked']) { ?>LOCKED | 
<?php } else { ?><a href="post.php?topic=<?php echo $topic['index'] ?>" class="shipdesigners">post reply</a> | 
<?php } if ($nextOK) { ?><a href="thread.php?topic=<?php echo $index+1?>" class="shipdesigners"><?php } ?>next<?php if ($prevOK) { ?></a><?php } ?>
</font>
</td>
</tr>



<!-- MESSAGE LIST -->
<?php	
  if ($topic) {
    $thread = forum_loadThread($topic['index']);

    $pagelen = 10;
    $npages  = (int) ((count($thread)-1) / $pagelen) + 1;
    $i = 0;
    $skip    = $pagelen * $page;
  
?>


<?php if ($npages > 1) { ?>
<tr><td class="sixsix" colspan="5">
<font class="bigyellow">
Pages:&nbsp;&nbsp;&nbsp;&nbsp;</font>
<font class="words2">
<?php 
    for ($n = 0; $n < $npages; $n++) {
      if ($n == $page) echo '[<b>' . ($n+1) . '</b>]';
      else echo '<a href="thread.php?topic=' . $topic['index'] . '&page=' . $n . '"><span class="forumdark">' . ($n+1) . '</span></a>';
      echo '&nbsp;&nbsp;&nbsp;';
    }
?>
</font></td></tr>
<?php	} ?>

<?php	
    foreach ($thread as $post) {
if ($skip-- > 0)continue;
if ($i++ >= $pagelen) break;

if (!$post['post_d']) {
  $post['post_d'] = date('m.d.y', $post['timestamp']);
  $post['post_t'] = date('h.i A', $post['timestamp']);
}

$icon = $post['icon'];
if (!$icon)
  $icon = 'post';
?>
<tr>
  <td colspan="2" class="fourfour" align="left" valign="top">
  <a href="profile.php?req_author=<?php echo $post['author']?>" class="bigyellow"><?php echo $post['author'] ?></a><br><br><font class="words2">
  Posts: <?php echo $forumusers[$post['author']]['posts'] ?><br>
  Registered: <?php echo $forumusers[$post['author']]['registered'] ?>
  </font>
  </td>
  <td colspan="3" class="fourfour"><font class="words3">
  <img src="../data/images/icon_<?php echo $icon ?>.gif" width="16" height="16"><font class="words2">&nbsp;&nbsp;<?php echo stripslashes($post['subject']) ?></font><br>
<table width="100%" border="0" bordercolor="#ffffff" cellpadding="0" cellspacing="0">
<tr>
<td align="center"><font class="shipdesigners">
<?php echo $post['post_d'] . ' ' . $post['post_t'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="profile.php?req_author=<?php echo $post['author']?>" class="shipdesigners">profile</a> |
  <a href="mailto:<?php echo $forumusers[$post['author']]['email'] ?>" class="shipdesigners">mail</a>
  <?php if (!$topic['locked']) { ?> | 
  <a href="post.php?action=edit&topic=<?php echo $topic['index'] ?>&msg=<?php echo $post['index'] ?>" class="shipdesigners">edit</a> | 
  <a href="post.php?action=delete&topic=<?php echo $topic['index'] ?>&msg=<?php echo $post['index'] ?>" class="shipdesigners">delete</a> |
  <a href="post.php?topic=<?php echo $topic['index'] ?>&msg=<?php echo $post['index'] ?>" class="shipdesigners">reply</a>
  <?php } ?>
  </font>
  </td>
</tr>
<tr valign="top" >
  <td class="fourfour"><font class="words2"><br><?php echo forum_prepString($post['message']) ?></font></td>
</tr>
</table>

<?php	} ?>
</font></td></tr>

<?php if ($npages > 1) { ?>
<tr><td class="sixsix" colspan="5">
<font class="bigyellow">
Pages:&nbsp;&nbsp;&nbsp;&nbsp;</font>
<font class="words2">
<?php 
    for ($n = 0; $n < $npages; $n++) {
if ($n == $page) echo '[<b>' . ($n+1) . '</b>]';
else echo '<a href="/forum/thread.php?topic=' . $topic['index'] . '&page=' . $n . '"><span class="forumdark">' . ($n+1) . '</span></a>';
echo '&nbsp;&nbsp;&nbsp;';
    }
?>
</font></td></tr>
<?php	} ?>


<?php	} ?>
<tr>
<td width="5%">&nbsp;&nbsp;&nbsp;</td>
<td width="5%">&nbsp;&nbsp;&nbsp;</td>
<td width="60%">&nbsp;&nbsp;&nbsp;</td>
<td width="10%">&nbsp;&nbsp;&nbsp;</td>
<td width="20%">&nbsp;&nbsp;&nbsp;</td>
</tr>

<script src="../../SCRIPTS/contact-copyright-forum.js"></script>
</table>
</div>
</div>
</body>
</html>