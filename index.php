<?php

	function get_title(){ // Displays Page Title
		echo 'Index Page';
	}

	function display_content(){ ?>



			<?php 
				global $category;
				global $items;
			 ?>

		<div class='container'>

			<div class='searchbox-wrapper'>

				<?php // create dropdown

					$category = array_unique($category);
					echo "<form method='POST' action=''>";
					echo create_dropdown('category',$category);
					echo "<input type='submit' name='submit' value='Search'></form>";


					function display_chix($item){

						echo "<div class='item-wrapper col-md-6 col-sm-6'>";

						foreach ($item as $key => $value) {

							 if ($key == 'title') {
								echo "<div class='desc'>";
								echo "<h1 class='title'>" . $value . "</h1>";

								} elseif ($key == 'image'){
									echo "</div>"; // ::closing:: div class = desc

									echo "<div class='img'>";
									echo  $value;

								 	echo "</div>"; // ::closing:: div class = image 

									} else {
										echo $value . "<br>";
									}
						} 
						echo "</div>"; // ::closing:: div class = item-wrapper
					} // display_chix ::end

				?>

			</div>


			<?php // category selector
				foreach ($items as $item) {
					if (!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All') {
							display_chix($item);
						}} 
			?>

		</div><!--  div container -->

		<!-- MODAL LOG-IN -->
		<div  id='modal-login' class="modal fade" role="dialog">

		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
			    <div class="modal-content">

			        <div class="modal-header">
			          	<button type="button" class="close" data-dismiss="modal">&times;</button>
			         	 <h4 class="modal-title">Log-in to your account</h4>
			        </div>

			        <div class="modal-body">

			         	 <form action="" method="POST">
							Username:<br>
								<input type="text" name='username'><br>
							Password:<br>
								<input type="password" name='password'><br><br>		
								<input type="submit" name="login" value="Log-in"><br><br>

						</form>

			        </div>
			    </div>

		      </div>
		</div> <!-- /end of modal-login -->


		<!-- MODAL REGISTRATION -->
		<div id='modal-register' class="modal fade" role="dialog">
		    <div class="modal-dialog">

			    <div class="modal-content">

			        <div class="modal-header">
			          	<button type="button" class="close" data-dismiss="modal">&times;</button>
			         	 <h4 class="modal-title">Register</h4>
			        </div>

			        <div class="modal-body">

			         	 <form action="" method="POST" href="href='#modal-register">
				         	Full Name:<br>
								<input type="text" name='fullname'><br>
							Email Address:<br>
								<input type="text" name='new_email' required><br>
							Username:<br>
								<input type="text" name='new_username' required><br>
							Password:<br>
								<input type="password" name='new_password' required><br><br>	
								<input type="submit" name="register" value="Register"><br><br>
						</form>

						<?php

							// register new user
							if (isset($_POST['register'])) {
	
								$newuser_match = 'false';

								foreach ($users as $user) {
									if($_POST['new_username'] == $user['username']){
										$newuser_match = 'true';
										echo "username already taken";
										
									} else {

										if($newuser_match = 'false') {
											create_account($users);
										}
									}
								} //foreach

								
							}
						?>

			        </div>

			    </div>
	      
		    </div>
	  	</div> <!-- /end of modal-register -->
	  	<?php

	}


require_once 'hotchix.php';



?>





