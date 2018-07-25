<!--include header file-->
<?php include("header.php"); ?>
	<head>
		<!--include navbar file-->
		<?php include("navbar.php"); ?>
		<!--include stylesheets-->
		<link rel = "stylesheet" type = "text/css" href = "navbar.css"/>
		<link rel = "stylesheet" type = "text/css" href = "header.css"/>
		<link rel = "stylesheet" type = "text/css" href = "contact.css"/>
		<link rel = "stylesheet" type = "text/css" href = "footer.css"/>
	</head>
	<body>
		<h1> Contact Me </h1>
				<div class = "main">
					<div class = "Github">
						<a href="https://github.com/Zrmeadows"><img src="GitHub_Logo_White.png" /></a>
						<br>
					</div>
					<div class = "linkedIn">
						<a href = "https://www.linkedin.com/in/zachary-meadows-129604163/"><img src = "In-2CRev-48px-TM.png"/></a>
						<br>
					</div>
					<div class = "BoxForEmail">
						<div class = "Email">
							<a href = "mailto:Zachary.Meadows@usm.edu"> Email </a>
						</div>
					</div>
				</div>
				<div class = "contactForm">
					<form>
						<label> Name </label>
						<input name = "name" placeholder = "Type Here">
						<label> Email </label>
						<input email = "email" placeholder = "Type Here">
						<label> Message </label>
						<textarea label =  "label" placeholder = "Type Here"></textarea>
					</form>
					<div class = "submit">
						<p> Submit </p>
					</div>
				</div>
				<!--include footer file-->
			<?php include("footer.php"); ?>
