<?php
if (isset($view)) require_once $view; else print "View error";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$Me->title?></title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script src="/js/jquery.dataTables.js"></script>
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
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>ХПТК ОНПУ </span>Електронна бібліотека</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
		
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
		
<?=$Me->content?>
        <div>
        <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>

            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>

            </tr>
        </tfoot>
        </table></div>
        <script>
      $(document).ready(function() {
    $('#example').dataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "/ajax/tabler.php"
    } );
} );  
        </script>
        


</body>

</html>
