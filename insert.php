nclude 'php_utils/db_utils.php';

$db_utils = new DbUtils();
$conn = $db_utils->getConnection();

// define variables and set to empty values
$country_nameErr = $project_typeErr = $city_nameErr = $project_managerErr = $comunity_nameErr = $families_numberErr =
$reachabilityErr = $floodErr = $flood_gradeErr = $wilderness_gradeErr = $help_kitErr = $infrastructureErr = "";

$country_name = $project_type = $city_name = $project_manager = $comunity_name = $families_number =
$reachability = $flood = $flood_grade = $wilderness_grade = $help_kit = $infrastructure ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO countries ( name, project_type, city_name, project_manager, comunity_name, families_number,reachability, flood, flood_grade, wilderness_grade,help_kit, infrastructure )
  VALUES (:name, :project_type, :city_name, :project_manager, :comunity_name, :families_number, :reachability, :flood, :flood_grade, :wilderness_grade, :help_kit, :infrastructure)");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':project_type', $project_type);
  $stmt->bindParam(':city_name', $city_name);
  $stmt->bindParam(':project_manager', $project_manager);
  $stmt->bindParam(':comunity_name', $comunity_name);
  $stmt->bindParam(':families_number', $families_number);
  $stmt->bindParam(':reachability', $reachability);
  $stmt->bindParam(':flood', $flood);
  $stmt->bindParam(':flood_grade', $flood_grade);
  $stmt->bindParam(':wilderness_grade', $wilderness_grade);
  $stmt->bindParam(':help_kit', $help_kit);
  $stmt->bindParam(':infrastructur', $infrastructur);

  include('form_controls.php');

  if(!$formError){
    $stmt->execute();
  }

}


include 'dayana_formecho.php';

 ?>
