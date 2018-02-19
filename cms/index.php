<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CMS | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img src="img/logo.png" width="300px" height="300px"></h1>

            </div>
            <h4>Welkom bij de cms van hotel "Fevie Ster"</h4><br>
            <form class="m-t" role="form" id="loginform" action="php/cms_login.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" data-msg-required="Vul uw gebruikersnaam in!" name="username" placeholder="Gebruikersnaam" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" data-msg-required="Vul uw wachtwoord in!" name="password" placeholder="Wachtwoord" required="">
                </div>
                <button type="submit" name="login" class="btn btn-primary block full-width m-b">Login</button>

                <!-- <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
            <!-- <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p> -->
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validation/jquery.validation.min.js"></script>
    <script type="text/javascript">
        $('#loginform').validate();
    </script>

</body>

</html>
