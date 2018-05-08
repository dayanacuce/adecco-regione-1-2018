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
                        <h1 class="page-header">Contact form</h1>

                        <form role="form"
                              action="http://adecco.local/post_reader.php"
                              method="post">
                          <div class="form-group">
                            <label class="control-label" for="firstname">First name</label>
                            <input class="form-control" type="text"
                                   name="firstname" id="firstname" />
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="lastname">Last name</label>
                            <input class="form-control" type="text" name="lastname" id="lastname" />
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="date">Date</label>
                            <input class="form-control"
                                   type="text"
                                   name="date"
                                   id="date"
                                   data-date-format="dd-mm-yyyy"  />
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email" />
                          </div>
                          <div class="form-group">
                              <label>Sex</label>
                              <select name="sex" class="form-control">
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                  <option value="other">Other</option>
                              </select>
                          </div>
                          <!-- div class="form-group">
                              <label>Sex</label><br />

                              <label class="radio-inline">
                                  <input type="radio" name="sex" value="Male" checked>Male
                              </label>
                              <label class="radio-inline">
                                  <input type="radio" name="sex" value="Female">Female
                              </label>
                              <label class="radio-inline">
                                  <input type="radio" name="Sex" value="Other">Other
                              </label>
                          </div -->
                          <div class="form-group">
                              <label class="control-label" for="message">Message</label>
                              <textarea  class="form-control" id="message" name="message" rows="5"></textarea>
                          </div>

                          <div class="form-group">
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
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                          </div>
                          <div>
                            <button type="submit" id="submitBtn" class="btn btn-default" disabled>Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                          </div>
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          Kitchen Sink
                                      </div>
                                      <!-- /.panel-heading -->
                                      <div class="panel-body">
                                          <div class="table-responsive">
                                              <table class="table table-striped table-bordered table-hover">
                                                  <thead>
                                                      <tr>
                                                          <th>#</th>
                                                          <th>First Name</th>
                                                          <th>Last Name</th>
                                                          <th>Username</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td>1</td>
                                                          <td>Mark</td>
                                                          <td>Otto</td>
                                                          <td>@mdo</td>
                                                      </tr>
                                                      <tr>
                                                          <td>2</td>
                                                          <td>Jacob</td>
                                                          <td>Thornton</td>
                                                          <td>@fat</td>
                                                      </tr>
                                                      <tr>
                                                          <td>3</td>
                                                          <td>Larry</td>
                                                          <td>the Bird</td>
                                                          <td>@twitter</td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </div>
                                          <!-- /.table-responsive -->
                                      </div>
                                      <!-- /.panel-body -->
                                  </div>
                                  <!-- /.panel -->
                              </div>
                        </form>
                        <br /><br />
                    </div>
                    <!-- /.col-lg-12 -->
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
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script src="../js/contact_form.js"></script>
</body>

</html>
