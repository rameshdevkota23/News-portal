<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
$link = connect();
$news = execute($link,"SELECT * FROM news");
$id = $_GET['id'];
$result =execute ($link,"SELECT * FROM news WHERE id =".$id);
$n= fetch($news);
?>
<h1>Add News</h1>
<form action="<?php echo $base_url;?>/modules/news/update_news.php" method="post">
	<input type="hidden" name="id" value="<?php echo $n['id']; ?>">
	Title 
	<input type="text" name="title" value="<?php echo $n['title'];  ?>"><br>

	Description 
	<textarea name="description">
		<?php echo $n['description'];  ?>
			
		</textarea><br>

	

	Author 
	<input type="text" name="author" value="<?php echo $n['author'];?>"><br><br>

	<input type="submit" value="Add">

	
</form>

<?php include('../../includes/footer.php');?>