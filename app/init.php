<?php
 if(!session_id() ) session_start();

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Database.php';
require_once 'core/Flasher.php';
require_once 'config/config.php';

// helpers
require_once('helpers/functions.php');