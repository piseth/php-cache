<?php

      $cachefile = "cache/".$reqfilename.".html";


      $cachetime = 5 * 60; // 5 minutes


      // Serve from the cache if it is younger than $cachetime

      if (file_exists($cachefile) && (time() - $cachetime
         < filemtime($cachefile))) 
      {

         include($cachefile);


         echo "<!-- Cached ".date('jS F Y H:i', filemtime($cachefile))." 
         -->n";


         exit;

      }

      ob_start(); // start the output buffer


?>
      

.. Your usual PHP script and HTML here ...


<?php
       // open the cache file for writing
       $fp = fopen($cachefile, 'w'); 


       // save the contents of output buffer to the file
	    fwrite($fp, ob_get_contents());

		// close the file

        fclose($fp); 

		// Send the output to the browser
        ob_end_flush(); 
?>