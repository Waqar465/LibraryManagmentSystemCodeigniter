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
		#role{
			display: block;
			font-size: 16px;
			font-family: sans-serif;
			font-weight: 700;
			color: #444;
			line-height: 1.3;
			padding: .6em 1.4em .5em .8em;
			width: 100%;
			box-sizing: border-box;
			margin: 0;
			border: 1px solid #aaa;
			box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
			border-radius: .5em;
		}

	</style>
</head>
<body>
<div class="navbar navbar-dark bg-dark ">
	<a href="" class="navbar navbar-brand">Library Managment System</a>
</div>
