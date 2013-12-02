<?php 
$cachefile = "cache/home.html";
		 // 5 minutes

        $cachetime = 5 * 60; 

        // Serve from the cache if it is younger than $cachetime

        if (file_exists($cachefile) && 
           (time() - $cachetime < filemtime($cachefile))) 
        {


        	include($cachefile);

        	echo "From cache generated ".date('H:i', filemtime($cachefile));


        	exit;

        } else {
		 echo "Not from cached.";
		}


?>