<!--
	Author: Vaishnavi Killekar
	Date: November 2017
	Description: Database connection file.
-->

<?php
	$con = mysqli_connect('localhost', 'root', '', 'easy_meals');
	
	if(!$con)
	{
		echo "Error: Connection could not be established to the server!";
	}
?>