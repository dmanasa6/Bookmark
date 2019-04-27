<!DOCTYPE>
<meta charset="UTF-8">				<!-- defines character set to be UTF-8 -->
<meta name="viewport" content="width=device-width, initial-scale=1">		<!-- allows styles for all devices -->
<?php
include("includes/db.php")
?>

<html>
	<head>
		<title>Insert books</title>
		<link rel="stylesheet" href="styles/style.css" media="all">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	</head>

<body>
	<h2  id="heading"> Add new books to store </h2>
	<form action="insert_books.php" method="post" enctype="multipart/form-data">
		<label for="">Book Id :</label>
		<input type="text" name="book_id">

		<label for="">Book Name :</label>
		<input type="text" name="book_name">
			
		<label for="">Book Description :</label>
		<input type="text" name="book_description">
			
		<label for="">Book Genre :</label>
		<select name="book_category">
			<option>Select a Genre</option>
			<?php
				$sql = "select * from category";
				$query = mysqli_query($con, $sql);
				while($rows = mysqli_fetch_array($query))
				{
					$category_id = $rows['category_id'];
					$category_name = $rows['category_name'];
					echo "<option value=$category_name>$category_name</option>";
				}
			?>
		</select>

		<label for="">Book Price :</label>
		<input type="text" name="book_price">
		
		<label for="">Book image : </label>
		<input type="file" name="book_image">

		<label for=""><br/><br/>Book quantity :</label>
		<input type="text" name="book_quantity">

		<input type="submit" value="Add book" name='add_book'>
	</form>
</body>
</html>

<?php 

	if(isset($_POST['add_book'])) {
		$book_id = $_POST['book_id'];
		$book_name = $_POST['book_name'];
		$book_image = $_POST['book_image'];
		$book_description = $_POST['book_description'];
		$book_category = $_POST['book_category'];
		$book_price = $_POST['book_price'];
		$book_quantity = $_POST['book_quantity'];

		$book_image = $_FILES['book_image']['name'];
		$book_image_temp = $_FILES['book_image']['tmp_name'];
		move_uploaded_file($book_image_temp, "book_images/$book_image");

		$sql = "INSERT INTO books (book_id,book_name,book_category,book_description,book_price,book_image,book_quantity) VALUES ('$book_id','$book_name','$book_category','$book_description','$book_price','$book_image','$book_quantity')";
		
		if(mysqli_query($con, $sql)) {
			
			echo "$book_description";
			echo "<script>alert('Book has been added!')</script>";
			echo "<script>window.open('insert_books.php','_self')</script>";
		}
	}

?>
