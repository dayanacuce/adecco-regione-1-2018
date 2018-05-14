<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Campionato</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 align= "center">Risultati partite</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Giornata</th>
                                <th>Team1</th>
                                <th>Team2</th>
                                <th>Championship</th>
                                <th>Result</th>
                                <th>Date</th>
                                <th>Dettagli Partita</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          include 'php_utils/db_utils.php';

                          $db_utils = new DbUtils();
                          $conn = $db_utils->getConnection();
                          $stmt = $conn->prepare("SELECT giornata, team1, team2, championship,result, date FROM campionato");
                          $stmt->execute();

                          $commands = '<td><a href="/?page=football/details_piermarco1.php&id=:id">dettaglio</a></td>';

                          // set the resulting array to associative
                          $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                          foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll()), '', $commands, 'id') as $k=>$v) {
                              echo $v;
                          }
                          ?>
                        </tbody>
                    </table>
                    <a href = 'football/insert.php' class = 'btn btn-default'> insert </a>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
