
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-10">
			<h1>Welcome Author </h1>

		</div>
		<div class="col-lg-2">
			<a href="<?php echo base_url('Login') ?>"><button class="btn btn-outline-danger">LOGOUT</button></a>

		</div>

	</div>
	<hr>
	<div class="row">

		<div class="col-md-12">

					<center>
						<a href="<?php echo base_url('Book/show');?>"><button class="btn btn-success">Click to manage Books</button></a>
					</center>

		</div>
	</div>

</div>


<?php $this->load->view('templates/footer'); ?>
