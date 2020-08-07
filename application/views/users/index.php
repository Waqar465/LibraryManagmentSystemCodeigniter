
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<center>
			<h1>Welcome to UserPanel </h1>
				<hr>
			</center>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<form action="<?php echo base_url('Book/search') ; ?>" method="post">
				<div class="form-group">
					<button class="btn btn-success">Click to search a book</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
		<h2>Racks Available</h2>
		<table class="table table-striped table-hover">
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>

			<?php $i=1; if (!empty($racks)) { foreach ($racks as $rack) {  ?>
				<tr>
					<td><?php echo $i; $i++;?></td>
					<td><a href=" <?php echo base_url().'Rack/search/'.$rack['rackid'] ; ?>"> <?php  echo $rack['rackname']; ?>  </a></td>

				</tr>
			<?php } } else { ?>
				<tr>
					<td colspan="2"> No Data Found</td>
				</tr>
			<?php } ?>

		</table>

		</div>
	</div>
</div>


<?php $this->load->view('templates/footer'); ?>
