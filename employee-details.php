<?php 
include("db.php");
$nam = $_GET['employee_name'];

$sql = "SELECT * FROM `employees` WHERE Employee_Name='$nam'";
$result = $conn->query($sql);

$emp_arr = array();
if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

   $emp_arr[] = $row;

    $emp_json = json_encode($row);

    print_r($emp_json);

} else {
  echo "0 results";
}


?>