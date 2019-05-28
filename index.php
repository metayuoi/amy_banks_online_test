<?php
  $user_agent = $_SERVER["HTTP_USER_AGENT"];
  if (strpos($user_agent, "MSIE") !== false) readfile('index_ie.html');
  else readfile('index_all.html');
?>