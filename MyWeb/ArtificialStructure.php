<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Arificial Structures-Master Decor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./stylesheet.css">
<!-- 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

</head>
<body>


<!-- Header -->
	<div class="header">
			<img src=".\Images\Structures.jpg" height=relative width=100%>
	</div>

<!-- Navbar -->
	<div class="nav-header">
		<ul class="navbar nav-header">
			<li class="nav-header">
				<a class="nav-header" href="./Home.php">Home</a>
			</li>
			<li class="nav-header">
				<a class="nav-header" href="./Gallery.php">Gallery</a>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn active-header">Services</a>
					<div class="dropdown-content">
				      <a href="./InteriorDecoration.php">Interior Decoration</a>
				      <a href="./ExteriorDecoration.php">Exterior Decorations</a>
				      <a href="./ArtificialStructure.php">Artifical Structures</a>
				      <a href="./HousePlanning.php">House Planning</a>
				      <a href="./Repairs.php">Repairs</a>
				    </div>
			</li>
			<li class="nav-header">
				<a class="nav-header" href="./Contact.php">Contact</a>
			</li>
			<li class="nav-header nav-right">
				<a class="nav-header" href="./About.php">About</a>
			</li>
			
		</ul>
	</div>


<!-- Body -->
	<div class="body" style="margin-top:30px">
		<div>
	      <div class="slideshow-container">

			<div class="mySlides fade">
			  <div class="numbertext">1 / 6</div>
			  <img src=".\Images\49.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 6</div>
			  <img src=".\Images\55.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 6</div>
			  <img src=".\Images\51.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">4 / 6</div>
			  <img src=".\Images\57.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">5 / 6</div>
			  <img src=".\Images\58.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">6 / 6</div>
			  <img src=".\Images\59.jpg" style="width:100%">
			</div>			

		  </div>
			<br>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 			  
			</div>

		</div>
	</div>

<!-- Footer -->
	<div class="footer" style="margin-bottom:0">
	  <p>Sign-up today to get latest news about our latest offers and discounts</p>
	  <button class="footer" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
	  <p class="copyrightinfo">Master Decor, Road 500, Bin-Omran, 450056, Qatar <br> Copyright<i class="material-icons" style="font-size:15px">copyright</i> 2020, Master Decor, All right reserved. <br> Tel:+974123456789 | Fax:+974123456789</p>
	</div>

<!-- Sign Up Form -->
	<div id="id01" class="modal">
	  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <form class="modal-content" action="signup.php" method="post">
	    <div class="container-form">
	      <h1>Sign Up</h1>
	      <p>Please fill in this form to create an account.</p>
	      <hr>

	      <label for="email"><b>Name</b></label>
	      <input type="text" placeholder="Enter Name" name="name" required>

	      <label for="email"><b>Email</b></label>
	      <input type="text" placeholder="Enter Email" name="email" required>
	      
	      <label>
	        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
	      </label>

	      <p>By creating an account you agree to our Terms & Privacy.</p>

	      <div class="clearfix">
	        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	        <button type="submit" class="signupbtn">Sign Up</button>
	      </div>
	    </div>
	  </form>
	</div>

	<script>
    //Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}
	</script>

	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 5000); // Change image every 5 seconds
		}
	</script>

</body>
</html>