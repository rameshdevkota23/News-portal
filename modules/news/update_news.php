<?php
   include('../../includes/session.php');
   include('../../includes/constants.php');
   include('../../includes/connection.php');
   $id =$_POST['id'];
   $title= clean ($link,$_POST['title']);
   $description= clean($link,$_POST['description']);
   $author= clean($link,$_POST['author']);
       $q="UPDATE news set title='".$title."' WHERE id =".$id;
       	$link=connect();
       	execute($link,$q);
       	redirect($base_url.'modules/news?update=success');
  ?>