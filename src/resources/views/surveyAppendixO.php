<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
	<script src="https://kit.fontawesome.com/555936ed9c.js" crossorigin="anonymous"></script>
    <title>Survay form page</title>

</head>

<body>

	
		<div class="wrapper">
		<div class="sidebar">
			<br>
			<h2>VWS</h2>
				<ul>
					<li><a href="#"><i class="fas fa-home"></i>Dashboard</a></li>
					<li><a href="#"><i class="fas fa-heartbeat"></i>Wellness Activity</a></li>
					<li><a href="#"><i class="far fa-clipboard"></i>Survey</a></li>
					<li><a href="#"><i class="far fa-comments"></i>Forums</a></li>
					<li><a href="#"><i class="far fa-comment"></i>Messages</a></li>
				</ul>
				<br>
				<img src="images/example2.png"></img>
		</div>
	</div> 
	

	<!--top includes greetings, avatar, user name and drop down list-->
	<!--all followed the mainpage design in first mockup, might change in later-->
	<div class='row'>
		<div class='buttons'>
			<div class='greeting'><h2>Survay form name</h2> </div>
			<img class='avatar' alt='Avatar image' src="images/example2.png">
			<div class='user-name'>
				<h4>John Doe</h4>
			</div>
			<div class='dropdown-button'>
				<button class='dropbtn'><i class="fas fa-chevron-down"></i></button>
				<div class='dropdown-content'>
					<a href="#">link 1</a>
					<a href="#">link 2</a>
					<a href="#">link 3</a>
				</div>
			</div>
		</div>
	</div>

	<!--Survey form start from here-->
	<!--Should be in the middle of the screen-->
	<div class='survey'>
	<label id="name-label" for="name">Name:</label>
      <input type="text" required id="name" name="user_name" placeholder="Enter name here">   </div>
    <div>
      <label for="address-label">Address:</label>
      <input type="Address" id="address" name="Address" placeholder="Enter address here">   </div>
    <div>
      <label id="email-label" for="Email">Email:</label>
      <input type="email" required id="email" name="user_email" placeholder="Enter email here">   </div>
    <div>
      <label id="number-label" for="phone">Phone Number:</label>
      <input type="number" id="number" name="user_name" placeholder="Enter 10 digit number" min="1" max="9">  </div>
	</div>
</body>

</html>
