<?php

require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL); // This makes all Drupal functionality available to my script
global $user; // This makes the user's $user object available to my script
$uname = $user->name;
print $user->name;
?>
	<form id="login" method="post" action="http://localhost/moodle/login/index.php">
          <div class="loginform">
            <div class="form-label"><label for="username">Username</label></div>
            <div class="form-input">
              <input type="hidden" value=<? echo $uname ?> size="15" id="username" name="username">
            </div>
            <div class="clearer"><!-- --></div>
            <div class="form-label"><label for="password">Password</label></div>
            <div class="form-input">
              <input type="hidden" value=<? echo $upass ?> size="15" id="password" name="password">
              <input type="submit" value="Login" id="loginbtn">
            </div>
          </div>
    </form>