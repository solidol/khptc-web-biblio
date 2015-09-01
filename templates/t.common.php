<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$me->title?></title>

<link href="<?=$me->siteurl?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=$me->siteurl?>/css/datepicker3.css" rel="stylesheet">
<link href="<?=$me->siteurl?>/css/styles.css" rel="stylesheet">
<!--<link href="<?=$me->siteurl?>/css/jquery.dataTables.css" rel="stylesheet">-->
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
<!--		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class=" <?=$me->m["leftmenu"]["main"]?>"><a href="<?=$me->siteurl?>/"><span class="glyphicon glyphicon-dashboard"></span> Главная</a></li>
			<li class="parent  <?=$me->m["leftmenu"]["counters"]?>">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span> Все показания<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse <?=$me->m["leftmenu"]["counters.act"]?>" id="sub-item-1">
					<li>
						<a class=" <?=$me->m["leftmenu"]["counters.gas"]?>" href="<?=$me->siteurl?>/index.php/counters:gas">
							<span class="glyphicon glyphicon-share-alt"></span> Газ
						</a>
					</li>
					<li>
						<a class=" <?=$me->m["leftmenu"]["counters.water"]?>" href="<?=$me->siteurl?>/index.php/counters:water">
							<span class="glyphicon glyphicon-share-alt"></span> Вода
						</a>
					</li>
                                        <li>
						<a class=" <?=$me->m["leftmenu"]["counters.electro"]?>" href="<?=$me->siteurl?>/index.php/counters:water">
							<span class="glyphicon glyphicon-share-alt"></span> Свет
						</a>
					</li>
				</ul>
			</li>			
                        <li class=" <?=$me->m["leftmenu"]["tarif"]?>"><a href="<?=$me->siteurl?>/index.php/tarif"><span class="glyphicon glyphicon-th"></span> Тарифы на услуги</a></li>
			<li class="parent  <?=$me->m["leftmenu"]["docs"]?>">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span> Документы<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse <?=$me->m["leftmenu"]["docs.act"]?>" id="sub-item-2">
					<li>
						<a class=" <?=$me->m["leftmenu"]["docs.controllers"]?>" href="<?=$me->siteurl?>/index.php/docs:controllers">
							<span class="glyphicon glyphicon-share-alt"></span> Контроль показаний
						</a>
					</li>
					<li>
						<a class=" <?=$me->m["leftmenu"]["docs.rechecks"]?>" href="<?=$me->siteurl?>/index.php/docs:rechecks">
							<span class="glyphicon glyphicon-share-alt"></span> Проверки счетчиков
						</a>
					</li>

				</ul>
			</li>			
                        <li class="parent  <?=$me->m["leftmenu"]["charts"]?>">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span> Потребления<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse <?=$me->m["leftmenu"]["charts.act"]?>" id="sub-item-3">
					<li>
						<a class=" <?=$me->m["leftmenu"]["charts.gas"]?>" href="<?=$me->siteurl?>/index.php/charts:gas">
							<span class="glyphicon glyphicon-share-alt"></span> Газ
						</a>
					</li>
					<li>
						<a class=" <?=$me->m["leftmenu"]["charts.water"]?>" href="<?=$me->siteurl?>/index.php/charts:water">
							<span class="glyphicon glyphicon-share-alt"></span> Вода
						</a>
					</li>
					<li>
						<a class=" <?=$me->m["leftmenu"]["charts.water"]?>" href="<?=$me->siteurl?>/index.php/charts:electro">
							<span class="glyphicon glyphicon-share-alt"></span> Свет
						</a>
					</li>
				</ul>
			</li>			
			<li class=" <?=$me->m["leftmenu"]["about"]?>"><a href="index.php/about"><span class="glyphicon glyphicon-list-alt"></span> Інструкція користувача</a></li>


			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
-->
 	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class=" <?=$Me->htmlClasses["leftmenu"]["main"]?>"><a href="/"><span class="glyphicon glyphicon-dashboard"></span> Головна</a></li>
			<li class=" <?=$Me->htmlClasses["leftmenu"]["all"]?>"><a href="/index.php/all"><span class="glyphicon glyphicon-th"></span> Усі книги</a></li>
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
						<a class=" <?=$Me->htmlClasses["leftmenu"]["advsearch"]?>" href="/index.php/advsearch">
							<span class="glyphicon glyphicon-share-alt"></span> Розширений пошук
						</a>
					</li>

				</ul>
			</li>			<li class=" <?=$Me->htmlClasses["leftmenu"]["aa"]?>"><a href="charts.html"><span class="glyphicon glyphicon-stats"></span></a></li>
			<li class=" <?=$Me->htmlClasses["leftmenu"]["about"]?>"><a href="index.php/about"><span class="glyphicon glyphicon-list-alt"></span> Інструкція користувача</a></li>


			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
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
