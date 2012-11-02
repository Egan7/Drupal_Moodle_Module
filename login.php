<?php
$currdir=getcwd();

$your_drupal_directory = $_SERVER['DOCUMENT_ROOT'];

chdir($your_drupal_directory);

require_once("./includes/bootstrap.inc");

$cookie_domain = $_SERVER['HTTP_HOST'];

drupal_bootstrap( DRUPAL_BOOTSTRAP_FULL );

chdir($currdir);

global $user; 
$uname = $user->name;
$upass = $_SESSION['password'];
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