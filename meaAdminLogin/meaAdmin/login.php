<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	
	    <title>MEA - Admin Tool</title>
	
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
	    <div class="container">
	       <div class="row">
	            <div class="col-md-5 col-md-offset-6">
	                <div class="login-panel panel panel-primary">
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Please Sign In to the Administrator ESAS App!</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form role="form">
	                            <fieldset>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="Username" name="username" 
	                                    type="text" autofocus required="required">
	                                </div>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="Password" name="password" 
	                                    type="password" value="" required="required">
	                                </div>
	                                <div class="checkbox">
	                                    <label>
	                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me?
	                                    </label>
	                                </div>
	                                <!-- Change this to a button or input when using this as a form -->
	                                <a href="index.html" class="btn btn-md btn-success btn-block">Login</a>
			                      	<button type="button" class="btn btn-md btn-warning btn-block" 
			                      	data-toggle="modal" data-target="#forgotModal">Forgot Password?</button>
			                      	
			                      </div>
	                            </fieldset>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <!-- Modal -->
				<div id="#forgotModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h5 class="modal-title">Forgot Password?</h5>
				      </div>
				      <div class="modal-body">
				        <p>Some text in the modal.</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
				<!-- End of Modal -->
	        </div>
	
	    <!-- jQuery -->
	    <script src="bootstrap/jquery.min.js"></script>
	
	    <!-- Bootstrap Core JavaScript -->
	    <script src="boostrap/bootstrap.min.js"></script>
	
	    <!-- Metis Menu Plugin JavaScript -->
	    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
	
	    <!-- Custom Theme JavaScript -->
	    <script src="bootstrap/custom/sb-admin-2.js"></script>
	
	</body>
</html>