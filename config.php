<?php
// HTTP
define('HTTP_SERVER', 'http://13.250.104.69/merzidoadmin.merzido.sg/');
define('HTTP_CATALOG', 'http://13.250.104.69/merzido.sg/upload/');

// HTTPS
define('HTTPS_SERVER', 'http://13.250.104.69/merzidoadmin.merzido.sg/');
define('HTTPS_CATALOG', 'http://13.250.104.69/merzido.sg/upload/');

// DIR
define('DIR_APPLICATION', '/var/www/html/merzidoadmin.merzido.sg/');
define('DIR_SYSTEM', '/var/www/html/merzido.sg/upload/system/');
define('DIR_IMAGE', '/var/www/html/merzido.sg/upload/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '/var/www/html/merzido.sg/upload/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');


define('DIR_CACHE', DIR_APPLICATION . 'storage/cache/');
define('DIR_LOGS', DIR_APPLICATION . 'storage/logs/');


// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'admin123');
define('DB_DATABASE', 'MERDB_PROD');
define('DB_PORT', '3306');
define('DB_PREFIX', 'mz_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
