<?php
  $forumusers = array();

  function forum_loadUsers() {
    global $forumusers;
    global $HTTP_SERVER_VARS;
    
    $user     = array();
    $userFile = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/ssd/forums/data/users.txt';
    $fp       = 0;

    if (file_exists($userFile))
      $fp = fopen($userFile, "r");

    if ($fp) {
      while (!feof($fp)) {
        $buffer = rtrim(fgets($fp, 4096));
      
        if (strcmp($buffer, '###') == 0) {
          $forumusers[$uid] = $user;
          $user = array();
        }
        else {
          $colon = strpos($buffer, ":");
          $key   = substr($buffer, 0, $colon);
          $val   = substr($buffer, $colon+1);

          if (strcmp($key, 'login') == 0) {
            $uid = $val;
          }
          
          $user[$key] = $val;
        }
      }
    }
  }

  function forum_saveUsers() {
    global $forumusers;
    global $HTTP_SERVER_VARS;

    $savedOK  = false;    
    $userFile = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/ssd/forums/data/users.txt';
    $fp = fopen($userFile, "w");
  
    if ($fp) {
      foreach ($forumusers as $u) {
        reset ($u);
        while (list ($key, $val) = each($u)) {
          fputs($fp, $key . ":" . $val . "\n");
        }
      
        fputs($fp, "###\n");
      }

      fclose($fp);
      $savedOK = true;
    }
    
    return $savedOK;
  }
    
  function forum_addUser($user) {
    global $forumusers;
    $login = $user['login'];
    $forumusers[$login] = $user;
  }
  
  function forum_createUser() {
    global  $forumusers;
    global  $login,
				    $password,
				    $irl,
				    $email,
				    $homepage,
				    $occupation,
				    $location,
				    $interests,
				    $icq,
				    $sig;

    if (strlen($login) < 4) return "Invalid login name (must be at least 4 characters)";
    if (strlen($password) < 4) return "Invalid password (must be at least 4 characters)";

    if (!forum_checkString($login)) return "Invalid login name";
    if (!forum_checkString($password)) return "Invalid password";
    if (!forum_checkString($irl)) return "Invalid personal name";
    if (!forum_checkString($homepage)) return "Invalid homepage";
    if (!forum_checkString($email)) return "Invalid email address";
    if (!forum_checkString($occupation)) return "Invalid occupation";
    if (!forum_checkString($location)) return "Invalid location";
    if (!forum_checkString($interests)) return "Invalid interests";
    if (!forum_checkString($icq)) return "Invalid ICQ number";

    $newuser = array(
      'login'       => $login,
      'password'    => $password,
      'irl'         => $irl,
      'registered'  => date("m.d.y"),
      'posts'       => 0,
      'email'       => $email,
      'homepage'    => $homepage,
      'occupation'  => $occupation,
      'location'    => $location,
      'interests'   => $interests,
      'icq'         => $icq,
      'sig'         => forum_cleanString($sig)
    );
    
    $forumusers[$login] = $newuser;
    return false;
  }
  
  function forum_updateUser($login) {
    global  $forumusers;
    global  $password, $newpassword,
				    $irl,
				    $homepage,
				    $occupation,
				    $location,
				    $interests,
				    $icq,
				    $sig;

    $testuser = $forumusers[$login];
    
    if (!$testuser) return "Invalid user $login";
    
    if (strcmp($testuser['password'], $password) == 0) {
      if (strlen($newpassword) > 0 && strlen($newpassword) < 4) return "Invalid password (must be at least 4 characters)";
	    if (!forum_checkString($login)) return "Invalid login name";
	    if (!forum_checkString($newpassword)) return "Invalid password";
	    if (!forum_checkString($irl)) return "Invalid personal name";
	    if (!forum_checkString($homepage)) return "Invalid homepage";
	    if (!forum_checkString($email)) return "Invalid email address";
	    if (!forum_checkString($occupation)) return "Invalid occupation";
	    if (!forum_checkString($location)) return "Invalid location";
	    if (!forum_checkString($interests)) return "Invalid interests";
	    if (!forum_checkString($icq)) return "Invalid ICQ number";

      if ($newpassword)
      $testuser['password']   = $newpassword;
      $testuser['irl']        = $irl;
      $testuser['homepage']   = $homepage;
      $testuser['occupation'] = $occupation;
      $testuser['location']   = $location;
      $testuser['interests']  = $interests;
      $testuser['icq']        = $icq;
      $testuser['sig']        = forum_cleanString($sig);
      
      forum_addUser($testuser);
      return false;
    }
    
    return "ACCESS DENIED";
  }

  forum_loadUsers();
  $forumuser = $forumusers[$author];
?>
