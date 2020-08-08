
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
	<div class="row">
		<div class="col-md-12">
			<h1 class="py-4">All Users with their role</h1>
			<table class="table-hover table-striped table">
				<tr>
					<th>No.</th>
					<th>User Email</th>
					<th>User Role</th>
				</tr>
				<?php $i=1; if (!empty($users)) { foreach ($users as $user) {  ?>
					<tr>
						<td><?php echo $i; $i++;?></td>
						<td><?php echo $user['email'] ;?></td>
						<td><?php echo $user['role'] ;?></td>

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
