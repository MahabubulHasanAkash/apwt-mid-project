<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="{{asset('css/profile.css')}}">
</head>
<body>

	<div id="navbar">
		<p id="logo"><b>Profile</b></p> 
	</div>

	<ul>
		
		<li><a href="##">Logout</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#about">Blog</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="/home">Home</a></li>
		<li><a href="/dashboard">Dashboard</a></li>

	</ul>
	<!--<form action="../php/profile_picturecheck.php" method="post" enctype="multipart/form_data">-->


	<div class="card">

		<img src="images/imgmale.png" alt="John" style="width:95%">
		<h1>Ahmed Afridi</h1>
		<p class="title">Collector</p>
		<div class="info"><i class="fas fa-envelope-open-text"></i>&nbsp;&nbsp;afridi@gmail.com</div>
		<div class="info"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;01777888899</div>
		<div class="info"><i class="fas fa-birthday-cake"></i>&nbsp;&nbsp;22 May 1999</div>
		<div class="info"><i class="fas fa-venus-mars"></i>&nbsp;&nbsp;Male</div>
		<div class="info"><i class="fas fa-map-marked"></i>&nbsp;&nbsp;Banani, Dhaka</div>
		<div class="info"><i class="fas fa-user-edit"></i><a href="#update">o</a>Update</div>
	</div>


</body>
</html>