<?php
// start the output buffer
ob_start(); ?>

//Your usual PHP script and HTML here ...
<h1>Hello World!</h1>

<?php
$cachefile = "cache/home.html";
// open the cache file "cache/home.html" for writing
$fp = fopen($cachefile, 'w');
// save the contents of output buffer to the file
fwrite($fp, ob_get_contents());
// close the file
fclose($fp);
// Send the output to the browser
ob_end_flush();
?>