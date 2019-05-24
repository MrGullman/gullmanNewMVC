<?php

// Debug
define('DEBUG', true);

// Database Settings
define('DB_HOST', '127.0.0.1'); // Database host ***Use IP address to avoid DNS lookup
define('DB_NAME', 'gullmanmvc'); // Database name
define('DB_USER', 'root');  // Database user
define('DB_PASS', '1234');  // Database password
define('DB_CHAR', 'utf8mb4'); // Database charset

// MVC Settings
define('DEFAULT_CONTROLLER', 'Home');   // Default controller if none is set.
define('DEFAULT_LAYOUT', 'default');     // If no layout is set in the controller use this layout.

define('PROOT', '/gullmanNewMVC/');     // Set this to '/' for a live server.

define('SITE_TITLE', 'Gullman MVC Framework');  // This will be used if no site title is set.



?>