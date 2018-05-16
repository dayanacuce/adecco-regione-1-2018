<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Countries</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                list <a class="btn btn-default" href="?page=countries/insert.php">Insert</a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>alpha2Code</th>
                                <th>Name</th>
                                <th>Capital</th>
                                <th>commands</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          include 'php_utils/db_utils.php';

                          $db_utils = new DbUtils();
                          $conn = $db_utils->getConnection();
                          $stmt = $conn->prepare("SELECT alpha2code, name, capital FROM countries");
                          $stmt->execute();

                          $commands = '<td><a href="/?page=countries/detail.php&alpha2code=:alpha2code">dettaglio</a><br/>';
                          $commands .= '<a href="/?page=countries/update.php&alpha2code=:alpha2code">modifica</a><br/>';
                          $commands .= '<a href="/countries/delete.php?alpha2code=:alpha2code">cancella</a></td>';

                          // set the resulting array to associative
                          $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                          foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll()), '', $commands, 'alpha2code') as $k=>$v) {
                              echo $v;
                          }
                          ?>
                        </tbody>
                    </table>
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
