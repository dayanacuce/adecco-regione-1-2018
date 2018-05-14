<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Contact form</h1>
          <div width="40%"; min-width="660px"; float:left;>
              <form id="form" role="form"action="http://adecco.local/adecco/form_alessandro.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <?php
                  $nameErr = $devErr = $pubErr = $genErr = $dateErr= "";
                  $name = $developer = $publisher = $genre = $date="";

                  function test_input($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                  }

                  if ($_SERVER["REQUEST_METHOD"] == "POST") {

                  //Name is required
                    if (empty($_POST["name"])) {
                      $nameErr = "Name is required";
                    }
                    else {
                      $name = test_input($_POST["name"]);
                    }

                  //Developer is required
                    if (empty($_POST["developer"])) {
                      $devErr = "Developer is required";
                    }
                    else {
                      $developer = test_input($_POST["developer"]);
                    }

                  //Publisher is required
                    if (empty($_POST["publisher"])) {
                      $pubErr = "Publisher is required";
                    }
                    else {
                      $publisher = test_input($_POST["publisher"]);
                    }

                  //Genre is required
                    if (empty($_POST["genre"])) {
                      $genErr = "Genre is required";
                    }
                    else {
                      $genre = test_input($_POST["genre"]);
                    }

                  //Date is required
                    if (empty($_POST["date"])) {
                      $dateErr = "Date is required";
                    }
                    else {
                      $date = test_input($_POST["date"]);
                    }

                  }
                 ?>

                <div class="form-group <?php if($nameErr != ''){echo 'has-error';} ?>">
                  <label class="control-label" for="name">Nome*</label>
                  <input class="form-control " name="name" id="name" placeholder="Nome" value="<?php echo $name;?>">
                  <span class="help-block"> <?php echo $nameErr;?></span>
                </div>

                <div class="form-group <?php if($devErr != ''){echo 'has-error';} ?>">
                  <label class="control-label" for="developer">Sviluppatore*</label>
                  <input class="form-control" name="developer" id="developer" placeholder="Sviluppatore" value="<?php echo $developer;?>">
                  <span class="help-block"> <?php echo $devErr;?></span>
                </div>

                <div class="form-group <?php if($pubErr != ''){echo 'has-error';} ?>">
                  <label class="control-label"for="publisher">Publisher*</label>
                  <input class="form-control" name="publisher" id="publisher" placeholder="Publisher" value="<?php echo $publisher;?>">
                  <span class="help-block"> <?php echo $pubErr;?></span>
                </div>

                <div class="form-group <?php if($genErr != ''){echo 'has-error';} ?>">
                  <label class="control-label" for="genre">Genere*</label>
                  <input class="form-control" name="genre"  id="genre" placeholder="Genere" value="<?php echo $genre;?>">
                  <span class="help-block"> <?php echo $genErr;?></span>
                </div>

                <div class="form-group">
                  <label>Multiplayer: </label><br>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="multiplayer" value="si">Si
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="multiplayer" value="no" checked>No
                      </label>
                    </div>
                </div>

                <div class="form-group">
                  <label>Singleplayer: </label><br>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="singleplayer" value="si" checked>Si
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="singleplayer" value="no">No
                      </label>
                    </div>
                </div>

                <div class="input-group date <?php if($dateErr != ''){echo 'has-error';} ?>" data-provide="datepicker" data-date-format="dd/mm/yyyy" data-date-end-date="0d">
                  <input type="text" id="date" name="date" class="form-control" value="<?php echo $date;?>">
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <span class="help-block">* <?php echo $dateErr;?></span>

                <br>
                <br>

                <button type="submit" id="submitBtn" class="btn btn-default">Submit</button>
                <button type="reset" class="btn btn-danger" >Reset</button>
              </form>
          </div>
          <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>

<!-- Date Picker JavaScript -->
<script src="../js/bootstrap-datepicker.js"></script>
