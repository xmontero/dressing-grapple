<?php
require_once( "http://localhost:8080/JavaBridge/java/Java.inc" );
echo new java( "java.lang.String", "Hello, php world, greetings from the java world!" );
