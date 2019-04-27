<?php

// to connect to the database 
$con = mysqli_connect("localhost","root","amma123","bookmark");
if(! $con) {
	die('Could not connect: ' . mysqli_error());
}

// Get the genre of books
function genre_list() {

	global $con;
	$sql = "select * from category";
	$query = mysqli_query($con, $sql);

	while($rows = mysqli_fetch_array($query))
	{
		$category_id = $rows['category_id'];
		$category_name = $rows['category_name'];
		echo "<li><a href='#'>$category_name</a></li>";
	}
}

function display() {

	global $con;
	$sql = "select * from books order by RAND() LIMIT 0,6";
	$query = mysqli_query($con, $sql);

	while($row = mysqli_fetch_array($query)) {

		 $book_id = $row['book_id'];
		 $book_name = $row['book_name'];
		 $book_category = $row['book_category'];
		 $book_description = $row['book_description'];
		 $book_image = $row['book_image'];
		 $book_price = $row['book_price'];
		 $book_quantity = $row['book_quantity'];

 		echo   "<div class='each_book'>
 					<h3><b>$book_name</b></h3>
 					<div class='img_wrap'>
 						<img src='admin/book_images/$book_image' width='250' height ='350' />
 						<h3 style='center'><a href='details.php'>Details</a></h3>
  					</div>
 					<h3>Category : $book_category</h3>
 					<h3>Price : Rs.$book_price</h3>
 					
 					<a href='buy_books.php'><button style='float:center'>Add to cart</button></a>
		 		</div>";
	}
}


?> 


