
<?php @include ('templates/header.php'); ?>
		<div class="container">
			<div class="row py-5">
				<div class="col-lg-12">
					<h1>LOGIN </h1>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
<!--					<h4>   --><?php //if(! is_null($msg)) echo $msg;?><!--   </h4>-->
					<form action="<?php echo base_url('Login/client_login')?>" method="post">
						<div class="form-group">
							<label for="email"> <h5> Email:</h5> </label>
							<input type="text" name="email" id="email" value="" class="form-control">
							<div class="notification ">
								<?php echo form_error('email'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="password"> <h5> Password:</h5> </label>
							<input type="password" name="password" id="password" value="" class="form-control">
							<?php echo form_error('password'); ?>
						</div>
						<div class="form-group">
							<label for="password"> <h5> Role:</h5> </label>
							<select name="role" id="role">
								<option value="author">Author</option>
								<option value="reader">Reader</option>
							</select>
								</div>

						
						<button class="btn btn-outline-success">Login</button>
						<a href="<?php echo base_url('Login/register'); ?> " class="btn btn-outline-primary"> Register</a>
					</form>
				</div>
			</div>
		</div>


<?php @include ('templates/footer.php'); ?>
