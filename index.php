<!DOCTYPE html>
<html>
<head>
	<title>Students Class FeedBack</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/apps.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.theme.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>

<body>
	<header>
		<div class="panel panel-success">
	  		<div class="panel-heading">
	  			<div class="page-header">
				  <h1>CodeFix Students Developers FeedBack </h1>
				</div>
	  		</div>
		</div>
	</header>
	
	<section id="userLoginArea">
		<div class="container" id="tabs">
		  <ul >
		    <li><a href="#tabs-1">Developers Registration</a></li>
		    <li><a href="#tabs-2">Developers Login</a></li>
		    <li><a href="#tabs-3">Admin Panel</a></li>
		     <li><a href="#tabs-4">Notic Board</a></li>
		  </ul>
  		<div id="tabs-1">
		    <form method="post" action="model/isvalidation.php">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		  <div id="tabs-2">
		    
		  </div>
		  <div id="tabs-3">
		    
		  </div>
		  <div id="tabs-4">
		    
		  </div>
		</div>
	</section>

</body>
</html>