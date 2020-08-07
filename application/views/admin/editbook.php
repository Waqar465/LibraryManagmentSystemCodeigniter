
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<h1>Edit Rack </h1>
			<hr>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">

			<form method="post" action="<?php echo base_url('Book/update/').$book['bookid'] ; ?>">
				<div class="row py-3">
					<div class="col-md-6">
						<div class="form-group">
							<label for="bookname">Book Name :</label>
							<input type="text" name="bookname" value="<?php echo set_value('bookname', $book['bookname'])?>" class="form-control">
							<?php echo form_error('bookname')?>
						</div>
						<div class="form-group">
							<label for="bookauthor">book author :</label>
							<input type="text" name="bookauthor" value="<?php echo set_value('bookauthor', $book['bookauthor'])?>" class="form-control">
							<?php echo form_error('bookauthor')?>
						</div>
						<div class="form-group">
							<label for="bookpublishyear">Book Publish year :</label>
							<input type="text" name="bookpublishyear" value="<?php echo set_value('bookpublishyear', $book['bookpublishyear'])?>" class="form-control">
							<?php echo form_error('bookpublishyear')?>
						</div>
						<div class="form-group">
							<label for="bookrack">Book rack id:</label>
							<input type="text" name="bookrack" value="<?php echo set_value('bookrack', $book['rackid'])?>" class="form-control">
							<?php echo form_error('bookrack')?>
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
