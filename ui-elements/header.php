<!-- HEADER -->
<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start(); // Session not started so start the session
    }

    if(!isset($_SESSION['user_id'])) { // if a user is not logged in
        header("Location: http://localhost/laporResah-main/register.php"); // Added Absolute Path
    }
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lapor Resah</title>

    <!-- Bootstrap Core CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-awesome CSS -->
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- toastr is a Javascript library for Gnome / Growl type non-blocking notifications. jQuery is required. -->
    <!-- Link to Toastr.css -->
    <link rel="stylesheet" href="../node_modules/toastr/build/toastr.min.css">
    
    <!-- SweetAlert 2.0 CSS -->
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">

    <!-- Custom CSS -->
    <link href="../assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Cantora One Font -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cantora One'>

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/myStyles.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
