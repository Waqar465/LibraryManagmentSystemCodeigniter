
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<h1>Manage Books Here </h1>
			<hr>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-striped table-hover">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Author</th>
					<th>Publisher</th>
					<th>Rack Name</th>
					<th>Operations</th>
				</tr>

				<?php $i=1; if (!empty($books)) { foreach ($books as $book) {  ?>
					<tr>
						<td><?php echo $i; $i++;?></td>
						<td><?php echo $book['bookname'] ;?></td>
						<td><?php echo $book['bookauthor'] ;?></td>
						<td><?php echo $book['bookpublishyear'] ;?></td>
						<td><?php   echo $book['rackname'];  ?></td>
						<td>
							<a href="<?php echo base_url().'Book/update/'.$book['bookid'] ;?>">	<button class="btn btn-primary"> Edit</button></a>

							<a href="<?php echo base_url('Book/delete/'. $book['bookid']);?>"><button class="btn btn-danger"> Delete</button></a>

						</td>
					</tr>
				<?php } } else { ?>
					<tr>
						<td colspan="2"> No Data Found</td>
					</tr>
				<?php } ?>

			</table>
			<a href="<?php echo base_url('Book/create')?>"> <button class="btn btn-outline-success">Add new Book</button></a>
		</div>
	</div>
</div>


<?php $this->load->view('templates/footer'); ?>
