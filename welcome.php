<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Welcome</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.container {
	  position: absolute;
	  width: 100%;
	}

	.container img {
	  width: 100%;
	  height: auto;
	}

	.container .btn {
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  background-color: #555;
	  color: white;
	  font-size: 16px;
	  padding: 12px 24px;
	  border: none;
	  cursor: pointer;
	  border-radius: 5px;
	  text-align: center;
	}

	.btn{
		width: 300px;
		height: 80px;
		vertical-align: center;
		display: block;
		flex-wrap: nowrap;
	}

	.container .btn:hover {
	  background-color: black;
	}
	.btn2 {
	  position: absolute;
	  top: 30%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  background-color: #555;
	  color: white;
	  font-size: 16px;
	  padding: 12px 24px;
	  border: none;
	  cursor: pointer;
	  border-radius: 5px;
	  text-align: center;
	}
	</style>
</head>
<body>


		<form action=".\MyWeb\Home.php" method="POST">
			<div class="container">
			  <img src=".\MyWeb\Images\modern.jpg" alt="Modern house" style="width:100%">
			  <button type="submit" class="btn">Enter to the Website</button>
			
		</form>
		<form action=".\create_table.php" method="POST">
			  <button type="submit" class="btn2">Create Tables</button>
		</form>
	</div>
</body>
</html>