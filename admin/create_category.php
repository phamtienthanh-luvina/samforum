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

	define('ALLOWED', true);
	session_start();
	include_once("../connection_to_db.php");
	include_once("admin_class.php");
	$Admin_category = new Admin($conn);
	if( isset($_SESSION["logged_in"]) and ($Admin_category->is_admin()) ){
		include_once("create_category_form.php");
	}else{
		header("location: ../index.php");
	}
?>
