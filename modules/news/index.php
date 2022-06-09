<?php
include('../../includes/session.php');
include('../../includes/constants.php');
?>
 <h1 style="text-align: center;">News Manager</h1>

<?php

include('../../includes/header.php');
include('../../includes/connection.php');
$link= connect();
$result =execute ($link,"SELECT * FROM news");

?>

  

   <?php
    if (isset($_GET['insert'])) {
        ?>
         <P><b>News added successfully</b></P>

        <?php
    }
    if (isset($_GET['update'])) {
        ?>
         <P><b>News Updated successfully</b></P>

      <?php  
    }
    if (isset($_GET['delete'])) {
        ?>
         <P><b>News Deleted successfully</b></P>

      <?php  
    }

     ?>
     <br><br>
   <a href="<?php echo $base_url;?>modules/news/add_news.php" class="btn btn-primary">Add New News</a><br><br>
   <?php
         if (num_rows($result)>0){
          ?>
             <table width="100%;" border="1" class="table table-striped table-hover">
                   <tr><td><b>ID</b></td>
                    <td><b>Name</b></td>
                    <td><b>Action</b></td>
                   </tr> 
                   <?php
                    while ($news =fetch($result) ) {
                      ?>
                      <tr>
                        <td><?php echo $news['id'];  ?></td>
                        <td><?php echo $news['title'];  ?></td>
                        <td>
                            
                            <a href="<?php echo $base_url;?>modules/news/delete_news.php?id=<?php echo $news['id']?>" class="btn btn-primary" >Delete</a>
                        </td>

                        </tr> 

                      <?php
           
         }
       }
         else{
            echo "No Newsfound";
         }
         ?>
                   

             </table>


<?php
include('../../includes/footer.php');
  ?>