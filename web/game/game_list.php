<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Games</h1>

        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        list
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Developer</th>
                                        <th>Publisher</th>
                                        <th>Genre</th>
                                        <th>Multyplayer</th>
                                        <th>Singleplayer</th>
                                        <th>Launch Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  <?php

                                  include 'game/php/db_conn_alessandro.php';
                                  listTableRow();

                                  ?>

                                  <a href="game/form_alessandro.php" class="btn btn-default">Go to Google</a>

                                  </div>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <!-- CHIUSURA TABELLA STRIPED ROW -->
        </div>
        <br /><br />
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
