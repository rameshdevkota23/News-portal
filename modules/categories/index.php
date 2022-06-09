
<?php
include('../../includes/session.php');
include('../../includes/constants.php');

?>
    <h1 style="text-align: center;">Category Manager</h1>

<?php
include('../../includes/header.php');
include('../../includes/connection.php');
$link= connect();
$result =execute ($link,"SELECT * FROM categories");

?>

   
   <?php
    if (isset($_GET['insert'])) {
        ?>
         <P><b>Category added successfully</b></P>

        <?php
    }
    if (isset($_GET['update'])) {
        ?>
         <P><b>Category Updated successfully</b></P>

      <?php  
    }
    if (isset($_GET['delete'])) {
        ?>
         <P><b>Category Deleted successfully</b></P>

      <?php  
    }

     ?>
     <br><br>
   <a href="add_category.php" class="btn btn-primary">Add New Category</a><br><br>
   <?php
         if (num_rows($result)>0){
          ?>
             <table width="100%;" border="1" class="table table-striped table-hover">
                   <tr><td><b>ID</b></td>
                    <td><b>Name</b></td>
                    <td><b>Action</b></td>
                   </tr> 
                   <?php
                    while ($cat =fetch($result) ) {
                      ?>
                      <tr>
                        <td><?php echo $cat['id'];  ?></td>
                        <td><?php echo $cat['name'];  ?></td>
                        <td>
                            <a href="<?php echo $base_url;?>modules/categories/edit_category.php?id=<?php echo $cat['id']?>"class="btn btn-primary">Edit</a>
                            <a href="<?php echo $base_url;?>modules/categories/delete_category.php?id=<?php echo $cat['id']?>"class="btn btn-primary">Delete</a>
                        </td>

                        </tr> 

                      <?php
           
         }
     }
         else{
            echo "No categories found";
         }
         ?>
                   

             </table>


<?php
include('../../includes/footer.php');
  ?>



