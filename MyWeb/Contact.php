<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Contact-Master Decor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./stylesheet.css">
<!-- 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

 	<style>
		body {
		  font-family: Arial, Helvetica, sans-serif;
		}

		* {
		  box-sizing: border-box;
		}

		/* Style inputs */
		input[type=text], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  margin-top: 6px;
		  margin-bottom: 16px;
		  resize: vertical;
		  background-color: #fff;
		}

		input[type=submit] {
		  background-color: #4CAF50;
		  color: white;
		  padding: 12px 20px;
		  border: none;
		  cursor: pointer;
		}

		input[type=submit]:hover {
		  background-color: #45a049;
		}

		/* Style the container/contact section */
		.container-contact {
		  border-radius:20px;
		  background-color: #f2f2f2;
		  padding: 10px;
		}

		/* Create two columns that float next to eachother */
		.column-contact {
		  float: left;
		  width: 50%;
		  margin-top: 6px;
		  padding: 20px;
		}

		/* Clear floats after the columns */
		.row-contact:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		  .column-conatct, input[type=submit] {
		    width: 100%;
		    margin-top: 0;
		  }
		}

/*Card*/
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
		  .column-card {
		    width: 100%;
		    display: block;
		  }
		}
		</style>
</head>
<body>


<!-- Header -->
	<div class="header">
			<img src=".\Images\Contact.jpg" height=relative width=100%>
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
				<a class="active-header" href="./Contact.php">Contact</a>
			</li>
			<li class="nav-header nav-right">
				<a class="nav-header" href="./About.php">About</a>
			</li>
			
		</ul>
	</div>


