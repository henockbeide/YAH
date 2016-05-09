<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
    function validateInputs(){
		    var error1=error2=error3=error4=false;
		    if($("#description").val().length == 0 && error1==false) {
		        $("div.form-group#newDescription").addClass(" has-error");
		        error1=true;
		    }
		    else{
		        $("div.form-group#newDescription").removeClass(" has-error");
		        $("div.form-group#newDescription").addClass(" has-success");
		        error1=false;
		    }
		    if($("#partNo").val().length == 0 && error2==false) {
		        $("div.form-group#newPartNo").addClass(" has-error");
		        error2=true;
		    }
		    else{
		        $("div.form-group#newPartNo").removeClass(" has-error");
		        $("div.form-group#newPartNo").addClass(" has-success");
		        error2=false;
		    }
		    if($("#unit").val().length == 0 && error3==false) {
		        $("div.form-group#newUnit").addClass(" has-error");
		        error3=true;
		    }
		    else{
		        $("div.form-group#newUnit").removeClass(" has-error");
		        $("div.form-group#newUnit").addClass(" has-success");
		        error3=false;
		    }
		    if($("#price").val().length == 0 && error4==false) {
		        $("div.form-group#newPrice").addClass(" has-error");
		        error4=true;
		    }
		    else{
		        $("div.form-group#newPrice").removeClass(" has-error");
		        $("div.form-group#newPrice").addClass(" has-success");
		        error4=false;
		    }

		    if(error1==false && error2==false && error3==false && error4==false) {
		        //$("#NewContract").submit();
		        var unit = document.forms["newForm"]["unit"].value;
		        var price = document.forms["newForm"]["price"].value;
		        alert("Success!!!");
		        if(isNaN(unit) || isNaN(price)){
		            
		            $("#myAlert").empty();
		            $("#myAlert").append"<div class="+ '"alert alert-error alert-dismissable"'+">
		                            <button type="+'"button"'+" class="+'"close"'+" data-dismiss="+'"alert"'+" aria-hidden="+'"true"'+">&times;</button>
		                            <i class="+'"fa fa-info-circle"'+"></i>  <strong>wrong input</strong> Must be numbers
		                        </div>");
		            return false;            
		        }
		        return true;
		    }
		    else{
		        if(isNaN(unit) || isNaN(price)){            
		            $("#myAlert").empty();
		            $("#myAlert").append("<div class="+ '"alert alert-error alert-dismissable"'+">
		                            <button type="+'"button"'+" class="+'"close"'+" data-dismiss="+'"alert"'+" aria-hidden="+'"true"'+">&times;</button>
		                            <i class="+'"fa fa-info-circle"'+"></i>  <strong>wrong input</strong> Must be numbers
		                        </div>");
		            return false;            
		        }
		        return true;
		    }
		}
    </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Create New Contract</a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-bar-chart-o"></i> View Contracts</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-table"></i> Reports</a>
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            YAH <small>List of orders entry</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.html">YAH</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> New Orders
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div id="myAlert" class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>New Contract created!</strong> please enter the orders
                        </div>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <form id="NewContract" name="newForm" role="form" action="insertOrder.php" onsubmit="return validateInputs()" method="POST">
                    	
                        <div class="col-lg-3 form-group" id="newDescription" > 
                            <input class="form-control" id="description" name="descriptionNew" placeholder="Desciption / Bezeichnung">
                        </div>

                        <div class="col-lg-2 form-group" id="newPartNo">
                            <input class="form-control" id="partNo" name="partNo" placeholder="Part / Teile No">
                        </div>

                        <div class="col-lg-1 form-group" id="newUnit">
                            <input class="form-control" id="unit" name="unit" placeholder="Unit / M"></input>
                        </div>
                        <div class="col-lg-2 form-group input-group" id="newPrice">
                            <span class="input-group-addon"><i class="fa fa-eur"></i></span>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Price / 1"></input>
                        </div>
                        <div class="col-lg-2 form-group">
                            <button type="submit" name="order" class="btn btn-sm btn-success">ADD</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                        </div>
                    </form>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    <script src="js/validate.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
