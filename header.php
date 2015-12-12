<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Rambo Sewing Equipment Manufacturing Co., Ltd</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->
		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" >

		<?php wp_head();?>
</head>
<body>
	<!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

    <header>
			<div class="container">
		      <nav class="navbar navbar-default">
						<div class="container-fluid">
		        	<div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-home" aria-expanded="false">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			            </button>
									<a class="navbar-brand" href="#">
										<img src="img/logo.png" alt="Brand" height="50">
									</a>
			          </div>

			          <div class="collapse navbar-collapse" id="navbar-home">
			            <ul class="nav navbar-nav">
			              <?php wp_list_pages(array("title_li" => "")); ?>
			            </ul>
			          </div>
						</div>
		      </nav>

			</div>
    </header>
