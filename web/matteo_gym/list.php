<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Gyms list</h1>

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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

<?php
include 'php_utils/db_utils.php';

$db_utils = new DbUtils();
$conn = $db_utils->getConnection();
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM Gyms");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }

echo "</table>";
?>

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
