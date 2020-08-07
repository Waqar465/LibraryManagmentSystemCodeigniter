
<?php $this->load->view('templates/header'); ?>
<div class="container">
	<div class="row py-5">
		<div class="col-lg-12">
			<h1>Books in the rack </h1>
			<hr>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<ul>

				<?php  if (!empty($books)) { foreach ($books as $book) {  ?>

					<li class="py-2">
						<?php  echo $book['bookname'] . " by " .$book['bookauthor'] ; ?>
					</li>
				<?php } } else { ?>
					<h3>
						No Books Found
					</h3>
				<?php } ?>


			</ul>


		</div>
	</div>
</div>


<?php $this->load->view('templates/footer'); ?>
