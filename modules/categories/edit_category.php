<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
$link= connect();
$id = $_GET['id'];
$result =execute ($link,"SELECT * FROM categories WHERE id =".$id);
$row=fetch($result);

?>
<h1 style="text-align: center;">Edit Category</h1>

<form action="<?php echo $base_url?>modules/categories/update_category.php" method="post">
	<div class="col-md-6">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<label>Category Name:</label>
	<input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control"><br>
	<input type="submit" value="Save" class="btn btn-primary" ><br><br>
	</div>
</form>
<?php
include('../../includes/footer.php');
  ?>