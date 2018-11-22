<?php
	$con=mysql_connect('localhost','root','');
	if(!$con)
	{
		echo "Not Connected..";
	}
	mysql_select_db("sunshine",$con);
?>