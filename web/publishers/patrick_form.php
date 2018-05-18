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

      <!-- MetisMenu CSS -->
      <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
      <link href="../css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style>
         .error {color: #FF0000;}
       </style>
       <?php include('form_server.php') ?>
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
                            <a href="form_alessandro.php"><i class="fa fa-steam-square fa-fw"></i> Form Alessandro</a>
                            <a href="dayana_formecho.php"><i class="fa fa-female fa-fw"></i> Form Dayana</a>
                            <a href="form_marco.php"><i class="fa fa-windows fa-fw"></i> Form Marco</a>
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
                      <div class="col-lg-6">
                          <h1 class="page-header">Contact form</h1>
                      <form action="http://adecco.local/adecco/patrick_form.php" method="post">
                        <div class="form-group <?php if ($nameError != "") { echo "has-error ";} ?>">
                          <label class="control-label">Nome</label>
                          <input class="form-control" name="name" id="name" value="<?php
                            echo $name; ?>">
                            <p class="help-block">* <?php echo $nameError ; ?></p>
                        </div>
                        <div class="form-group <?php if ($officeError != "") { echo "has-error";} ?>">
                          <label class="control-label">Sede</label>
                          <input class="form-control" name="office" id="office" value="<?php
                            echo $office; ?>">
                            <p class="help-block">* <?php echo $officeError; ?></p>
                        </div>
                        <div class="form-group <?php if ($programmersError != "") { echo "has-error";} ?>">
                          <label class="control-label">#Programmatori</label>
                          <div class="radio">
                            <select name="programmers"class="form-control" id="programmers">
                              <option value="nessuno" <?php if (isset($programmers) && $programmers == "nessuno") echo "selected" ?>>Nessuno</option>
                              <option value="0-10" <?php if (isset($programmers) && $programmers == "0-10") echo "selected" ?>>0-10</option>
                              <option value="10-20" <?php if (isset($programmers) && $programmers == "10-20") echo "selected" ?>>10-20</option>
                              <option value="20-30" <?php if (isset($programmers) && $programmers == "20-30") echo "selected" ?>>20-30</option>
                              <option value="more than 30" <?php if (isset($programmers) && $programmers == "more than 30") echo "selected" ?>>More than 30</option>
                            </select>
                            <p class="help-block">* <?php echo $programmersError; ?></p>
                          </div>
                        </div>
                        <div class="form-group <?php if ($dateError != "") { echo "has-error";} ?>">
                          <label class="control-label">Foundation Date</label>
                          <input class="form-control" id="date" name="foundation_date" placeholder="DD/MM/YYY" type="text"
                                  data-date-end-date="0d"/>
                                  <p class="help-block">* <?php echo $dateError; ?></p>
                        </div>
                        <div class="form-group">
                          <label>Terms</label>
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" id="privacy">Accept privacy and conditions
                              </label>

                              <!-- Button trigger modal -->
                              <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                  view conditions
                              </a>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                      reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                      pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                      qui officia deserunt mollit anim id est laborum.
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                        </div>
                        <div class="form-group">
                          <button type="submit" id="submitBtn"class="btn btn-default" disabled>Submit Button</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                    </form>
                      <!-- /.col-lg-12 -->
                    </div>
                  </div>
                  <!-- /.row -->
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
      <script src="../vendor/metisMenu/metisMenu.min. js"></script>

      <!-- Custom Theme JavaScript -->
      <script src="../dist/js/sb-admin-2.js"></script>
      <script src="../js/bootstrap-datepicker.min.js"></script>
      <script src="../js/crud.js"></script>
  </body>
</html>
