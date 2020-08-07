
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<h1>Add Book </h1>
			<hr>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">

			<form method="post" action="<?php echo base_url('Book/create/') ; ?>">
				<div class="row py-3">
					<div class="col-md-6">
						<div class="form-group">
							<label for="bookname">Book Name :</label>
							<input type="text" name="bookname" value="" class="form-control">
							<?php echo form_error('bookname')?>
						</div>
						<div class="form-group">
							<label for="bookauthor">book author :</label>
							<input type="text" name="bookauthor" value="" class="form-control">
							<?php echo form_error('bookauthor')?>
						</div>
						<div class="form-group">
							<label for="bookpublishyear">Book Publish year :</label>
							<input type="text" name="bookpublishyear" value="" class="form-control">
							<?php echo form_error('bookpublishyear')?>
						</div>
						<div class="form-group">
							<label for="rackname"> <h5> Select Rack Name</h5> </label>
							<select name="rackname" id="rackname2">
								<?php  foreach ($racks as $rack) {?>
									<option value="<?php echo $rack['rackid']; ?>"> <?php  echo $rack['rackname'] ;  ?> </option>
								<?php } ?>
							</select>
						</div>
						<button class="btn btn-primary">Add</button>
						<a href="<?php echo base_url('Book/show')?>" class="btn btn-danger">Cancel</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<?php $this->load->view('templates/footer'); ?>
