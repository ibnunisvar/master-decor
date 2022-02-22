<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>About-Master Decor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./stylesheet.css">
<!-- 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

 	<style type="text/css">
 		.column-card {
		  float: left;
		  width: 33.3%;
		  margin-bottom: 16px;
		  padding: 0 8px;
		}

		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  margin: 8px;
		}


		.container-card {
		  padding: 0 16px;
		}

		.container-card::after, .row-card::after {
		  content: "";
		  clear: both;
		  display: table;
		}

		.button-card {
		  border: none;
		  outline: 0;
		  display: inline-block;
		  padding: 8px;
		  color: white;
		  background-color: #000;
		  text-align: center;
		  cursor: pointer;
		  width: 100%;
		}

		.button-card:hover {
		  background-color: #555;
		}

		@media screen and (max-width: 650px) {
		  .column-card  {
		    width: 100%;
		    display: block;
		  }
		}

		.column-content1 {
		  float: left;
		  width: 20%;
		  margin-bottom: 16px;
		  padding: 0 8px;
		}

		.column-content2 {
		  float: left;
		  width: 40%;
		  margin-bottom: 16px;
		  padding: 0 8px;
		}

		.column-content3 {
		  float: left;
		  width: 40%;
		  margin-bottom: 16px;
		  padding: 0 8px;
		}

		@media screen and (max-width: 900px) {
		  .column-content2, .column-content1, .column-content3 {
		    width: 100%;
		  }
		}
 	</style>
</head>
<body>


<!-- Header -->
	<div class="header">
			<img src=".\Images\About.jpg" height=relative width=100%>
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
				<a href="javascript:void(0)" class="dropbtn">Services</a>
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
				<a class="active-header" href="./About.php">About</a>
			</li>
			
		</ul>
	</div>


<!-- Body -->
	<div class="body" style="margin-top: 30px">
	<div class="row-card">
	    <div class="column-content1">
	     		<div>
	      		<img src="./Images/Name.jpg" height="relative" width="100%">
	    		</div>
	      		<p style="text-align:justify">Master decor is a company started as a little start-up company with only a few employees, and now the world renown Interior designing company with more than five thousand employees all around the world.</p>
	    </div>
	    <div class="column-content2">
	    		<h2>OUR MISSION</h2>
			    <p>Our mission is to help people to make thier home the best, despite of the place and space. we help them to create, design and decorate theier living place to thier own wish, still looking best ever.</p>
			    <br>
			    <h2>OUR VISION</h2>
			    <p>To make the living place of every living being a pleasent one, to calm thier mind and sooth thier soul.</p>
	    </div>
	    <div class="column-content3" >
		    	<h3>Our Work of art</h3>
		        <p>Designing houses for celebrities</p>
		        <div class="container-iframe">
		        	<iframe class="responsive-iframe" src="https://www.youtube.com/embed/tOS0xfA-TW4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		        </div>
	    </div>
	</div>
	</div>

	<h2 style="text-align:center">Our Team</h2>
		<div class="row-card">
		  <div class="column-card">
		    <div class="card">
		      <img src=".\Images\Marcus.jpg" alt="Jane" style="width:100%">
		      <div class="container-card">
		        <h2>Marcus Holloway</h2>
		        <p class="title">CEO & Founder</p>
		        <p>marcus@dedsec.com</p>
		        <p><button class="button-card" onclick="location.href='mailto:marcus@dedsec.com';">Contact</button></p>
		      </div>
		    </div>
		  </div>

		  <div class="column-card">
		    <div class="card">
		      <img src=".\Images\Wrench.jpg" alt="Wrench Dhawan" style="width:100%">
		      <div class="container-card">
		        <h2>Wrench Dhawan</h2>
		        <p class="title">Art Director</p>
		        <p>wrench@dedsec.com</p>
		        <p><button class="button-card" onclick="location.href='mailto:wrench@dedsec.com';">Contact</button></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class="column-card">
		    <div class="card">
		      <img src=".\Images\Sarah.jpg" alt="Sarah Holloway" style="width:100%">
		      <div class="container-card">
		        <h2>Sarah Holloway</h2>
		        <p class="title">Designer</p>
		        <p>sarah@dedsec.com</p>
		        <p><button class="button-card" onclick="location.href='mailto:sarah@dedsec.com';">Contact</button></p>
		      </div>
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

</body>
</html>