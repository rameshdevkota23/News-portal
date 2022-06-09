<?php
   include('../../includes/session.php');
   include('../../includes/constants.php');
   include('../../includes/connection.php');
   $id =$_GET['id'];
       
       $q="DELETE FROM news WHERE id =".$id;
         $link=connect();
         execute($link,$q);
         redirect($base_url.'modules/news?delete=success');
  ?>