<!DOCTYPE>							<!-- defines page as a HTML5 document -->
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
	
	<!-- Slide Show -->
	<section>
		<img class="slideshow" src="images/slideshow1.jpg" style="width=100%">
		<img class="slideshow" src="images/slideshow2.jpg" style="width=100%">
		<img class="slideshow" src="images/slideshow3.jpg" style="width=100%">
		<img class="slideshow" src="images/slideshow4.png" style="width=100%">
	</section>

	<!-- Heading -->
	<section class="heading">
		<h2 style="font-size: 80px" >BOOKMARK</h2>
		<p style="color: #737373"><i> We love books</i></p>
	</section>

	<!-- Content -->
	<section class="content">
		<p> Bookmark is a platform that allows users to buy and sell books. Happy Reading!!We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
	</section>

	<!-- Main options -->
	<button onclick="location.href='buy_books'" class="button">Buy Books</button>
	<button onclick="location.href='sell_books'" class="button">Sell Books</button>


	<!-- Footer -->
	<div class="footer">
		<h2 style="text-align:center"</h2>
	</div>

<!-- Javascript for slideshow of imaages -->
<script>
var myIndex = 0;
carousel();

function carousel() {
	var i;
	var x = document.getElementsByClassName("slideshow");
	for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  	}
  	myIndex++;
  	if (myIndex > x.length) {myIndex = 1}
  	x[myIndex-1].style.display = "block";
  	setTimeout(carousel, 3000);
}
</script>

</body>
</html>
