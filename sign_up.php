<?php
    include ("config_db.php");
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>NAT - Sign up</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/resume.min.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">NAT - Sign UP</span>
                <span class="d-none d-lg-block">
              <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile1.jpg" alt="">
            </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#signup">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid p-0">
            <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
                <div class="my-auto">
                    <div class="lead mb-5">
                        <h1 class="mb-5"> Sign up</h1>
                        <h2 class="mb-0"> Get Infomaion</h2>
                    </div>
                </div>
            </section>

            <hr class="m-0">

            <section class="resume-section p-3 p-lg-5 d-flex d-column" id="signup">
                <div class="my-auto">
                    <div class="lead mb-5">
                        <h2 class="mb-5"> Sign up</h2>
                        <h3 class="mb-0"> Get Infomaion</h3>

                        <form class="form-horizontal" method="post" action="sign_up.php">
                            <label for="id_label" class="col-sm-10 control-label"> ID </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="id_label" name="id" placeholder="ID" size="30">
                            </div>

                            <label for="pwd_label" class="col-sm-10 control-label"> PASSWORD </label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="pwd_label" name="pwd" placeholder="PASSWORD" size="30">
                            </div>

                            <label for="pwd2_label" class="col-sm-10 control-label"> CONFIRM PASSWORD </label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="pwd2_label" name="pwd2" placeholder="CONFIRM PASSWORD" size="30">
                            </div>

                            <label for="email_label" class="col-sm-10 control-label"> E-MAIL </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="email_label" name="email" placeholder="E-MAIL" size="30">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" id="join_submit" href="<?php echo "<script> loctioh.hef=check_sign_up.php" ?>"> Sign Up </button>
                        </form>

                    </div>
                </div>
            </section>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/resume.min.js"></script>
    </body>
</html>