<!-- Body -->
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


	<div class="container-contact">
	  <div style="text-align:center">
	    <h2>Contact Us</h2>
	    <p>Swing by for a cup of coffee, or leave us a message:</p>
	  </div>
	  <div class="row-contact">
	    <div class="column-contact">
	      <img src=".\Images\Name.jpg" style="width:100%">
	    </div>
	    <div class="column-contact">
	      <form action="contact_page.php" method="post">
	        <label for="fname">First Name</label>
	        <input type="text" id="fname" name="firstname" placeholder="Your name..">
	        <label for="lname">Last Name</label>
	        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
	        <label for="country">Country</label>
	            <select id="country" name="country">
			       <option value="Afganistan">Afghanistan</option>
			       <option value="Albania">Albania</option>
			       <option value="Algeria">Algeria</option>
			       <option value="American Samoa">American Samoa</option>
			       <option value="Andorra">Andorra</option>
			       <option value="Angola">Angola</option>
			       <option value="Anguilla">Anguilla</option>
			       <option value="Antigua & Barbuda">Antigua & Barbuda</option>
			       <option value="Argentina">Argentina</option>
			       <option value="Armenia">Armenia</option>
			       <option value="Aruba">Aruba</option>
			       <option value="Australia">Australia</option>
			       <option value="Austria">Austria</option>
			       <option value="Azerbaijan">Azerbaijan</option>
			       <option value="Bahamas">Bahamas</option>
			       <option value="Bahrain">Bahrain</option>
			       <option value="Bangladesh">Bangladesh</option>
			       <option value="Barbados">Barbados</option>
			       <option value="Belarus">Belarus</option>
			       <option value="Belgium">Belgium</option>
			       <option value="Belize">Belize</option>
			       <option value="Benin">Benin</option>
			       <option value="Bermuda">Bermuda</option>
			       <option value="Bhutan">Bhutan</option>
			       <option value="Bolivia">Bolivia</option>
			       <option value="Bonaire">Bonaire</option>
			       <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
			       <option value="Botswana">Botswana</option>
			       <option value="Brazil">Brazil</option>
			       <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
			       <option value="Brunei">Brunei</option>
			       <option value="Bulgaria">Bulgaria</option>
			       <option value="Burkina Faso">Burkina Faso</option>
			       <option value="Burundi">Burundi</option>
			       <option value="Cambodia">Cambodia</option>
			       <option value="Cameroon">Cameroon</option>
			       <option value="Canada">Canada</option>
			       <option value="Canary Islands">Canary Islands</option>
			       <option value="Cape Verde">Cape Verde</option>
			       <option value="Cayman Islands">Cayman Islands</option>
			       <option value="Central African Republic">Central African Republic</option>
			       <option value="Chad">Chad</option>
			       <option value="Channel Islands">Channel Islands</option>
			       <option value="Chile">Chile</option>
			       <option value="China">China</option>
			       <option value="Christmas Island">Christmas Island</option>
			       <option value="Cocos Island">Cocos Island</option>
			       <option value="Colombia">Colombia</option>
			       <option value="Comoros">Comoros</option>
			       <option value="Congo">Congo</option>
			       <option value="Cook Islands">Cook Islands</option>
			       <option value="Costa Rica">Costa Rica</option>
			       <option value="Cote DIvoire">Cote DIvoire</option>
			       <option value="Croatia">Croatia</option>
			       <option value="Cuba">Cuba</option>
			       <option value="Curaco">Curacao</option>
			       <option value="Cyprus">Cyprus</option>
			       <option value="Czech Republic">Czech Republic</option>
			       <option value="Denmark">Denmark</option>
			       <option value="Djibouti">Djibouti</option>
			       <option value="Dominica">Dominica</option>
			       <option value="Dominican Republic">Dominican Republic</option>
			       <option value="East Timor">East Timor</option>
			       <option value="Ecuador">Ecuador</option>
			       <option value="Egypt">Egypt</option>
			       <option value="El Salvador">El Salvador</option>
			       <option value="Equatorial Guinea">Equatorial Guinea</option>
			       <option value="Eritrea">Eritrea</option>
			       <option value="Estonia">Estonia</option>
			       <option value="Ethiopia">Ethiopia</option>
			       <option value="Falkland Islands">Falkland Islands</option>
			       <option value="Faroe Islands">Faroe Islands</option>
			       <option value="Fiji">Fiji</option>
			       <option value="Finland">Finland</option>
			       <option value="France">France</option>
			       <option value="French Guiana">French Guiana</option>
			       <option value="French Polynesia">French Polynesia</option>
			       <option value="French Southern Ter">French Southern Ter</option>
			       <option value="Gabon">Gabon</option>
			       <option value="Gambia">Gambia</option>
			       <option value="Georgia">Georgia</option>
			       <option value="Germany">Germany</option>
			       <option value="Ghana">Ghana</option>
			       <option value="Gibraltar">Gibraltar</option>
			       <option value="Great Britain">Great Britain</option>
			       <option value="Greece">Greece</option>
			       <option value="Greenland">Greenland</option>
			       <option value="Grenada">Grenada</option>
			       <option value="Guadeloupe">Guadeloupe</option>
			       <option value="Guam">Guam</option>
			       <option value="Guatemala">Guatemala</option>
			       <option value="Guinea">Guinea</option>
			       <option value="Guyana">Guyana</option>
			       <option value="Haiti">Haiti</option>
			       <option value="Hawaii">Hawaii</option>
			       <option value="Honduras">Honduras</option>
			       <option value="Hong Kong">Hong Kong</option>
			       <option value="Hungary">Hungary</option>
			       <option value="Iceland">Iceland</option>
			       <option value="Indonesia">Indonesia</option>
			       <option value="India">India</option>
			       <option value="Iran">Iran</option>
			       <option value="Iraq">Iraq</option>
			       <option value="Ireland">Ireland</option>
			       <option value="Isle of Man">Isle of Man</option>
			       <option value="Israel">Israel</option>
			       <option value="Italy">Italy</option>
			       <option value="Jamaica">Jamaica</option>
			       <option value="Japan">Japan</option>
			       <option value="Jordan">Jordan</option>
			       <option value="Kazakhstan">Kazakhstan</option>
			       <option value="Kenya">Kenya</option>
			       <option value="Kiribati">Kiribati</option>
			       <option value="Korea North">Korea North</option>
			       <option value="Korea Sout">Korea South</option>
			       <option value="Kuwait">Kuwait</option>
			       <option value="Kyrgyzstan">Kyrgyzstan</option>
			       <option value="Laos">Laos</option>
			       <option value="Latvia">Latvia</option>
			       <option value="Lebanon">Lebanon</option>
			       <option value="Lesotho">Lesotho</option>
			       <option value="Liberia">Liberia</option>
			       <option value="Libya">Libya</option>
			       <option value="Liechtenstein">Liechtenstein</option>
			       <option value="Lithuania">Lithuania</option>
			       <option value="Luxembourg">Luxembourg</option>
			       <option value="Macau">Macau</option>
			       <option value="Macedonia">Macedonia</option>
			       <option value="Madagascar">Madagascar</option>
			       <option value="Malaysia">Malaysia</option>
			       <option value="Malawi">Malawi</option>
			       <option value="Maldives">Maldives</option>
			       <option value="Mali">Mali</option>
			       <option value="Malta">Malta</option>
			       <option value="Marshall Islands">Marshall Islands</option>
			       <option value="Martinique">Martinique</option>
			       <option value="Mauritania">Mauritania</option>
			       <option value="Mauritius">Mauritius</option>
			       <option value="Mayotte">Mayotte</option>
			       <option value="Mexico">Mexico</option>
			       <option value="Midway Islands">Midway Islands</option>
			       <option value="Moldova">Moldova</option>
			       <option value="Monaco">Monaco</option>
			       <option value="Mongolia">Mongolia</option>
			       <option value="Montserrat">Montserrat</option>
			       <option value="Morocco">Morocco</option>
			       <option value="Mozambique">Mozambique</option>
			       <option value="Myanmar">Myanmar</option>
			       <option value="Nambia">Nambia</option>
			       <option value="Nauru">Nauru</option>
			       <option value="Nepal">Nepal</option>
			       <option value="Netherland Antilles">Netherland Antilles</option>
			       <option value="Netherlands">Netherlands (Holland, Europe)</option>
			       <option value="Nevis">Nevis</option>
			       <option value="New Caledonia">New Caledonia</option>
			       <option value="New Zealand">New Zealand</option>
			       <option value="Nicaragua">Nicaragua</option>
			       <option value="Niger">Niger</option>
			       <option value="Nigeria">Nigeria</option>
			       <option value="Niue">Niue</option>
			       <option value="Norfolk Island">Norfolk Island</option>
			       <option value="Norway">Norway</option>
			       <option value="Oman">Oman</option>
			       <option value="Pakistan">Pakistan</option>
			       <option value="Palau Island">Palau Island</option>
			       <option value="Palestine">Palestine</option>
			       <option value="Panama">Panama</option>
			       <option value="Papua New Guinea">Papua New Guinea</option>
			       <option value="Paraguay">Paraguay</option>
			       <option value="Peru">Peru</option>
			       <option value="Phillipines">Philippines</option>
			       <option value="Pitcairn Island">Pitcairn Island</option>
			       <option value="Poland">Poland</option>
			       <option value="Portugal">Portugal</option>
			       <option value="Puerto Rico">Puerto Rico</option>
			       <option value="Qatar">Qatar</option>
			       <option value="Republic of Montenegro">Republic of Montenegro</option>
			       <option value="Republic of Serbia">Republic of Serbia</option>
			       <option value="Reunion">Reunion</option>
			       <option value="Romania">Romania</option>
			       <option value="Russia">Russia</option>
			       <option value="Rwanda">Rwanda</option>
			       <option value="St Barthelemy">St Barthelemy</option>
			       <option value="St Eustatius">St Eustatius</option>
			       <option value="St Helena">St Helena</option>
			       <option value="St Kitts-Nevis">St Kitts-Nevis</option>
			       <option value="St Lucia">St Lucia</option>
			       <option value="St Maarten">St Maarten</option>
			       <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
			       <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
			       <option value="Saipan">Saipan</option>
			       <option value="Samoa">Samoa</option>
			       <option value="Samoa American">Samoa American</option>
			       <option value="San Marino">San Marino</option>
			       <option value="Sao Tome & Principe">Sao Tome & Principe</option>
			       <option value="Saudi Arabia">Saudi Arabia</option>
			       <option value="Senegal">Senegal</option>
			       <option value="Seychelles">Seychelles</option>
			       <option value="Sierra Leone">Sierra Leone</option>
			       <option value="Singapore">Singapore</option>
			       <option value="Slovakia">Slovakia</option>
			       <option value="Slovenia">Slovenia</option>
			       <option value="Solomon Islands">Solomon Islands</option>
			       <option value="Somalia">Somalia</option>
			       <option value="South Africa">South Africa</option>
			       <option value="Spain">Spain</option>
			       <option value="Sri Lanka">Sri Lanka</option>
			       <option value="Sudan">Sudan</option>
			       <option value="Suriname">Suriname</option>
			       <option value="Swaziland">Swaziland</option>
			       <option value="Sweden">Sweden</option>
			       <option value="Switzerland">Switzerland</option>
			       <option value="Syria">Syria</option>
			       <option value="Tahiti">Tahiti</option>
			       <option value="Taiwan">Taiwan</option>
			       <option value="Tajikistan">Tajikistan</option>
			       <option value="Tanzania">Tanzania</option>
			       <option value="Thailand">Thailand</option>
			       <option value="Togo">Togo</option>
			       <option value="Tokelau">Tokelau</option>
			       <option value="Tonga">Tonga</option>
			       <option value="Trinidad & Tobago">Trinidad & Tobago</option>
			       <option value="Tunisia">Tunisia</option>
			       <option value="Turkey">Turkey</option>
			       <option value="Turkmenistan">Turkmenistan</option>
			       <option value="Turks & Caicos Is">Turks & Caicos Is</option>
			       <option value="Tuvalu">Tuvalu</option>
			       <option value="Uganda">Uganda</option>
			       <option value="United Kingdom">United Kingdom</option>
			       <option value="Ukraine">Ukraine</option>
			       <option value="United Arab Erimates">United Arab Emirates</option>
			       <option value="United States of America">United States of America</option>
			       <option value="Uraguay">Uruguay</option>
			       <option value="Uzbekistan">Uzbekistan</option>
			       <option value="Vanuatu">Vanuatu</option>
			       <option value="Vatican City State">Vatican City State</option>
			       <option value="Venezuela">Venezuela</option>
			       <option value="Vietnam">Vietnam</option>
			       <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
			       <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
			       <option value="Wake Island">Wake Island</option>
			       <option value="Wallis & Futana Is">Wallis & Futana Is</option>
			       <option value="Yemen">Yemen</option>
			       <option value="Zaire">Zaire</option>
			       <option value="Zambia">Zambia</option>
			       <option value="Zimbabwe">Zimbabwe</option>
			    </select>
	        <label for="subject">Subject</label>
	        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
	        <input type="submit" value="Submit">
	      </form>
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