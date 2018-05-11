<?php
include '/game/php/db_conn_alessandro.php';

$show = detailPageField(htmlspecialchars($_GET["id"]));
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $show['name'] ?></h1>

        <gameDetailBackground id="background" class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="container-fluid">
            <div class="row">

              <gameDetailBoarderbox class="col-lg-3">
                <gameDetailBox class="col-sm-12">
                  <div class="col-sm-3">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/81P3rmr4CEL._SL1500_.jpg"
                       alt="questo è una immagine con source assoluto"
                       style="width:400px;height:600px";
                       />
                  </div>
                </gameDetailBox>
              </gameDetailBoarderbox>

              <gameDetailBoarderbox class="col-lg-5">
                <gameDetailBox class="col-sm-6">
                  <div class="col-sm-12">

                    <!-- Incude db_conn_alessandro.php from /php and setting of the detailPageField return as
                    $show variable -->


                    <p> Name: <?php echo $show['name']; ?><br></p>
                    <p> Developer: <?php echo $show['developer']; ?><br></p>
                    <p> Publisher: <?php echo $show['publisher']; ?><br></p>
                    <p> Genre: <?php echo $show['genre']; ?><br></p>

                  </div>
                </gameDetailBox>
              </gameDetailBoarderbox>

            </div>
          </div>
        </gameDetailBackground>

        <br /><br />
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
