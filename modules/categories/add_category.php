<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');


?>
<h3 style="text-align: center;">Add Category</h3>

<form action="<?php echo $base_url?>modules/categories/insert_category.php" method="post">
		<div class="col-md-6">
	<label>Category Name:</label>
	<input type="text" name="name" class="form-control"><br>
	<input type="submit" value="Save" class="btn btn-primary">
	</div>
</form>
<?php
include('../../includes/footer.php');
  ?>