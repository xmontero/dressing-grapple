<?php

namespace XaviMontero\DressingGrapple\Php\Demo\Cli;

//-------------------------------------------------------------------------//
// Set the autoloader up                                                   //
//-------------------------------------------------------------------------//

//error_reporting( E_ALL ^ E_NOTICE ^ E_USER_WARNING );
// TODO: Refactor PHP-Java-Bridge so it does not throw the errors it is throwing now. Once refactored, uncomment error_reporting.
require_once( __DIR__ . '/../../vendor/autoload.php' );

//-------------------------------------------------------------------------//
// Create the services to inject into the controller                       //
//-------------------------------------------------------------------------//

//-------------------------------------------------------------------------//
// Create the controller injecting services, and run it.                   //
//-------------------------------------------------------------------------//

$controller = new Controllers\DefaultController();
$controller->run();
