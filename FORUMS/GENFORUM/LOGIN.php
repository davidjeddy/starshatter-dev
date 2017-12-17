<?php
  require('forumlock.php');;
  require('forumuser.php');
  require('../data/forumtop-gen.php'); ?>


<tr><td colspan="5">
<form action="do_login.php" method="post">


<tr>
<td width="10%" class="fourfour"><font class="words2">Author:</font></td>
<td class="fourfour" colspan="4"><input class="input" name="login" value="" size="30" maxlength="30"></td>
</tr>

<tr>
<td width="10%" class="fourfour"><font class="words2">Password:</font></td>
<td class="fourfour" colspan="4"><input class="input" type="password" name="password" value="" size="30" maxlength="10"></td>
</tr>

<tr>
<td colspan="5" class="fourfour" align="center"><input class="submit" type="submit" name="submit" value="Login"></td>
</tr>


</form>
</td></tr>


<script src="../../SCRIPTS/contact-copyright-forum.js"></script>c
</table>
</div>
</div>
</body>
</html>