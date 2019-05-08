<?php
$link=mysqli_connect("localhost","ezen","ezen1403");
$base_url = "http://" . $_SERVER['SERVER_NAME'].'/ezen/';
if($link==false)
{
	echo "Error while connecting";
}
mysqli_select_db($link,"ezen");
?>
