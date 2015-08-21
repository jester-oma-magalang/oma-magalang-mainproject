<?php include('html/head.php');?>

<div class = "container">
	<div class="wrapper">
		<form action="dashboard.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
			  <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>     		                                   
	            <select class="form-control" name="logintype">
	                <option value="0" selected>Acount</option>
	                <option value="1">Bundy Clock</option>
	            </select>
  			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
		</form>			
	</div>
</div>

<?php include('html/foot.php');?>