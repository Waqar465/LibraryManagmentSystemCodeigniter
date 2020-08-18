
<?php @include ('templates/header.php'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<h1>Register to continue </h1>

		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<!--					<h4>   --><?php //if(! is_null($msg)) echo $msg;?><!--   </h4>-->
			<form action="<?php echo base_url('Login/register')?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name"> <h5> Name:</h5> </label>
					<input type="text" name="name" id="name" value="" class="form-control" placeholder="John Doe">
					<div class="notification ">
						<?php echo form_error('name'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="email"> <h5> Email:</h5> </label>
					<input type="text" name="email" id="email" value="" class="form-control" placeholder="example@mail.com">
					<div class="notification ">
						<?php echo form_error('email'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="password"> <h5> Password:</h5> </label>
					<input type="password" name="password" id="password" value="" class="form-control" placeholder="Enter password">
					<?php echo form_error('password'); ?>
				</div>
				<div class="form-group">
					<label for="re_password"> <h5> Re enter your Password:</h5> </label>
					<input type="password" name="re_password" id="re_password" value="" class="form-control" placeholder="Re Enter password">
					<?php echo form_error('re_password'); ?>
				</div>
				<div class="form-group">
					<label for="pic"> <h5> Re enter your Password:</h5> </label>
					<input type="file" name="profilePic" id="profilePic" value="" class="form-control" >
				</div>
				<div class="form-group">
					<label for="role"> <h5> Role:</h5> </label>
					<select name="role" id="role">
						<option value="author">Author</option>
						<option value="reader">Reader</option>
					</select>
				</div>



				<button class="btn btn-outline-success">Register</button>
				<a href="<?php echo base_url('Login/register'); ?> " class="btn btn-danger"> Reset</a>
			</form>
		</div>
	</div>
</div>


<?php @include ('templates/footer.php'); ?>
