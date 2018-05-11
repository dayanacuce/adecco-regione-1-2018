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

  <?php include '../php_utils/db_utils.php'; ?>

  <?php $db = new DbUtils();
        $conn = $db -> getConnection();
        $stmt = $conn->prepare("SELECT manga.id, manga, author, manga_genres.genre, released_date, frequency, anime, vote_anime
                                FROM manga
                                INNER JOIN manga_genres ON manga.genre_id = manga_genres.id
                                WHERE id = ' ".$_GET['id']."'");
        $stmt->execute();

        $commands = '<td><a href="detail.php?id=:id">detail</a></td>';

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);}
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
                <h1>One Piece
                    <small>by Eiichiro Oda</small>
                </h1>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-2">
            <div class="panel panel-default">
              <div class="panel-body">
                <p><strong>Genre: </strong>Adventure</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="panel panel-default">
              <div class="panel-body">
                <p><strong>Released Date: </strong>1997-07-19</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="panel panel-default">
              <div class="panel-body">
                <p><strong>Frequency: </strong>Weekly</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="panel panel-default">
              <div class="panel-body">
                <p><strong>Anime: </strong>Yes</p>
              </div>
            </div>
          </div>
          <div class="col-lg-1">
            <div class="panel panel-default">
              <div class="panel-body">
                <p><strong>Vote: </strong>9</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <p><strong>Released Date Anime: </strong>1999-10-20</p>
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
