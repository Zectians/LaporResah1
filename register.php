<!DOCTYPE html>
<html lang="en">

<!-- HEADER -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign up</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- toastr is a Javascript library for Gnome / Growl type non-blocking notifications. jQuery is required. -->
    <!-- Link to Toastr.css -->
    <link rel="stylesheet" href="node_modules/toastr/build/toastr.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">Sign up</h3>
                    </div>

                    <div class="panel-body">
                        <form role="form" action="" method="POST" id="register_form">
                            <fieldset>
                                <div id="firstname_div" class="form-group">
                                    <input class="form-control" placeholder="Nama Depan" id="firstname" name="firstname" type="text" autocomplete="off" autofocus>
                                </div>
                                <div id="lastname_div" class="form-group">
                                    <input class="form-control" placeholder="Nama Belakang" id="lastname" name="lastname" type="text" autocomplete="off">
                                </div>
                                <div id="username_div" class="form-group">
                                    <input class="form-control" placeholder="Username" id="username" name="username" type="text" autocomplete="off">
                                </div>
                                <div id="email_div" class="form-group">
                                    <input class="form-control" placeholder="Email" id="email" name="email" type="email" autocomplete="off">
                                </div>
                                <div id="password_div" class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" autocomplete="off">
                                </div>
                                <div id="confirm_password_div" class="form-group">
                                    <input class="form-control" placeholder="Masukkan Kembali Password" id="confirm_password" name="confirm_password" type="password" autocomplete="off">
                                </div>
                                <div id="user_branch_div" class="form-group">
                                <select class="form-control" id="user_branch">
                                    <option>Male</option>
                                    <option>Female</option>
                                    </select>
                                </div>
                                <div id="user_dob_div" class="form-group">
                                    <input class="form-control" placeholder="Tanggal Lahir" id="user_dob" name="user_dob" type="date" autocomplete="off">
                                </div>
                                
                                <!-- &emsp = 4spaces, &ensp = 2spaces, &nbsp = 1spaces. -->
                                <div class="form-group">
                                    <p> 
                                        &emsp;Already A member?&ensp;
                                        <a href="login.php" name="login" class="btn btn-primary"><span class="fa fa-sign-in"></span> Login</a>
                                        <button name="register" id="register" class="btn btn-success"><span class="fa fa-user-plus"></span> Sign Up</button>
                                    </p>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FOOTER -->
    <!-- jQuery -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>

    <!-- jQuery Validation -->
    <script type="text/javascript" src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="node_modules/jquery-validation/dist/additional-methods.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- toastr is a Javascript library for Gnome / Growl type non-blocking notifications. jQuery is required. -->
    <!-- Link to toastr.js -->
    <script type="text/javascript" src="node_modules/toastr/build/toastr.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="assets/dist/js/sb-admin-2.js"></script>
    
    <!-- My Script -->
    <script type="text/javascript" src="assets/js/scripts.js"></script>

</body>
</html>
