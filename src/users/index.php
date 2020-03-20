<!DOCTYPE html>
<html lang="en">
  <head><link rel="stylesheet" href="normalize.css">
	<meta charset="utf-8">
	<title>My web page</title>
	<link rel="stylesheet", href="/src/users/index.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<script src="/src/users/index.js"></script>
  </head>
  <body>
	  <!-- The Header -->
	  <header> 
		<div>
			<h4>The logo</h4>
		</div>
		<div>
			  <h2 class="slogan">The header slogan</h2>
		</div>
		<div id="form">
			<ul>
				<li>Hi <span><?php echo $_SESSION['USERNAME']; ?> </span></li>
				<li><a href="javascript:void(0)" onclick="Logout()">Logout</a></li>
			</ul>
			
			<form id="login" method="post" action="/login">
				<input type="text" name="username" placeholder="User name" value=<?php echo $_SESSION['USERNAME'];?> />
				<input type="password" name="password" placeholder="Password"/>
				<label><input type="checkbox" name="rememberUsername" />Remember me </label>
				<button type="submit" name="Login">Login</button>
			</form>
			<form method="GET" id="search">
				<input type="text" name="keyword" />
				<i class="material-icons">search</i>
			</form>
		</div>
	  </header>
	  
	  <!-- The menu -->
	  <nav>
		  <ul>
			  <li>Menu 1</li>
			  <li>Menu 2</li>
			  <li>Menu 3</li>
			  <li>Menu 4</li>
		  </ul>
	  </nav>
	  
	  <!-- MAIN content -->
	  <div id="main">
			<div id="main-content">
				<h3> The main content go here</h3>
			</div>
			<div id="sidebar">
				<h3> Sidebar </h3>
				<ul>
					<li>Feature 1</li>
					<li>Feature 2</li>
					<li>Feature 3</li>
					<li>Feature 4</li>
					<li>Feature 5</li>
					<li>Feature 6</li>
				</ul>
			</div>
	  </div>
	  
	  <!-- END  MAIN content -->
	  
	  <footer>
		  <ol>
			  <li>Extra info 1</li>
			  <li>Extra info 1</li>
		  </ol>
		  <h3> The footer</h3>
			<div id="scroll"> 
				<a href="javascript:void(0)" onclick="scrollToTop()"> 
				  <i class="material-icons">arrow_drop_up</i>
				</a>
		  </div>
	</footer>
  </body>
</html>
