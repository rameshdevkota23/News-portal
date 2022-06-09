<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
$link = connect();
$result = execute($link,"SELECT * FROM categories");
?>
<h1 style="text-align: center;">Add News</h1>
<form action="<?php echo $base_url;?>/modules/news/insert_news.php" method="post">
	<div class="form-group" class="col-md-6">
	<label>Title</label>
	<input type="text" name="title" class="form-control"><br>

	<label>Description</label>
	<textarea name="description" class="form-control"></textarea><br>

	<label>Category </label>
	<select name="category_id" class="form-control">
		<option value="">Choose Category</option>
		<?php
		if(num_rows($result)>0)
		{
			while($row = fetch($result))
			{
				?>
				<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
				<?php
			}
		}
		?>
	</select><br>

	<label>Author</label> 
	<input type="text" name="author" class="form-control"><br><br>

	<input type="submit" value="Add" class="btn btn-primary">

</div>
</form>

<?php include('../../includes/footer.php');?>