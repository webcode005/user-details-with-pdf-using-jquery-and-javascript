<?php 
include("db.php");
$emp_id = $_GET['employee_id'];

// Employee Details

$sql = "SELECT * FROM `employee_details` WHERE Employee_Id='$emp_id'";
$result = $conn->query($sql);

$emp_arr = array();
if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    $emp_arr['emp_details'] = $row;

    //$emp_json = json_encode($emp_arr);

    //print_r($emp_json);

} else {
  echo "0 results";
}

$sql = "SELECT * FROM `transfer_profile` WHERE Employee_Id='$emp_id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    $emp_arr['transfer'] = $row;

    //$emp_json = json_encode($emp_arr);

    //print_r($emp_json);

} else {
  echo "0 results";
}

// for career growth

$sql_career = "SELECT * FROM `career_growth_and_succession_profile` WHERE Employee_Id='$emp_id'";
$result_career = $conn->query($sql_career);

$emp_career_arr = array();
if ($result_career->num_rows > 0) {

    $career_row = $result_career->fetch_assoc();

    $emp_arr['career'] = $career_row;

    //$emp_json = json_encode($emp_arr);

    //print_r($emp_json);

} else {
  echo "0 results";
}


// for learning growth

$sql_learning = "SELECT * FROM `Competency_And_Learning_Profile` WHERE Employee_Id='$emp_id'";
$result_learning = $conn->query($sql_learning);

$emp_learning_arr = array();
if ($result_learning->num_rows > 0) {

    $learning_row = $result_learning->fetch_assoc();

    $emp_arr['learning'] = $learning_row;

    $emp_json = json_encode($emp_arr);

    print_r($emp_json);

} else {
  echo "0 results";
}


?>