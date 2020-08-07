
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<h1>Manage Racks Here </h1>
			<hr>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-striped table-hover">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Operations</th>
				</tr>

				<?php $i=1; if (!empty($racks)) { foreach ($racks as $rack) {  ?>
					<tr>
						<td><?php echo $i; $i++;?></td>
						<td><a href=" <?php echo base_url().'Rack/search/'.$rack['rackid'] ; ?>"> <?php  echo $rack['rackname']; ?>  </a></td>
						<td>
							<a href="<?php echo base_url().'Rack/update/'.$rack['rackid'] ;?>">	<button class="btn btn-primary"> Edit</button></a>

							<a href="<?php echo base_url('Rack/delete/'. $rack['rackid']);?>"><button class="btn btn-danger"> Delete</button></a>

						</td>
					</tr>
				<?php } } else { ?>
					<tr>
						<td colspan="2"> No Data Found</td>
					</tr>
				<?php } ?>

			</table>
			<a href="<?php echo base_url('Rack/create') ;?>"><button class="btn btn-outline-success">Add New Rack</button></a>

		</div>
	</div>
</div>


<?php $this->load->view('templates/footer'); ?>
