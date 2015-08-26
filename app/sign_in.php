<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">LogIn</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      	<!-- content area -->
      	<div class="row">
      		<div class="col-md-8 col-md-offset-2">
      			<div class = "container-fluid">
					<div class="wrapper">
						<form action="app/profileroute.php" method="post" name="Login_Form" class="form-signin">       
						    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
							  <hr class="colorgraph"><br>
							  
							  <input type="text" class="form-control" name="email" placeholder="Email" required="" autofocus="" />
							  <br>
							  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		                                   
					            <br>
					            <select class="form-control" name="logintype">
					                <option value="0" selected>Acount</option>
					                <option value="1">Bundy Clock</option>
					            </select>
					            <br>
				  			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
						</form>	
								<hr>		
					</div>
				</div>
      		</div>
      	</div>

    	
		<!-- content area -->
    </div>
  </div>
</div>