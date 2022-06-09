<?php
function connect(){
	return mysqli_connect("localhost","root","","db_users");
	
}

function execute($link,$q){
	return mysqli_query($link,$q);

}
function num_rows($res){
	return mysqli_num_rows($res);
}
function fetch($res){
	return mysqli_fetch_assoc($res);
}
function clean($link, $value)
{
	return mysqli_real_escape_string($link, $value);
}

  ?>