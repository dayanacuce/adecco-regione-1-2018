<div class="row">
<div class="col-lg-12">
<h1 class="page-header">gym list</h1>

<div class="row">
<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Striped Rows
        </div>
        <!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Last Name</th>
            <th>sex</th>
            <th>stage</th>
            <th>ranking</th>
        </tr>
    </thead>
    <tbody>
      <?php
      include 'php_utils/db_utils.php';

      $db_utils = new DbUtils();
      $conn = $db_utils->getConnection();
          $stmt = $conn->prepare("SELECT id, firstname, lastname, sex, stage, ranking FROM Gyms");
          $stmt->execute();

          // set the resulting array to associative
          $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
          foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
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

<br /><br />
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
