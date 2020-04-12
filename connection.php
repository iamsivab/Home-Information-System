<?php

function dream_connect()
	{	
		$server="cs1.ucc.ie";$database="DREAMHOME_sb27";$username="sb27";$password="iungi";
		$connection=mysqli_connect($server,$username,$password,$database);
		if($connection)
			return($connection);
			return(FALSE);
	}

function html_begin($title,$header)
		{
			print("<html>\n");
			print("<head>\n");
			if($title!="")
				print("<title>$title</title>\n");
				print("<head>\n");
				print("<body bgcolor=\"Red\">\n");

			if($header!="")
				print("<h2>$header</h2>\n");
		}
function html_end()
	{
		print("</body></html>\n");
	} 

?>