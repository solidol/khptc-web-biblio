﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$me->title?></title>

<link href="<?=$me->siteurl?>/css/bootstrap.css" rel="stylesheet">
<link href="<?=$me->siteurl?>/css/datepicker3.css" rel="stylesheet">
<link href="<?=$me->siteurl?>/css/styles.css" rel="stylesheet">
<link href="<?=$me->siteurl?>/css/jquery.dataTables.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<script src="<?=$me->siteurl?>/js/jquery-1.11.1.min.js"></script>
<script src="<?=$me->siteurl?>/js/bootstrap.min.js"></script>
<script src="<?=$me->siteurl?>/js/chart.min.js"></script>

<script src="<?=$me->siteurl?>/js/easypiechart.js"></script>
<script src="<?=$me->siteurl?>/js/easypiechart-data.js"></script>
<script src="<?=$me->siteurl?>/js/bootstrap-datepicker.js"></script>
<script src="<?=$me->siteurl?>/js/custom.js"></script>
<script src="<?=$me->siteurl?>/js/jquery.dataTables.js"></script>

<!--[if lt IE 9]>
<link href="css/rgba-fallback.css" rel="stylesheet">
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Меню</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span><?=$me->name?> </span></a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>


 	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search" action="<?=$me->siteurl?>/index.php/search" method="POST">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Пошук">
			</div>
		</form>
		<ul class="nav menu">
			<li class=" <?=$me->m["leftmenu"]["main"]?>"><a href="<?=$me->siteurl?>/"><span class="glyphicon glyphicon-dashboard"></span> Головна</a></li>
			<li class=" <?=$me->m["leftmenu"]["all"]?>"><a href="<?=$me->siteurl?>/index.php/all"><span class="glyphicon glyphicon-th"></span> Усі книги</a></li>
			<li class="parent ">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span> Пошук<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Простий пошук
						</a>
					</li>
					<li>
						<a class=" <?=$me->m["leftmenu"]["advsearch"]?>" href="<?=$me->siteurl?>/index.php/advsearch">
							<span class="glyphicon glyphicon-share-alt"></span> Розширений пошук
						</a>
					</li>

				</ul>
			</li>			
                        <li class=" <?=$me->m["leftmenu"]["aa"]?>"><a href="<?=$me->siteurl?>/charts.html"><span class="glyphicon glyphicon-stats"></span></a></li>
			<li role="presentation" class="divider"></li>
                        <li class=" <?=$me->m["leftmenu"]["about"]?>"><a href="<?=$me->siteurl?>/index.php/about"><span class="glyphicon glyphicon-list-alt"></span> Інструкція користувача</a></li>


			
			
		</ul>
	</div><!--/.sidebar-->       
        
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
    	<div class="row">
			<ol class="breadcrumb"><!--
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Показания</li>-->
                            <?php
                            $me->getBread();
                            ?>
			</ol>
		</div><!--/.row-->
		<div class="row">

<?php
require_once $me->tmpl;
?>

                    		</div><!--/.row-->
	</div>	<!--/.main-->
        </body>

</html>
