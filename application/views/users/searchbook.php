
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-10">
			<h1>Search Book here </h1>

		</div>
		<div class="col-lg-2">
			<a href="<?php echo base_url('Login') ?>"><button class="btn btn-outline-danger">LOGOUT</button></a>

		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<!--					<h4>   --><?php //if(! is_null($msg)) echo $msg;?><!--   </h4>-->
			<form action="<?php echo base_url('Book/result')?>" method="post">
				<div class="form-group">
					<label for="password"> <h5> SearchBy</h5> </label>
					<select name="searchby" id="searchby">
						<option value="bookname"> Name</option>
						<option value="bookauthor">Author</option>
						<option value="bookpublishyear"> Year of Publication</option>
						<option value="bookrack">Book Rack</option>
					</select>
					<br>
					<label for="rackname" id="rackname1"> <h5> Select Rack Name</h5> </label>
					<select name="rackname" id="rackname">
						<?php  foreach ($racks as $rack) {?>
						<option value="<?php echo $rack['rackid']; ?>"> <?php  echo $rack['rackname'] ;  ?> </option>
						<?php } ?>
					</select>

				</div>
				<div class="form-group">
					<input type="text" name="searchvalue" id="searchvalue" value="" class="form-control">
					<div class="notification ">
						<?php echo form_error('searchvalue'); ?>
					</div>
				</div>
				<button class="btn btn-primary">Search</button>
				<a href="<?php  base_url('Book/search') ?> " class="btn btn-danger"> Reset</a>
			</form>

		</div>
	</div>
</div>


<?php $this->load->view('templates/footer.php'); ?>
