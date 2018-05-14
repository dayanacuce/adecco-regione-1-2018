<?php
//Incude db_conn_alessandro.php from /php and setting of the detailPageField return as $show variable

include 'game/php/db_conn_alessandro.php';

$show = detailPageField(htmlspecialchars($_GET["id"]));
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $show['name']; ?></h1>

        <gameDetailBackground id="background" class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="container-fluid">
            <div class="row">

              <gameDetailBoarderbox class="col-lg-5 col-md-12 col-sm-12">
                <gameDetailBox class="col-sm-12">
                  <div class="col-sm-12">
                    <img src="<?php echo $show['image'];?>"
                       alt="Immagine del gioco"
                       style="max-width: 100%; height:auto;"
                       />
                  </div>
                </gameDetailBox>
              </gameDetailBoarderbox>

              <gameDetailBoarderbox class="col-lg-4 col-md-12 col-sm-12">
                <gameDetailBox class="col-sm-12">
                  <div class="col-sm-12">

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
