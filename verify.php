<?php
session_start();
$link = mysqli_connect("localhost","root","","db_users");
$un = $_POST['username'];
$pw = $_POST['password'];

$q = "SELECT * FROM tbl_users WHERE username LIKE '".$un."' AND password LIKE '".$pw."'";
$result = mysqli_query($link,$q);
if(mysqli_num_rows($result)>0)
{
	$_SESSION['admin'] = 1;
	redirect('dashboard.php');
}
else
{
	redirect('index.php');
}
function redirect($page)
{
	echo '<script type="text/javascript">
		window.location = "'.$page.'";
	</script>';
}
?>