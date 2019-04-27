<!DOCTYPE>							<!-- defines page as a HTML5 document -->

<?php
include("functions/functions.php");
?>
<meta charset="UTF-8">				<!-- defines character set to be UTF-8 -->
<meta name="viewport" content="width=device-width, initial-scale=1">		<!-- allows styles for all devices -->

<html>
	<head>
		<title>Bookmark</title>
	<link rel="stylesheet" href="styles/style.css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	</head>
<body>

	<!-- Navigation -->
	<ul>
	  <li><a class="active" href="home">Home</a></li>
	  <li><a href="contact">Contact</a></li>
	  <li><a href="about">About</a></li>
	  <li style="float:right"><a href="login">Login</a></li>
	  <li style="float:right"><a href="register">Register</a></li>
	</ul>

	<div class="sidebar">
		<div class="sidebar_title">Genre</div>
		<ul>
			<?php 
				genre_list(); 
			?>
		</ul>
	</div>
	
	<!-- Heading -->
	<section class="heading">
		<h2 style="font-size: 80px" >BOOKMARK</h2>
		<p style="color: #737373"><i> We love books</i></p>
	</section>

	<div id="form">
		<form method="get" action="results.php" enctype="multipart/form-data">
			<input type="text" name="user_query" placeholder="Search for books"  />
			<input type="submit" name="search" value="Search" />
		</form>
	</div>

	<section class="content_area">
		<h3>content</h3>
		<section class="display_books">
			<?php display(); ?>
		</section>
	</div>	
	</section>

	<div class="footer"> Footer </div>
</body>
</html>
