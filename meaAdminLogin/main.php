<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MEA Admin Tool</title>
		
		<!-- Bootstrap Core CSS -->
	    <link href="bootstrap/bootstrap.css" rel="stylesheet">
	
	    <!-- MetisMenu CSS -->
	    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	
	    <!-- Custom CSS -->
	    <link href="bootstrap/custom/sb-admin-2.css" rel="stylesheet">
	
	    <!-- Custom Fonts -->
	    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
	</head>
	<body>
		<div id="wrapper">

	        <!-- Navigation -->
	        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="index.html">MEA Administrator Tool</a>
	            </div>
	
	            <div class="navbar-default sidebar" role="navigation">
	                <div class="sidebar-nav navbar-collapse">
	                    <ul class="nav" id="side-menu">
	                        <li class="sidebar-search">
	                            <div class="input-group custom-search-form">
	                                <input type="text" class="form-control" placeholder="Search...">
	                                <span class="input-group-btn">
	                                    <button class="btn btn-default" type="button">
	                                        <i class="fa fa-search"></i>
	                                    </button>
	                                </span>
	                            </div>
	                            <!-- /input-group -->
	                        </li>
	                        <li>
	                            <a href="index.html"><i class="glyphicon glyphicon-menu-hamburger"></i> Main Menu</a>
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="flot.html">Flot Charts</a>
	                                </li>
	                                <li>
	                                    <a href="morris.html">Morris.js Charts</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                        <li>
	                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
	                        </li>
	                        <li>
	                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="panels-wells.html">Panels and Wells</a>
	                                </li>
	                                <li>
	                                    <a href="buttons.html">Buttons</a>
	                                </li>
	                                <li>
	                                    <a href="notifications.html">Notifications</a>
	                                </li>
	                                <li>
	                                    <a href="typography.html">Typography</a>
	                                </li>
	                                <li>
	                                    <a href="icons.html"> Icons</a>
	                                </li>
	                                <li>
	                                    <a href="grid.html">Grid</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="#">Second Level Item</a>
	                                </li>
	                                <li>
	                                    <a href="#">Second Level Item</a>
	                                </li>
	                                <li>
	                                    <a href="#">Third Level <span class="fa arrow"></span></a>
	                                    <ul class="nav nav-third-level">
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                    </ul>
	                                    <!-- /.nav-third-level -->
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                        <li class="active">
	                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a class="active" href="blank.html">Blank Page</a>
	                                </li>
	                                <li>
	                                    <a href="login.html">Login Page</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                    </ul>
	                </div>
	                <!-- /.sidebar-collapse -->
	            </div>
	            <!-- /.navbar-static-side -->
	        </nav>
	
	        <!-- Page Content -->
	        <div id="page-wrapper">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-12">
	                        <h1 class="page-header">Administrator ESAS App</h1>
	                        <h3>Good 
		                        <script>
		                        	var time = new Date();
		                        	if (time.getHours() > 6 && time.getHours() < 18) {
		                        		document.write("day!");
		                        	} else {
		                        		document.write("evening!");
		                        	}
		                        </script>
	                        </h3>
	                        <h3>Please navigate using the sidebar menu on the left.</h3>
	                    </div>
	                    <!-- /.col-lg-12 -->
	                </div>
	                <!-- /.row -->
	            </div>
	            <!-- /.container-fluid -->
	        </div>
	        <!-- /#page-wrapper -->
	
	    </div>
	    <!-- /#wrapper -->
	
	    <!-- jQuery -->
	    <script src="bootstrap/jquery.min.js"></script>
	
	    <!-- Bootstrap Core JavaScript -->
	    <script src="bootstrap/bootstrap.min.js"></script>
	
	    <!-- Metis Menu Plugin JavaScript -->
	    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
	
	    <!-- Custom Theme JavaScript -->
	    <script src="bootstrap/custom/sb-admin-2.js"></script>
	</body>
</html>