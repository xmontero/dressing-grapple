<?php

namespace XaviMontero\DressingGrapple\Php\Demo\Web\Controllers;

require_once( "http://localhost:8080/JavaBridge/java/Java.inc" );
// TODO: Use composer or other tools to make sure we do not need a remote call.
// TODO: Once done, eliminate the tuning of the apache2 and cli settings in the provisioner.

class DefaultController
{
    public function run()
    {
        $a = 3;
        $b = 4;
        $calculator = new \Java( "xavi_montero.dressing_grapple.java.Calculator" );

        echo
        (
"<html>
    <head>
        <title>Java to PHP bridge test consuming custom namespaced classes</title>
    </head>
    <body>
        <h1>XaviMontero\DressingGrapple\Php\Web\Controllers\DefaultController</h1>
        <h2>Explanation:</h2>
        <div>
            <ul>
                <li>This Web-PHP demo program calls the Calculator java class and executes the sum() method.</li>
                <li>See the README.md for more information.</li>
            </ul>
        </div>
        <h2>Demo:</h2>
        <div>
            " . $a . " + " . $b . " = " . $calculator->sum( $a, $b ) . "        
        </div>
    </body>
</html>"
        );
    }
}
