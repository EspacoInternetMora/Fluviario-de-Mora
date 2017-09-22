<?php
    
    if(isset($dbReqPage) && $dbReqPage == true)
    {
        /*define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'dasc');*/

        define('DB_HOST', '172.21.131.1');
        define('DB_USER', 'desportomora');
        define('DB_PASS', 'mora+1801');
        define('DB_NAME', 'dasc');

        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
    }
	
	if(stristr($_SERVER['HTTP_HOST'], 'local') || (substr($_SERVER['HTTP_HOST'], 0, 7) == '172.21'))
	{
		$local = true;
	} else {
		$local = false;
	}
	
	if($local)
	{
        define("path", "http://localhost/fluviariomora/");
	} else {
        define("path", "http://www.fluviariomora.pt/");
	}

?>
