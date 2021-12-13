<?php
error_reporting(E_ALL); // Motor de error / excepción, utilice siempre E_ALL

ini_set('ignore_repeated_errors', TRUE); // Siempre usa TRUE

ini_set('display_errors', FALSE); // Visualización de error / excepción, use FALSE solo en el entorno de producción o en el servidor real. Utilice TRUE en el entorno de desarrollo

ini_set('log_errors', TRUE); // Motor de registro de archivos de error / excepción.

ini_set("error_log", "php-error.log");
error_log( "Inicia App" );

require 'vendor/autoload.php';
require 'src/lib/routes.php';