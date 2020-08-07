
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<center>
				<h1>Welcome to Admin Panel </h1>
				<hr>
			</center>
		</div>

	</div>
	<div class="row">
		<div class="col-md-4">

					<center>
						<a href="<?php echo base_url('Rack/show');?>"><button class="btn btn-success">Click to manage Racks</button></a>

					</center>

		</div>
		<div class="col-md-4">

					<center>
						<a href="<?php echo base_url('Book/show');?>"><button class="btn btn-success">Click to manage Books</button></a>

					</center>

		</div>
	</div>

</div>


<?php $this->load->view('templates/footer'); ?>
