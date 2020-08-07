
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<h1>Add Rack </h1>
			<hr>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">

			<form method="post" action="<?php echo base_url('Rack/create/'); ?>">
				<div class="row py-3">
					<div class="col-md-6">
						<div class="form-group">
							<label for="rackname">RackName :</label>
							<input type="text" name="rackname" value="" class="form-control">
							<?php echo form_error('rackname')?>
						</div>
						<button class="btn btn-primary">Add</button>
						<a href="<?php echo base_url('Rack/show');?>" class="btn btn-danger">Cancel</a>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>


<?php $this->load->view('templates/footer'); ?>
