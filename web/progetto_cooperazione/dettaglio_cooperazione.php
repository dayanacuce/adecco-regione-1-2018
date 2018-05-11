<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form email</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <?php
   include '../php_utils/db_utils.php';
   $connect = new DbUtils ();
   $conn= $connect -> getConnection();

   $stmt = $conn->prepare("SELECT id, country_code, project_type, city_name, project_manager, comunity_name, number_of_families, class_transport FROM progetto_cooperazione");
   $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $progetto_cooperazione = $stmt->fetch();
    ?>


    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="../index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
                        <div class= "row">
                          <div class= "col-lg-12">
                            <h1 class="page-header">Lista</h1>
                          </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"> <?php echo $progetto_cooperazione['country_code']; ?> </div>
                                                    <div>Paese d'intervento</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><?php echo $progetto_cooperazione['project_type,']; ?> </div>
                                                    <div>Tipologia di progetto</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"> <?php echo $progetto_cooperazione['city_name,']; ?> </div>
                                                    <div>Città</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"> <?php echo $progetto_cooperazione['project_manager,']; ?> </div>
                                                    <div>Capo progetto</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>




                               <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-green">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"> <?php echo $progetto_cooperazione['comunity_name,']; ?> </div>
                                                    <div>Nome comunità</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                          </a>
                                    </div>
                                </div>



                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"> <?php echo $progetto_cooperazione['number_of_families,']; ?></div>
                                                <div>Numero famiglie</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                    </a>
                                </div>
                            </div>


                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"> <?php echo $progetto_cooperazione['class_transport,']; ?> </div>
                                            <div>Tipologia trasporto</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                </a>
                            </div>
                          </div>
                      </div>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script src="../js/contact_form.js"></script>
</body>

</html>
