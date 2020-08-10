
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<h1>Update Your Profile </h1>
			<hr>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">

			<form method="post" action="<?php echo base_url('User/update/').$_SESSION['id']; ?>">
				<div class="row py-3">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name :</label>
							<input type="text" name="name" value="<?php echo set_value('name',$_SESSION['name']); ?>" class="form-control">
							<?php echo form_error('name')?>
						</div>
						<button class="btn btn-primary">Update</button>
						<a href="" class="btn btn-danger">Reset</a>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>


<?php $this->load->view('templates/footer'); ?>
