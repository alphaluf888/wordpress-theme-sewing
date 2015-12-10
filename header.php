<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
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
	<div>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img src="img/logo.png" alt="Brand" height="50">
            </a>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-home" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>

          <div class="collapse navbar-collapse" id="navbar-home">
            <ul class="nav navbar-nav">
              <?php wp_list_pages(array("title_li" => "")); ?>
            </ul>

            <p class="navbar-text navbar-right">Tel: 0086-13501780552</p>
          </div>

        </div>
      </nav>
    </header>
  </div>
