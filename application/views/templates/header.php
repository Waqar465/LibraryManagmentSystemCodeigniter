<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('/resources/css/bootstrap.min.css'); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#searchby").click(function(){
				if ($( "#searchby option:selected" ).text() == "Book Rack"){
					$("#rackname").show();
					$("#rackname1").show();
					$("#searchvalue").hide();
				}

				// $(this).hide();
			});
		});

	</script>
	<title>Document</title>
	<style>
		#rackname,#rackname1{
			display:none;
		}

	</style>
</head>
<body>
<div class="navbar navbar-dark bg-dark ">
	<a href="" class="navbar navbar-brand">Library Managment System</a>
</div>
