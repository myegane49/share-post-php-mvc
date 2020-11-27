<?php
include_once 'config/config.php';

include_once 'helpers/url_helper.php';
include_once 'helpers/session_helper.php';

// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

spl_autoload_register(function($className) {
  require_once "libraries/$className.php";
});
?>