<html>
	<head> 
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
</html>

<?PHP

//******************************************//
//* This copyright notice must not be removed
//* under any circumstances.
//* It must stay intact in all the files.

//* Samforum
//* Version 1.0
//* Script created by Samiuddin Samiuddin
//* Email: phpdevsami@gmail.com
//* Skype: n0h4cks

//* - This is not an open source project, functions/classes
//*   or any other code form this script cannot be
//*   used for other scripts or applications.

//*   You are not allowed to resell this script.

//* - You are free to make modification/changes,
//*   however it must be for your own use.
//*********************************************************************//

	echo "<p> {$_GET["message"]} </p>";
	echo "<p><a href=\"index.php\"> Return to homepage </a> </p>";
	echo "<p><a href=\"{$_SERVER["HTTP_REFERER"]}\"> Go back </a> </p> </br>";

	
?>
