<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CAMOUFLAGE and STYLE</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body
	{
		/*background-image: url('https://images.unsplash.com/photo-1465326117523-6450112b60b2?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=f340b4d4a364ac53dcb92955373fc5e0');*/
		background-image: url('http://localhost:8888/bg.jpg');
		background-size: 100%;
		background-color: #dddddd;
		margin: 0px;
	}

	/*a:link    { color: white; text-decoration: none; }*/
	/*a:visited { color: white; text-decoration: none; }*/
	/*a:hover   { color: white; text-decoration: none; }*/

	.top_bar
	{
		top: 0px;
		margin: 0px;
		width: 100%;
		height: 100px;
		position: fixed;
	}
	.menu_box
	{
		width: 100%;
		height: 85px;
		background-color: white;
		opacity: 0.75;
		position: absolute;
		top: 10px;
	}
	.logo_box
	{
		margin-left: 8%;
		background-color: #333333;
		position: absolute;
		width: 120px;
		height: 70px;
		text-align: center;
		padding-top: 10px;
	}
	.logo_text
	{
		position: absolute;
		top:50px;
		left:22px;
		color: white;
		font-weight: normal;
		font-family: "herculanum", herculanum, fantasy;
		font-size: 18px;
		margin:0px;
	}
	</style>
</head>
<body>
<div class="top_bar">
	<div class="menu_box">
	</div>
	<a href="">
		<div class="logo_box">
			<img src="http://localhost:8888/camo_u_white.png" style="width: 70px; height:auto;">
			<h1 class="logo_text">camo_u</h1>
		</div>
	</a>
</div>
</body>
</html>