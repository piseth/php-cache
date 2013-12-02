<?php

$cachefile = "cache/home.html";

if (file_exists($cachefile)) {


	// the page has been cached from an earlier request

	// output the contents of the cache file

	include($cachefile); 


	// exit the script, so that the rest isnt executed
	exit;

}


?>