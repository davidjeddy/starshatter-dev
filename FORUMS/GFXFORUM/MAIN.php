<?php
  require('forumlock.php');
  require('forumutil.php');
  require('forumuser.php');
  require('forumtopic.php');
  require('../data/forumtop-gfx.php'); ?>


<!-- THREAD LIST -->

<tr>
  <td width="50%" colspan="2" class="fourfour"><a href="main.php?sort=<?php echo $sort==1 ? -1 : 1 ?>"><font class="words3">Topic</font></a></td>
  <td width="15%" class="fourfour"><a href="main.php?sort=<?php echo $sort==2 ? -2 : 2 ?>"><font class="words3">Author</font></a></td>
  <td width="15%" class="fourfour"><a href="main.php?sort=<?php echo $sort==3 ? -3 : 3 ?>"><font class="words3">Replies</font></a></td>
  <td width="20%" class="fourfour" align="right"><a href="main.php?sort=<?php echo $sort==4 ? -4 : 4 ?>"><font class="words3">Last Post</font></a></td>
</tr>


<?php
  if      ($sort ==  1) uasort($forumtopics, 'forum_topicSort1');
  else if ($sort == -1) uasort($forumtopics, 'forum_topicSort1r');
  else if ($sort ==  2) uasort($forumtopics, 'forum_topicSort2');
  else if ($sort == -2) uasort($forumtopics, 'forum_topicSort2r');
  else if ($sort ==  3) uasort($forumtopics, 'forum_topicSort3');
  else if ($sort == -3) uasort($forumtopics, 'forum_topicSort3r');
  else if ($sort == -4) uasort($forumtopics, 'forum_topicSort4r');
  else                  uasort($forumtopics, 'forum_topicSort4');  // default, sort by reverse timestamp

  $pagelen = 10;
  $npages  = (int) ((count($forumtopics)-1) / $pagelen) + 1;
  $i       = 0;
  $skip    = $pagelen * $page;
  
  foreach ($forumtopics as $topic) {
    if ($skip-- > 0)      continue;
    if ($i++ >= $pagelen) break;
      
    if (!$topic['post_d']) {
      $topic['post_d'] = date('m.d.y', $topic['timestamp']);
      $topic['post_t'] = date('h.i A', $topic['timestamp']);
    }
    
    $icon = $topic['icon'];
    if (!$topic || !$icon)
      $icon = 'post';
?>
<tr>
  <td colspan="2" class="fourfour"align="left"><font class="words1">
  <?php
    $timestamp = $topic['timestamp'];
    if ($topic['locked'])
      echo '<img src="../data/images/thread_locked.gif" width="16" height="16" align="abscenter">';
    else if ($topic['timestamp'] > $lastvisit-60)
      echo '<img src="../data/images/thread_new.gif" width="16" height="16" align="abscenter">';
    else
      echo '<img src="../data/images/thread_old.gif" width="16" height="16" align="abscenter">';
  ?>&nbsp;&nbsp;
  <img src="../data/images/icon_<?php echo $icon ?>.gif" width="16" height="16" align="abscenter">
  &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="thread.php?topic=<?php echo $topic['index']?>" class="shipdesigners"><?php echo stripslashes($topic['subject']) ?></a></font>
</td>

  <td nowrap class="fourfour" align="center"><font class="words1"><?php echo stripslashes($topic['author']) ?></font></td>
<!--topics-->
  <td nowrap class="fourfour" align="center"><font class="words1"><?php echo $topic['posts']-1 ?></font></td>
  <td nowrap class="fourfour" align="right"><font class="words1"><?php echo $topic['post_d'] ?>&nbsp;&nbsp;&nbsp;<?php echo $topic['post_t'] ?></font></td>
</tr>
<?php
    if (strcmp($band, "") == 0)
  	  $band = "";
    else
      $band = "";
  }
?>

<?php if ($npages > 1) { ?>
<tr><td colspan="4" class="forumdark">
Pages:&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
    for ($n = 0; $n < $npages; $n++) {
      if ($n == $page) echo '[<b>' . ($n+1) . '</b>]';
      else echo '<a href="/forum/main.php?sort=' . $sort . '&page=' . $n . '">' . ($n+1) . '</a>';
      echo '&nbsp;&nbsp;&nbsp;';
    }
?>
</td></tr>
<?php } ?>



<script src="../../SCRIPTS/contact-copyright-forum.js"></script>
</table>
</div>
</div>
</body>
</html>