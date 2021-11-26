<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<![endif]-->
			<title>kriminalregister</title>
			<!-- BOOTSTRAP CORE STYLE  -->
			<link href="assets/css/bootstrap.css" rel="stylesheet" />
			<!-- FONT AWESOME STYLE  -->
			<link href="assets/css/font-awesome.css" rel="stylesheet" />
			<!-- CUSTOM STYLE  -->
			<link href="assets/css/style.css" rel="stylesheet" />
			<!-- GOOGLE FONT -->
			<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		</head>
		<?php include( "config.php"); session_start(); if (isset($_SESSION[ 'id'])) { echo '

		<body>
			<div class="navbar navbar-inverse set-radius-zero" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<img src="http://ringfjordnyt.dk/wp-content/uploads/2017/10/Politi.gif" width=180 height=70/>
						</a>
					</div>
					<div class="right-div">
						<a href="logout.php" class="btn btn-danger pull-right">Log ud af kr</a>
					</div>
				</div>
			</div>
			<!-- LOGO HEADER END-->
			<section class="menu-section">
				<div class="container">
					<div class="row ">
						<div class="col-md-12">
							<div class="navbar-collapse collapse ">
								<ul id="menu-top" class="nav navbar-nav navbar-right">
									<li>
										<a href="index.php"> Hjem</a>
									</li>
									<li>
										<a href="add_criminal.php" class="menu-top-active">Tilføj </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- MENU SECTION END-->
			<div class="panel panel-info">
				<div class="panel-heading">
					<p></p>
					<p></p>Tilføj til KR
					<p></p>
					<p></p>
				</div>
				<div class="panel-body">
					<form action="add_criminal_post.php" method="post">
						<p>
							<div class="form-group">
								<label for="nom">Navn & efternavn</label> :
								<p class="help-block">ex: Emil Vestergaard</p>
								<input type="text" name="nom" id="nom" class="form-control" required />
								<br />
							</div>
							<div class="form-group">
								<label for="message">Ingame ID</label> :
								<p class="help-block">ex 15</p>
								<input type="text" name="telephone" id="telephone" class="form-control" required />
								<br />
							</div>
							<div class="form-group">
								<label for="message">evt Steam ID</label> :
								<p class="help-block">STEAM_0:0:61796428 eller 76561198083858584</p>
								<input type="text" name="steam" id="steam" class="form-control"/>
								<br />
							</div>
							<div class="form-group">
								<label for="message">forbrydelse</label> :
								<p class="help-block">Tyv/ Røveri / ...</p>
								<input type="text" name="crime" id="crime" class="form-control" required />
								<br />
							</div>
							<div class="form-group">
								<label for="message">Straf</label> :
								<p class="help-block">ex $100 bøde, 1 år i fængsel</p>
								<input type="text" name="sanction" id="sanction" class="form-control" required />
								<br />
							</div>
							<input type="submit" value="Tilføj til KR" class="btn btn-info />
						</p>
					</form>
					<p></p>
					<img src="https://dinavis.dk/wp-content/uploads/2017/10/Politi-logo.jpg" align="center">
					</div>
				</div>
				<!-- CONTENT-WRAPPER SECTION END-->
				<section class="footer-section">
				<div class="container">
				<div class="row">
					<div class="col-md-12">
							   &copy; 2019 DinPolitistyrke |
						<a href="https://www.youtube.com/user/davendrix" target="_blank"  > Coded by : Davendrix</a>
			
						
						<a href="https://github.com/ValdemarLarsen" target="_blank" > Oversat af : Valdemar Larsen</a>
					</div>
				</div>
				</section>
				<!-- FOOTER SECTION END-->
				<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
				<!-- CORE JQUERY  -->
				<script src="assets/js/jquery-1.10.2.js"></script>
				<!-- BOOTSTRAP SCRIPTS  -->
				<script src="assets/js/bootstrap.js"></script>
			</body>'; } else { header( "Location: login.php"); } ?>
		</html>
