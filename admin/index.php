<?php
	require_once('scripts/config.php');
	confirm_logged_in();

?>



<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to Your Admin Panel</title>
</head>
<body>
	<h1>Admin Dashboard</h1>
	<h2>Welcome <?php echo $_SESSION['user_name'];?></h2>
	<h1> 
	Hello 
	<?php 
	date_default_timezone_set('America/Toronto');
	$hour = date('G');
	
	if ($hour >= 5 && $hour <= 11 ) {
	echo "Good Morning";

	} else if ($hour >= 12 && $hour <= 18 ) {
		echo "Good Afternoon";
	
	} else if ($hour >= 19 || $hour <= 4 ) {
	echo "Hope you're having a good night!";
}
?>
</h1>

	<nav>
		<ul>
			<li><a href="admin_createuser.php">Create User</a></li>
			<li><a href="#">Edit User</a></li>
			<li><a href="#">Delete User</a></li>
			<li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
		</ul>
	</nav>
	
<?php echo $_SESSION['last_login'];
 ?>

</body>
</html>