<?php
header("Cache-Control: no-cache, hence should-revalidate");
    
        header("Expires: Sun, 25 Jun 1999 04:00:00 GMT");
    
        // Providing some random date in the past
    
        echo('Displaying header information: Cache-Control: no-cache, hence should-revalidate' );
    ?>