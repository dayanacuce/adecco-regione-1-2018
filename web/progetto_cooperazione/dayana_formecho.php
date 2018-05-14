<!DOCTYPE html>
<!--controllo della data+inserimento data+rosso se non scritto+ nuovamente binco se scrivo-->
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

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="../css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .error {color: #FF0000;}
    </style>

</head>

<body>

  <?php
  // define variables and set to empty values
  $country_nameErr = $project_typeErr = $city_nameErr = $project_managerErr = $comunity_nameErr = $families_numberErr =
  $reachabilityErr = $floodErr = $flood_gradeErr = $wilderness_gradeErr = $help_kitErr = $infrastructureErr = "";

  $country_name = $project_type = $city_name = $project_manager = $comunity_name = $families_number =
  $reachability = $flood = $flood_grade = $wilderness_grade = $help_kit = $infrastructure ="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["country_name"])) {
      $country_nameErr = "Country is required";
    } else {
      $country_name = test_input($_POST["country_name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$country_name )) {
        $country_nameErr  = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["project_type"])) {
      $project_typeErr = "Project type is required";
    } else {
      $project_type = test_input($_POST["project_type"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/", $project_type )) {
        $project_typeErr  = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["city_name"])) {
      $city_nameErr = "City name is required";
    } else {
      $city_name = test_input($_POST["city_name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/", $city_name )) {
        $city_nameErr  = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["project_manager"])) {
      $project_managerErr = "Project manager's name is required";
    } else {
      $project_manager = test_input($_POST["project_manager"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/", $project_manager )) {
        $project_managerErr  = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["comunity_name"])) {
      $comunity_nameErr = "Comunity name is required";
    } else {
      $comunity_name = test_input($_POST["comunity_name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/", $comunity_name)) {
        $comunity_nameErr  = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["families_number"])) {
      $families_numberErr = "Families number is required";
    } else {
      $families_number = test_input($_POST["families_number"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[0-9]*$/", $families_number)) {
      $families_numberErr  = "Only numberes allowed";
      }
    }

    if (empty($_POST["reachability"])) {
      $reachabilityErr = "Reachability is required";
    } else {
      $reachability = test_input($_POST["reachability"]);
    }

    if (empty($_POST["flood"])) {
      $floodErr = "Flood status is required";
    } else {
      $flood = test_input($_POST["flood"]);
    }

    if (empty($_POST["flood_grade"])) {
      $flood_gradeErr = "Flood grade is required";
    } else {
      $flood_grade = test_input($_POST["flood_grade"]);
    }

    if (empty($_POST["wilderness_grade"])) {
      $wilderness_gradeErr = "Wilderness grade is required";
    } else {
      $wilderness_grade = test_input($_POST["wilderness_grade"]);
    }

    if (empty($_POST["help_kit"])) {
      $help_kitErr = "Help kit status is required";
    } else {
      $help_kit = test_input($_POST["help_kit"]);
    }

    if (empty($_POST["infrastructure"])) {
      $infrastructureErr = "Infrastructure is required";
    } else {
      $infrastructure = test_input($_POST["infrastructure"]);
    }

  }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
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
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Contact form</h1>

                        <form role="form"
                              action="http://adecco.local/adecco/dayana_formecho.php"
                              method="post">

                              <div class="form-group">
                                <label class="control-label" for="country_name">Paese d'intervento.</label>
                                    <input class="form-control" type="text"
                                           name="country_name" id="country_name"
                                          value="<?php echo $country_name;?>">
                              </div>
                                <span class="error">* <?php echo $country_nameErr;?></span>


                              <div class="form-group">
                                <label class="control-label" for="project_type">Nome e tipologia del Pogetto.</label>
                                    <input class="form-control" type="text"
                                           name="project_type" id="project_type"
                                           value="<?php echo $project_type;?>">
                              </div>
                              <span class="error">* <?php echo $project_typeErr;?></span>



                              <div class="form-group">
                                <label class="control-label" for="city_name">Città d'intervento.</label>
                                    <input class="form-control" type="text"
                                           name="city_name" id="city_name"
                                           value="<?php echo $city_name;?>">
                              </div>
                              <span class="error">* <?php echo $city_nameErr;?></span>


                              <div class="form-group">
                                <label class="control-label" for="project_manager">Capo Pogetto.</label>
                                    <input class="form-control" type="text"
                                           name="project_manager" id="project_manager"
                                           value="<?php echo $project_manager;?>">
                              </div>
                              <span class="error">* <?php echo $project_managerErr;?></span>


                              <div class="form-group">
                                <label class="control-label" for="comunity_name">Nome della comunità.</label>
                                <input class="form-control" type="text"
                                       name="comunity_name" id="comunity_name"
                                       value="<?php echo $comunity_name;?>">
                              </div>
                              <span class="error">* <?php echo $comunity_nameErr;?></span>


                          <div class="form-group">
                            <label class="control-label" for="families_number">Numero di famiglie da cui è composta la comunità.</label>
                            <input class="form-control" type="text" name="families_number" id="families_number"
                            value="<?php echo $families_number;?>">
                          </div>
                          <span class="error">* <?php echo $families_numberErr;?></span>



                          <div class="form-group">
                              <label>Dov'è stanziata la comunità indigena?</label><br />
                              <label class="radio-inline">
                                  <input type="radio" name="wilderness_grade" value="firstgrade"
                                  <?php if (isset($wilderness_grade) && $wilderness_grade=="firstgrade") echo "checked";?> >Selva Primaria
                              </label>
                              <label class="radio-inline">
                                  <input type="radio" name="wilderness_grade" value="secondgrade"
                                  <?php if (isset($wilderness_grade) && $wilderness_grade=="secondgrade") echo "checked";?>  >Selva Secondaria
                              </label>
                              <label class="radio-inline">
                                  <input type="radio" name="wilderness_grade" value="thirdgrade"
                                  <?php if (isset($wilderness_grade) && $wilderness_grade=="thirdgrade") echo "checked";?>  >Selva Terziaria
                              </label>
                          </div>
                          <span class="error">* <?php echo $wilderness_gradeErr;?></span>



                          <div class="form-group">
                              <label>Con quale mezzo è raggiungibile la comunità? </label>
                              <select class="form-control" name="reachability" id="reachability">
                                  <option <?php if (isset($reachability) && $reachability=="") echo "selected";?> value=""></option>
                                  <option <?php if (isset($reachability) && $reachability=="auto") echo "selected";?> value="auto"> Via terra con auto 4x4</option>
                                  <option <?php if (isset($reachability) && $reachability=="peke") echo "selected";?> value="peke"> Via fiume con peke peke</option>
                                  <option <?php if (isset($reachability) && $reachability=="barca") echo "selected";?> value="barca">Via fiume con barca a motore</optio>
                                  <option <?php if (isset($reachability) && $reachability=="barca") echo "selected";?> value="motore_peke">Via fiume con barca a motore e peke peke</option>
                              </select>
                          </div>
                          <span class="error">* <?php echo $reachabilityErr;?></span>



                          <div class="form-group">
                              <label>La comunità è stata coinvolta nella alluvione del 2018?</label>
                              <select class="form-control" name="flood" id="flood">
                                  <option <?php if (isset($flood) && $flood=="") echo "selected";?> value=""></option>
                                  <option <?php if (isset($flood) && $flood=="yes") echo "selected";?> value="yes">Si</option>
                                  <option <?php if (isset($flood) && $flood=="no") echo "selected";?> value="no">No</option>
                              </select>
                          </div>
                          <span class="error">* <?php echo $floodErr;?></span>


                          <div class="form-group">
                              <label> Gravità dei danni subiti dalla comunità a seguito dell'alluvione </label>
                              <select class="form-control" name="flood_grade" id="flood_grade">
                                  <option <?php if (isset($flood_grade) && $flood_grade=="") echo "selected";?> value=""></option>
                                  <option <?php if (isset($flood_grade) && $flood_grade=="nessuno") echo "selected";?> value="nessuno">Nessun Danno</option>
                                  <option <?php if (isset($flood_grade) && $flood_grade=="lieve") echo "selected";?> value="lieve"> Danni lievi</option>
                                  <option <?php if (isset($flood_grade) && $flood_grade=="qualche") echo "selected";?> value="qualche">Qualche danno</option>
                                  <option <?php if (isset($flood_grade) && $flood_grade=="gravi") echo "selected";?> value="gravi">Danni gravi</option>
                                  <option <?php if (isset($flood_grade) && $flood_grade=="molto") echo "selected";?> value="molto">Danni molto gravi</option>
                              </select>
                          </div>
                          <span class="error">* <?php echo $flood_gradeErr;?></span>




                          <div class="form-group">
                                <label> Tipologie di modulo di sostegno che verranno consegnate </label>
                                    <div class="checkbox" name="help_kit" id="help_kit">
                                      <label>
                                        <input type="checkbox" <?php if (isset($help_kit) && $help_kit=="roof") echo "checked";?> value="roof"> Modulo Tetti
                                     </label>
                                    </div>
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox" <?php if (isset($help_kit) && $help_kit=="home") echo "checked";?> value="home"> Modulo Casa
                                     </label>
                                    </div>
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox" <?php if (isset($help_kit) && $help_kit=="agricultural") echo "checked";?> value="agricultural"> Modulo Agricolo
                                     </label>
                                    </div>
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox" <?php if (isset($help_kit) && $help_kit=="breeding") echo "checked";?> value="breeding"> Modulo Allevamento
                                     </label>
                                    </div>

                            </div>

                            <div class="form-group">
                                    <label> Infrastrutture presenti nella comunità </label>
                                     <div class="checkbox"  name="infrastructure" id="infrastructure">
                                       <label>
                                        <input type="checkbox" <?php if (isset($infrastructure) && $infrastructure=="electricity") echo "checked";?> value="electricity"> Energia Elettrica
                                       </label>
                                      </div>
                                      <div  class="checkbox">
                                        <label>
                                         <input type="checkbox" <?php if (isset($infrastructure) && $infrastructure=="roads") echo "checked";?> value="roads"> Strade non asfaltate
                                        </label>
                                       </div>
                                       <div  class="checkbox">
                                         <label>
                                          <input type="checkbox" <?php if (isset($infrastructure) && $infrastructure=="pavedroad") echo "checked";?> value="pavedroad"> Strade asfaltate
                                         </label>
                                        </div>
                                       <div  class="checkbox">
                                         <label>
                                          <input type="checkbox" <?php if (isset($infrastructure) && $infrastructure=="commercial") echo "checked";?> value="commercial"> Attività commerciali
                                         </label>
                                        </div>
                                        <div  class="checkbox">
                                          <label>
                                           <input type="checkbox" <?php if (isset($infrastructure) && $infrastructure=="hospital") echo "checked";?> value="hospital"> Presidio medico
                                          </label>
                                         </div>
                            </div>

                            <div class="form-group">
                              <label>Data di consegna del Kit </label>
                              <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text">
                            </div>


                            <div class="form-group">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" id="authorization">Dati validati dal capoprogetto e autorizzati all'invio
                                  </label>

                                  <!-- Button trigger modal -->
                                  <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                      Autorizzato l'invio
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

      <!-- Custom Theme JavaScript -->
      <script src="../dist/js/sb-admin-2.js"></script>

      <script src="../js/bootstrap-datepicker.min.js"></script>

     <script>

      $(document).ready(function(){
        $("#date").datepicker();
      });

      $("#authorization").on("change", authorizationChanged);

      function authorizationChanged(event){
        toggleSubmit(this.checked);
      }

      function toggleSubmit(enable){
        var submit_btn = $("#submitBtn");
        if(enable){
          submit_btn.attr('disabled', null);
        }else{
          submit_btn.attr('disabled', 'disabled');
        }
      }

    </script>

    <!--  <script>

      $("form").on('submit', function(e){
        e.preventDefault();

        var fields = [
          'country_name',
          'project_type',
          'city_name',
          'project_manager',
          'comunity_name',
          'families_number',

        ];

        var submittable = true;
        for(var i=0; i<fields.length; i++){
          var input_id = fields[i];

          resetError(input_id);

          var input_field = $("#"+input_id);
          var input_value = input_field.val();

          var input_error = !checkRequiredField(input_value);

          if (input_id == "country_name"){
            input_error = !checkOnlyLetter(input_value);
          }
          if (input_id == "project_type"){
            input_error = !checkOnlyLetter(input_value);
          }
          if (input_id == "city_name"){
            input_error = !checkOnlyLetter(input_value);
          }
          if (input_id == "project_manager"){
            input_error = !checkOnlyLetter(input_value);
          }

          if(input_id == 'comunity_name'){
            input_error = !checkOnlyLetter(input_value);
          }

          if (input_id == "families_number"){
            input_error = !checkOnlyNumber(input_value);
          }

          if(input_error){
            submittable = false;
            input_field.parent().addClass('has-error');
          }
        }

          if(submittable){
          $("form")[0].submit();
        }
      });

      function resetError(id){
        $("#"+id).parent().removeClass('has-error');
      }

      function checkRequiredField(input_value){
        return input_value != '';
      }

      function checkOnlyLetter(str){
        var re =  /^[A-Za-zÀ-ÿ\s]+$/;
        return re.test(str);
      }

      function checkOnlyNumber(str){
        var re =  /^[0-9]+$/;
        return re.test(str);
      }
    </script>-->

    <!-- tabella

     <div class="row">

      <div class="col-lg-6">
      <div class="panel panel-default">
      <div class= "pannel-heading"> Table Prova
      </div>
      <div class="panel-body">

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>A</th>
              <th>B</th>
              <th>C</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1 </td>
              <td>2 </td>
              <td>3 </td>
            </tr>
            <tr>
              <td>1 </td>
              <td>2 </td>
              <td>3 </td>
            </tr>
            <tr>
              <td>1 </td>
              <td>2 </td>
              <td>3 </td>
            </tr>
          </tbody>
        </table>
        </div>

    </div>
  </div>
  </div>
  </div> -->

    <!-- Prima versione

       <script>

        $("#privacy").on("change", privacyChanged);

        function privacyChanged(event){
          toggleSubmit(this.checked);
        }

        function toggleSubmit(enable){
          var submit_btn = $("#submitBtn");
          if(enable){
            submit_btn.attr('disabled', null);
          }else{
            submit_btn.attr('disabled', 'disabled');
          }
        }

        $("form").on('submit', function(e){
          e.preventDefault();

          resetError("firstname");
          resetError("lastname");
          resetError("email");
          resetError("message");

          var submittable = true;
          submittable = checkRequiredField($("#firstname")) && submittable;
          submittable = checkRequiredField($("#lastname")) && submittable;
          submittable = checkRequiredField($("#email")) && submittable;
          submittable = checkRequiredField($("#message")) && submittable;

          if(submittable){
            $("form")[0].submit();
          }
        });

        function resetError(id){
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
      </script> -->
  </body>

  </html>

    <!--
    submittable = submittable && acheckRequiredField($("#firstname"));
    submittable = submittable && acheckRequiredField($("#lastname"));
    submittable = submittable && acheckRequiredField($("#email"));
    submittable = submittable && acheckRequiredField($("#message"));
    in questo caso si blocca e non fa tutti i controlli, è un lasy evaluator
    Con un booleano  || (or) && and se trova il primo errore è sempre falso

    submittable = checkRequiredField && submittable($("#firstname"));
    submittable = checkRequiredField && submittable($("#lastname"));
    submittable = checkRequiredField && submittable($("#email"));
    submittable = checkRequiredField && submittable($("#message"));
    COSì ivnece prima controlla i campi e poi fa in submittable
  -->


<!-- sul tag privacy, il nome dell'evento tra virgolette perchè è un stringa.
Quindi ".on" alri eventi tipo mouse moove, click con il tasto destro, scrollo
un evento controlla come si attiva/disattiva il change del il nome ovvero il click.
quando succede questo fai quello che c'è nella funzione This è riferito alla pricavy
e.preventiDefault (non fa fare quello che dovrebbe- tipo cliccando il submit non invia il file) -->


<!--La stessa fatta all'esterno e generica per utilizzare la funzione varie volte
$("#privacy").on("change", privacyChanged;
funtion privacyChanged ()

if(this.checked){
  $("#submitBtn").attr('disabled', null);
}else{
  $("#submitBtn").attr('disabled', 'disabled');
}
-->
