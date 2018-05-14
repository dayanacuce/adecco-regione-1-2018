<!DOCTYPE html>
<html lang="en">

      <head>
       <title>Form football match</title>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta name="description" content="">
              <meta name="author" content="">
           <style> .error {color: #FF0000;} </style>
           <!-- Bootstrap Core CSS -->
              <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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

                <div id="page-wrapper">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-lg-12">
                             <h1 class="page-header">Contact form</h1>
                <div>
            <form role="form"
                action="http://adecco.local/adecco/piermarcoform.php"
                method="post">

            <?php
                // define variables and set to empty values
                $team1Err = $team2Err = $championshipErr = $resultErr = $dateErr = "";
                $team1 = $team2 = $championship = $result= $date ="";

                function test_input($data) {
                       $data = trim($data);
                         $data = stripslashes($data);
                           $data = htmlspecialchars($data);
                return $data;
              }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (empty($_POST["team1"])) {
                    $team1Err = "Name is required";
                  } else {
                    $team1 = test_input($_POST["team1"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$team1)) {
                      $team1Err = "Only letters and white space allowed";
                    }
                  }

                  if (empty($_POST["team2"])) {
                    $team2Err = "Name is required";
                  } else {
                    $team2 = test_input($_POST["team2"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$team2)) {
                      $team2Err = "Only letters and white space allowed";
                    }
                  }

                  if (empty($_POST["championship"])) {
                    $championshipErr = "Name is required";
                  } else {
                    $championship = test_input($_POST["championship"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$championship)) {
                      $championshipErr = "Only letters and white space allowed";
                    }
                  }

                  if (empty($_POST["result"])) {
                    $resultErr = "Numbers is required";
                  } else {
                    $result = test_input($_POST["result"]);
                    // check if name only contains numbers
                    if (!preg_match("/^[0-9]{1,2}\-[0-9]{1,2}$/",$result)) {
                      $resultErr = "Only numbers and special character - allowed";
                    }
                  }
                  if (empty($_POST["date"])) {
                    $dateErr = "Date is required";
                  } else {
                    $date = test_input($_POST["date"]);
                    if (!preg_match("/^[0-9]{1,2}\\[0-9]{1,2}\\[0-9]{1,2,3,4}$/",$date)) {
                      $dateErr = "Only numbers and special character / allowed";
                }
              }
              }
            ?>

            <div class="form-group <?php if($team1Err != '') echo "has-error"?>">
                <label>team1</label>
                  <input class="form-control" type="text" name="team1" id="team1" value = "<?php echo $team1; ?>" />
            </div>
                  <span class ="help block"> * <?php echo $team1Err; ?> </span>
                  <div class="form-group <?php if($team2Err != '') echo "has-error"?>">
                    <label>team2</label>
                      <input class="form-control" type="text" name="team2" id="team2" value = "<?php echo $team2; ?>" />
                    </div>
                    <span class ="help block"> * <?php echo $team2Err; ?>
                    </span>
                        <div class="form-group <?php if($championshipErr != '') echo "has-error"?>">
                      <label>championship</label>
                        <input class="form-control" type="text" name="championship" id="championship" value = "<?php echo $championship; ?>" />
                          </div>
                                      <span class ="help block"> * <?php echo $championshipErr; ?> </span>
                              <div class="form-group <?php if($resultErr != '') echo "has-error"?>">
                                            <label>result</label>
                                              <input class="form-control" type="text" name="result" id="result" value = "<?php echo $result; ?>" />
                              </div>
                                      <span class ="help block"> * <?php echo $resultErr; ?> </span>
                                  <div class="form-group <?php if($dateErr != '') echo "has-error"?>">
                                      <label>date</label>
                                  <input class="form-control" type="text" name="date" id="date" value = "<?php echo $date; ?>" />
                              </div>
                                  <span class ="help block"> * <?php echo $dateErr; ?> </span>
                                      <div class="form-group">
                                              <label class="control-label" for="message">match comment</label>
                                              <textarea  class="form-control" id="message" name="message" rows="5"></textarea>
                                      </div>
                                            <div class="form-group">
                                            <div class="checkbox">
                                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close  </button>
                                            </div>
                                          </div>

                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <button type="submit" class="btn btn-default">Submit  </button>
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
              <?php
                  echo "<h2>Your Input:</h2>";
                  echo $team1;
                  echo "<br>";
                  echo $team2;
                  echo "<br>";
                  echo $championship;
                  echo "<br>";
                  echo $result;
                  echo "<br>";
                  echo $date;
                  echo "<br>";
                  echo "<br>";
                  echo "<br>";
                  ?>
                  <!-- /#wrapper -->

                  <!-- jQuery -->

                  <script src="../vendor/jquery/jquery.min.js"></script>


                  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>


                  <script src="../vendor/metisMenu/metisMenu.min.js"></script>


                  <script src="../dist/js/sb-admin-2.js">

                  $(document).ready(function(){
                  $("#date").datepicker();
                });
              </script>

                  <!-- Bootstrap Date-Picker Plugin -->
                  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
                      <!--script>


                      $("form").on('submit', function(e){
                        e.preventDefault();

                        resetError("team1");
                        resetError("team2");
                        resetError("championship");
                        resetError("result");
                        resetError("date");


                        var submittable = true;
                        submittable = checkRequiredField($("#team1")) && submittable;
                        submittable = checkRequiredField($("#team2")) && submittable;
                        submittable = checkRequiredField($("#championship")) && submittable;
                        submittable = checkRequiredField($("#result")) && submittable;
                        submittable = checkRequiredField($("#date")) && submittable;

                          if(submittable){
                            $("form")[0].submit();
                            }
                            });

                            function  resetError(id){
                              $("#"+id).parent().removeClass('has-error');
                            }

                              function checkRequiredField(input_field){
                                var input_value = input_field.val();
                                    if(input_value == ''){
                              input_field.parent().addClass('has-error');
                              return false;
                            }
                            return true;
                            }
                          </script-->
      </body>

</html>
