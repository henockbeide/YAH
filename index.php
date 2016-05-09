<!DOCTYPE html>
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

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    function checkLogin(){
    	var e1=e2=false;
	    if($("#uName").val().length == 0 && e1==false) {
	        $("div.form-group#username").addClass(" has-error");
	        e1=true;
	    }
	    else{
	        $("div.form-group#name").removeClass(" has-error");
	        $("div.form-group#name").addClass(" has-success");
	        e1=false;
	    }
	    if($("#Inv").val().length == 0 && e2==false) {
	        $("div.form-group#pWord").addClass(" has-error");
	        e2=true;
	    }
	    else{
	        $("div.form-group#password").removeClass(" has-error");
	        $("div.form-group#password").addClass(" has-success");
	        e2=false;
	    }  
	    } 
	    if(e1==false && e2==false) {
	        //$("#NewContract").submit();
	        alert("Success!!!");
	        return true;
	    }
	    else{
	        return false;
	    }
    }
    </script>

</head>

<body>
<center>
<div class="row"><br><br><br></div>
<div class="row"><br><br><br><br><br><br></div>
<div class="col-lg-4"></div>
<div class="col-lg-3">
	<label>LOGIN</label>
	    <form id="login" role="form" action="autho.php" onsubmit="return checkLogin()"method="POST">
	        <div class="form-group" id="username"> 
	            <input class="form-control" id="uName" name="uName" placeholder="username">
	        </div>

	        <div class="form-group" id="password">
	            <input type="password" class="form-control" id="pWord" name="pWord" placeholder="password">
	        </div>
	        <div class="form-group">
	        <span>	            
                <button type="submit" name="create" class="btn btn-success">Login</button>  
                <button type="reset" class="btn btn-danger">Cancel</button>	
            </span>          
	        </div>
	    </form>
    </div>
    </center>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
