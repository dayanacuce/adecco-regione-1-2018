            <div class="row">
              <?php
              //Incude db_conn_alessandro.php from /php and setting of the detailPageField return as $show variable

              include 'publishers/php/fetch_list.php';

              $show = detailPageField(htmlspecialchars($_GET["id"]));
              ?>
                <div class="col-lg-12">
                    <h1 class="page-header">Publisher Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="alert alert-success">
                                <strong>Name: <?php echo $show["name"] ?></strong>
                            </div>
                            <div class="alert alert-info">
                                <strong>Office: <?php echo $show["office"] ?></strong>
                            </div>
                            <div class="alert alert-warning">
                                <strong>Programmers: <?php echo $show["programmers"] ?></strong>
                            </div>
                            <div class="alert alert-danger">
                                <strong>Foundation date: <?php echo $show["foundation_date"] ?></strong>
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
