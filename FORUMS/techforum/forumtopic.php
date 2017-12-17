<?php
  $forumtopics = array();
  $forumindex  = 0;

  function forum_loadTopics() {
    global $forumtopics;
    global $forumindex;
    global $HTTP_SERVER_VARS;
    
    $topic     = array();
    $topicFile = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/ssd/forums/data/tech.php-topics.txt';
    $fp        = 0;
    
    if (file_exists($topicFile))
      $fp = fopen($topicFile, "r");
  
    if ($fp) {
      while (!feof($fp)) {
        $buffer = rtrim(fgets($fp, 4096));
      
        if (strcmp($buffer, '###') == 0)
			{
				$forumtopics[$tid] = $topic;
				$topic = array();
			}
        else {
          $colon = strpos($buffer, ":");
          $key   = substr($buffer, 0, $colon);
          $val   = substr($buffer, $colon+1);

          if (strcmp($key, 'index') == 0) {
            $tid = $val;
            
            if ((int) $tid >= $forumindex) {
              $forumindex = (int) $tid;
            }
          }
          
          $topic[$key] = $val;
        }
      }
    }
  }

  function forum_saveTopics() {
    global $forumtopics;
    global $HTTP_SERVER_VARS;

    $savedOK   = false;    
    $topicFile = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/ssd/forums/data/tech.php-topics.txt';
    $fp = fopen($topicFile, "w");
  
    if ($fp) {
      foreach ($forumtopics as $t) {
        reset ($t);
        while (list ($key, $val) = each($t)) {
          if (!strstr($key, "post_"))
	          fputs($fp, $key . ":" . $val . "\n");
        }
      
        fputs($fp, "###\n");
      }

      fclose($fp);
      $savedOK = true;
    }
    
    return $savedOK;
  }
    
  function forum_addTopic($topic) {
    global $forumtopics;
    $index = $topic['index'];
    $forumtopics[$index] = $topic;
  }
    
  function forum_lockTopic($index) {
    global $forumtopics;
    $forumtopics[$index]['locked'] = true;
    return forum_saveTopics();
  }

  function forum_loadThread($index) {
    global $HTTP_SERVER_VARS;
    
    $thread     = array();
    $threadFile = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/ssd/forums/data/tech.php-' . $index . '.txt';
    $fp         = 0;

    if (file_exists($threadFile))
      $fp = fopen($threadFile, "r");

    $msg  = 0;
    $post = array();
  
    if ($fp) {
      while (!feof($fp)) {
        $buffer = rtrim(fgets($fp, 4096));
      
        if (strcmp($buffer, '###') == 0) {
          $post['index']  = $msg;
          $thread[$msg]   = $post;

          $msg++;
          $post = array();
        }
        else {
          $colon = strpos($buffer, ":");
          $key   = substr($buffer, 0, $colon);
          $val   = substr($buffer, $colon+1);

          $post[$key] = $val;
        }
      }
    }

    reset($thread);
    return $thread;
  }

  function forum_createThread($index, $author, $icon, $subject, $body) {
    global $forumtopics;
    global $forumusers;
    global $HTTP_SERVER_VARS;

    $savedOK   = false;    
    $threadfile = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/ssd/forums/data/tech.php-' . $index . '.txt';
    $fp = fopen($threadfile, "w");
  
    if ($fp) {
      $user = $forumusers[$author];
      
      fputs($fp, 'author:'    . $author  . "\n");
      fputs($fp, 'timestamp:' . time()   . "\n");
      fputs($fp, 'icon:'      . $icon    . "\n");
      fputs($fp, 'subject:'   . $subject . "\n");
      fputs($fp, 'message:'   . $body    . "<br><br>" . $user['sig'] . "\n");
      fputs($fp, "###\n");
      fclose($fp);
      
      $user['posts'] += 1;
      $forumusers[$author] = $user;
      forum_saveUsers();
    }
    else {
      return "Unable to create topic thread";
    }
    
    return false;
  }

  function forum_extendThread($index, $author, $icon, $subject, $body) {
    global $forumtopics;
    global $forumusers;
    global $HTTP_SERVER_VARS;

    $topic = $forumtopics[$index];
    if ($topic['locked']) return "Thread is locked";

    $savedOK   = false;    
    $threadfile = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/ssd/forums/data/tech.php-' . $index . '.txt';
    $fp = fopen($threadfile, "a");
  
    if ($fp) {
      $user = $forumusers[$author];

      fputs($fp, 'author:'    . $author  . "\n");
      fputs($fp, 'timestamp:' . time()   . "\n");
      fputs($fp, 'icon:'      . $icon    . "\n");
      fputs($fp, 'subject:'   . $subject . "\n");
      fputs($fp, 'message:'   . $body    . "<br><br>" . $user['sig'] . "\n");
      fputs($fp, "###\n");
      fclose($fp);
      
      $topic['posts']++;
      $topic['timestamp'] = time();
      $topic['post_d']    = date("m.d.y");
      $topic['post_t']    = date("h:i A");
      $forumtopics[$index] = $topic;
      
      forum_saveTopics();
      
      $user['posts'] += 'tech.php-' +1 ;
      $forumusers[$author] = $user;
      forum_saveUsers();
    }
    else {
      return "Unable to post message to thread";
    }
    
    return false;
  }

  function forum_editThread($index, $msg_index, $author, $icon, $subject, $body) {
    global $forumtopics;
    global $forumusers;
    global $HTTP_SERVER_VARS;
    
    $thread     = forum_loadThread($index);
    $post       = $thread[$msg_index];
    
    $authorized = (strcmp($author, $post['author']) == 0) || (strcmp($author, 'milo') == 0);
    if (!$authorized) return "You are not authorized to edit this post, $author.";

    $post['timestamp'] = time();
    $post['icon']      = $icon;
    $post['subject']   = $subject . "\n";
    $post['message']   = $body    . "[n][n]" . $user['sig'] . "\n";
    
    $thread[$msg_index] = $post;

    $threadfile = $HTTP_SERVER_VARS["DOCUMENT_ROOT"] . '/ssd/forums/data/tech.php-' . $index . '.txt';
    $fp = fopen($threadfile, "w");
  
    if ($fp) {
      $user = $forumusers[$author];

      foreach ($thread as $p) {
        reset ($p);
        while (list ($key, $val) = each($p)) {
          fputs($fp, $key . ":" . $val . "\n");
        }
      
        fputs($fp, "###\n");
      }

      fclose($fp);
      
      $topic = $forumtopics[$index];
      
      if ($topic['locked']) return "Thread is locked";

      $topic['timestamp'] = time();
      $topic['post_d']    = date("m.d.y");
      $topic['post_t']    = date("h:i A");
      $forumtopics[$index] = $topic;
      
      forum_saveTopics();
    }
    else {
      return "Unable to post message to thread";
    }
    
    return false;
  }
  
  function forum_createTopic() {
    global  $forumtopics;
    global  $forumindex;
    global  $login,
				    $password,
            $msgicon,
				    $subject,
            $msgbody;

		if (strlen($subject) > 80) return "Invalid subject line (too long)";

    $forumindex++;

    $topic = array(
      'index'       => $forumindex,
      'author'      => $login,
      'created'     => date("m.d.y"),
      'post_d'      => date("m.d.y"),
      'post_t'      => date("h:i A"),
      'timestamp'   => time(),
      'icon'        => $msgicon,
      'posts'       => 1,
      'subject'     => $subject
    );
    
    $forumtopics[$forumindex] = $topic;
    return forum_createThread($forumindex, $login, $msgicon, $subject, forum_cleanString($msgbody));
  }

	// sort topics by subject:
  function forum_topicSort1($a, $b)  { return strcasecmp($a['subject'], $b['subject']); }
  function forum_topicSort1r($a, $b) { return strcasecmp($b['subject'], $a['subject']); }
  
	// sort topics by author:
  function forum_topicSort2($a, $b)  { return strcasecmp($a['author'], $b['author']);   }
  function forum_topicSort2r($a, $b) { return strcasecmp($b['author'], $a['author']);   }
  
	// sort topics by length:
  function forum_topicSort3($a, $b)  { return $a['posts'] - $b['posts'];                }
  function forum_topicSort3r($a, $b) { return $b['posts'] - $a['posts'];                }
  
	// sort topics by last post date/time:
  function forum_topicSort4($a, $b)  { return $b['timestamp'] - $a['timestamp'];        }
  function forum_topicSort4r($a, $b) { return $a['timestamp'] - $b['timestamp'];        }

  forum_loadTopics();
?>