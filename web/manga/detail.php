<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form Detail</title>

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

  <?php include '../php_utils/db_utils.php';

   $db = new DbUtils();
        $conn = $db -> getConnection();
        $stmt = $conn->prepare("SELECT manga, author, manga_genres.genre AS genre, released_date, frequency, anime, vote_anime, released_date_anime
                                FROM manga
                                INNER JOIN manga_genres ON manga.genre_id = manga_genres.id
                                WHERE manga.id='".$_GET['id']."'");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $manga = $stmt->fetch();  //fetch restituisce un record compresi di tutti i campi
  ?>
</head>

<body>
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
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">Details</h1>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-body text-center">
                <h1><?php echo $manga ['manga'] ?>
                    <small>by <?php echo $manga ['author'] ?></small>
                </h1>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-2">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <p><strong>Genre: </strong><?php echo $manga ['genre'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <p><strong>Released Date: </strong><?php echo $manga ['released_date'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <p><strong>Frequency: </strong><?php echo $manga ['frequency'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <p><strong>Anime: </strong><?php echo $manga ['anime'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-1">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <p><strong>Vote: </strong><?php echo $manga ['vote_anime'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <p><strong>Released Date Anime: </strong><?php echo $manga ['released_date_anime'] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

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
