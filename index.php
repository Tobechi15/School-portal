<?php
// Start Session
session_start();
// Include Config
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controller/home.php');
require('controller/admin.php');
require('controller/portal.php');
require('controller/users.php');
require('controller/adminusers.php');
require('controller/setting.php');

require('models/home.php');
require('models/admin.php');
require('models/portal.php');
require('models/user.php');
require('models/adminusers.php');
require('models/setting.php');
$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}