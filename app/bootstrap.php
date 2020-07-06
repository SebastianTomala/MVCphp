<?php

// Load config
require_once 'config/config.php';

// Load helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';
require_once 'helpers/debug_helper.php';
// Load libraries
// Autoload core libraries, instead of 'require_once 'libraries/Database.php';' etc.
spl_autoload_register(function($className) {
    require_once 'libraries/' . $className . '.php';
});

