
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<h1>Book Result</h1>
			<hr>

		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">

			<table class="table table-striped table-hover">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>author</th>
					<th>year</th>
					<th>Rack</th>
				</tr>

				<?php $i=1; if (!empty($books)) { foreach ($books as $book) {  ?>
					<tr>
						<td><?php echo $i; $i++;?></td>
						<td> <?php  echo $book['bookname']; ?>  </td>
						<td> <?php  echo $book['bookauthor']; ?>  </td>
						<td> <?php  echo $book['bookpublishyear']; ?>  </td>
						<td> <?php  echo $book['rackname']; ?>  </td>

					</tr>
				<?php } } else { ?>
					<tr>
						<td colspan="5"> No Data Found</td>
					</tr>
				<?php } ?>

			</table>


		</div>
	</div>
</div>


<?php $this->load->view('templates/footer.php'); ?>
