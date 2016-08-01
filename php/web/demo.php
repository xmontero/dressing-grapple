<?php

namespace XaviMontero\DressingGrapple\Php\Web;

//-------------------------------------------------------------------------//
// Set the autoloader up                                                   //
//-------------------------------------------------------------------------//

//error_reporting( E_ALL ^ E_NOTICE ^ E_USER_WARNING );
require_once( __DIR__ . '/../vendor/autoload.php' );

//-------------------------------------------------------------------------//
// Create the services to inject into the controller                       //
//-------------------------------------------------------------------------//

//-------------------------------------------------------------------------//
// Create the controller injecting services, and run it.                   //
//-------------------------------------------------------------------------//

$controller = new Controllers\DefaultController();
$controller->run();
