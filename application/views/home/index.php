<!doctype html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	
	<title>WhiteSugar - A terrific CMS experience</title>
	
	<meta name="description" content="">
	<meta name="author" content="revaxarts.com">
	
	
	<!-- Google Font and style definitions -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- include the skins (change to dark if you like) -->
	<link rel="stylesheet" href="css/light/theme.css" id="themestyle">
	<!-- <link rel="stylesheet" href="css/dark/theme.css" id="themestyle"> -->
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css">
	<![endif]-->
	
	<!-- Apple iOS and Android stuff -->
	<meta name="apple-mobile-web-app-capable" content="no">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
	
	<!-- Apple iOS and Android stuff - don't remove! -->
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1">
	
	<!-- jquery, backbone, and underscore-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
  <script src="js/underscore.js"></script>
  <script src="js/backbone.js"></script>

	<!-- Loading JS Files this way is not recommended! Merge them but keep their order -->
	
	<!-- some basic functions -->
	<script src="js/functions.js"></script>
		
	<!-- all Third Party Plugins and Whitelabel Plugins -->
	<script src="js/plugins.js"></script>
	<script src="js/editor.js"></script>
	<script src="js/calendar.js"></script>
	<script src="js/flot.js"></script>
	<script src="js/elfinder.js"></script>
	<script src="js/datatables.js"></script>
	<script src="js/wl_Alert.js"></script>
	<script src="js/wl_Autocomplete.js"></script>
	<script src="js/wl_Breadcrumb.js"></script>
	<script src="js/wl_Calendar.js"></script>
	<script src="js/wl_Chart.js"></script>
	<script src="js/wl_Color.js"></script>
	<script src="js/wl_Date.js"></script>
	<script src="js/wl_Editor.js"></script>
	<script src="js/wl_File.js"></script>
	<script src="js/wl_Dialog.js"></script>
	<script src="js/wl_Fileexplorer.js"></script>
	<script src="js/wl_Form.js"></script>
	<script src="js/wl_Gallery.js"></script>
	<script src="js/wl_Multiselect.js"></script>
	<script src="js/wl_Number.js"></script>
	<script src="js/wl_Password.js"></script>
	<script src="js/wl_Slider.js"></script>
	<script src="js/wl_Store.js"></script>
	<script src="js/wl_Time.js"></script>
	<script src="js/wl_Valid.js"></script>
	<script src="js/wl_Widget.js"></script>
	
	<!-- configuration to overwrite settings -->
	<script src="js/config.js"></script>
		
	<!-- the script which handles all the access to plugins etc... -->
	<script src="js/script.js"></script>

	<!-- clickify.js -->
	<script src="https://raw.github.com/gist/3014727/clickify.js"></script>
	
	 <!-- Backbone core file -->
	<script src="src/application.js"></script>

	<!-- Backbone module files -->
  <script src="src/modules/modules.js"></script>
	
</head>
<body>
				<div id="pageoptions">
			<ul>
				<li><a href="login.html">Logout</a></li>
				<li><a href="" id="wl_config" class="no-click">CMS Control Panel</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
			<div>
						<h3 style='float: right;' ><a href='modules' style='color: white; ' >Modules</a> - <a href='#' style='color: white;' >Navigation</a> </h3>
			</div>
		</div>

			<header>
		<div id="logo">
			<a href="http://whitesugar.dev">whitesugar</a>
		</div>
		<div id="header">
			<ul id="headernav">
				<li><ul>
					<li><a href="icons.html">Icons</a><span>300+</span></li>
					<li><a href="#">Submenu</a><span>4</span>
						<ul>
							<li><a href="#">Just</a></li>
							<li><a href="#">another</a></li>
							<li><a href="#">Dropdown</a></li>
							<li><a href="#">Menu</a></li>
						</ul>
					</li>
					<li><a href="login.html">Login</a></li>
					<li><a href="wizard.html">Wizard</a><span>Bonus</span></li>
					<li><a href="#">Errorpage</a><span>new</span>
						<ul>
							<li><a href="error-403.html">403</a></li>
							<li><a href="error-404.html">404</a></li>
							<li><a href="error-405.html">405</a></li>
							<li><a href="error-500.html">500</a></li>
							<li><a href="error-503.html">503</a></li>
						</ul>
					</li>
				</ul></li>
			</ul>
			<div id="searchbox">
				<form id="searchform" autocomplete="off">
					<input type="search" name="query" id="search" placeholder="Search">
				</form>
			</div>
			<ul id="searchboxresult">
			</ul>
		</div>
	</header>

				<nav>
			<ul id="nav">
				<li class="i_house"><a href="dashboard"><span>Dashboard</span></a></li>
				<li class="i_book"><a><span>Documentation</span></a>
					<ul>
						<li><a href="#"><span>Alert Boxes</span></a></li>
						<li><a href="#"><span>Breadcrumb</span></a></li>
						<li><a href="#"><span>Calendar</span></a></li>
						<li><a href="#"><span>Charts</span></a></li>
						<li><a href="#"><span>Dialog</span></a></li>
						<li><a href="#"><span>Editor</span></a></li>
						<li><a href="#"><span>File</span></a></li>
						<li><a href="#"><span>Fileexplorer</span></a></li>
						<li><a href="#"><span>Form</span></a></li>
						<li><a href="#"><span>Gallery</span></a></li>
						<li><a href="#"><span>Inputfields</span></a></li>
						<li><a href="#"><span>Slider</span></a></li>
						<li><a href="#"><span>Store</span></a></li>
						<li><a href="#"><span>Widget</span></a></li>
					</ul>
				</li>
				<li class="i_create_write"><a href="#"><span>Form</span></a></li>
				<li class="i_graph"><a href="#"><span>Charts</span></a></li>
				<li class="i_images"><a href="#"><span>Gallery</span></a></li>
				<li class="i_blocks_images"><a href="#"><span>Widgets</span></a></li>
				<li class="i_breadcrumb"><a href="#"><span>Breadcrumb</span></a></li>
				<li class="i_file_cabinet"><a href="#"><span>Fileexplorer</span></a></li>
				<li class="i_calendar_day"><a href="#"><span>Calendar</span></a></li>
				<li class="i_speech_bubbles_2"><a href="#"><span>Dialogs &amp; Buttons</span></a></li>
				<li class="i_table"><a href="#"><span>Table</span></a></li>
				<li class="i_typo"><a href="#"><span>Typo</span></a></li>
				<li class="i_grid"><a href="#"><span>Grid</span></a></li>
			</ul>
		</nav>
		
		<section id="content">


		
		<script type="text/template" id='modulesTemplate' >
			
			<div class="g12 nodrop">
				<h1>Modules</h1>
				<p>This is a list of available modules</p>

				<table class="datatable">
						<thead>
							<tr>
								<th>Title</th>
								<th>Keyword</th>
								<th>Active</th>
							</tr>
						</thead>
						<tbody id='modulesTable' >
						</tbody>
					</table>
			</div>	

		</script>

		<script type="text/template" id='moduleTemplate' >

				<td class='moduleTitle'><a href='module/<%= id %>'> <%= title %></a></td>
				<td class='moduleKeyword' ><%= keyword %></td>
				<td class='moduleActive' ><%= active %></td>

		</script>
		
			
		</section>
		<footer>Copyright by Esembitech.com 2013</footer>
</body>
</html>