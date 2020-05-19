<?php
// define base url for app
define("BASEURL", 'http://localhost/phpmvc/public');

// configuration database
// host database
define('DB_HOST', 'localhost');
// database user
define('DB_USER', 'root');
// database password
define('DB_PASS', '');
// database name
define('DB_NAME', 'phpmvc');
// optimalise database
define("OPTION", [
    PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);