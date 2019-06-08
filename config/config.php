<?php

// Debug
define('DEBUG', true);

// Database Settings
define('DB_HOST', '127.0.0.1'); // Database host ***Use IP address to avoid DNS lookup.
define('DB_NAME', 'gullmanmvc'); // Database name.
define('DB_USER', 'root');  // Database user.
define('DB_PASS', '1234');  // Database password.
define('DB_CHAR', 'utf8'); // Database charset.

// MVC Settings
define('DEFAULT_CONTROLLER', 'Home');   // Default controller if none is set.
define('DEFAULT_LAYOUT', 'default');     // If no layout is set in the controller use this layout.

define('PROOT', '/gullmanNewMVC/');     // Set this to '/' for a live server.

define('SITE_TITLE', 'Gullman MVC Framework');  // This will be used if no site title is set.
define('MENU_BRAND', 'GULLMAN MVC');    // This is the brand text in the menu.

define('CURRENT_USER_SESSION_NAME', 'asdfj54k3kFF45534ffdfgERe67433RfgDFg'); // Session name fore logged in user.
define('REMEMBER_ME_COOKIE_NAME', 'HHDHJDFDrddfh343554gGDDSas');    // Cookie name for logged in user remember me.
define('REMEMBER_ME_COOKIE_EXPIRY', 2592000);    // Time in seconds for remember me cookie to live (30 days).

define('ACCESS_RESTRICTED', 'Restricted');  // Controller name for the restricted restrict.

mb_internal_encoding('UTF-8');



?>