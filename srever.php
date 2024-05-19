<?php
echo $_SERVER["DOCUMENT_ROOT"];  // Gives the document root directory under which the current script is executing
echo $_SERVER["PHP_SELF"];       // Gives the filename of the currently executing script, relative to the document root
echo $_SERVER["SERVER_NAME"];    // Gives the name of the server host
echo $_SERVER["REQUEST_METHOD"]; // Gives the request method used to access the page (e.g., "GET" or "POST")
?>
