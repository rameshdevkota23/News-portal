<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   
   <title>Admin - Dashboard</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   
</head>
<body>
  <div class="container">
   
   <ul class="nav justify-content-center nav-justified">
            <li class="nav-item">
              <a href="<?php echo $base_url;?>modules/categories" class="nav-link">Category Manager</a>
            </li>
            <li class="nav-item">
               <a href="<?php echo $base_url;?>modules/news" class="nav-link">News Manager</a>
            </li>
            <li class="nav-item">
               <a href="<?php echo $base_url;?>modules/pages" class="nav-link">Page Manager</a>
            </li>
            <li class="nav-item">
               <a href="<?php echo $base_url;?>logout.php" class="nav-link">Logout</a>
            </li>

         </ul>


   

