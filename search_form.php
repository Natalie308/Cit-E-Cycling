<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
</head>


<body>
	<nav class="navbar navbar-expand-sm fixed-top scroll">
	    <a href="index.html" class="navbar-brand">Cit-E Cycling</a>
		<div>
		    <ul class="navbar-nav">
				<li class="nav-item"><a href="index.html" class="nav-link">Homepage</a></li>
        		<li class="nav-item"><a href="register_form.html" class="nav-link">Register</a></li>
				<li class="nav-item"><a href="admin_login.html" class="nav-link">Login</a></li>
				<li class="nav-item"><a href="search_form.php" class="nav-link">Search</a></li>
        		<li class="nav-item"><a href="view_participants_edit_delete.php" class="nav-link">Edit or Delete Participant</a></li>
    		</ul> 
		</div>
	</nav>

	<div class="header">
		<div class="img_parent">
			<div class="img">
				<img class="img_fluid"src="images/cycling.jpg" alt="Cycling">
			</div>
		</div>
		<div class="img-content">
			<span>
    			<h1>Search for Participant or Club</h1>
    			<form action="search_result.php" method="post">
        		<p>Search for a First name here</p>
        		<input type="text" name= "firstname_search" placeholder="Search">
        		<input type="submit">
    			</form>
    			<form action="search_result2.php" method="post">
        		<p>Search for a club here</p>
        		<input type="text" name= "club_search" placeholder="Search">
        		<input type="submit">
    			</form>
			</span>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

	<script>
		$(document).scroll(function(){
			$(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height());
		})
	</script>
</body>
</html>