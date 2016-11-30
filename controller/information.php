<?php
require('../dbcon.php');
require('../model/build-sql.php');
require('../model/execute_sql.php');
require('service.php');
include('../beauti_dump.php');

//$_POST['user_id'] = 1;
$service = "";
if(isset($_POST['submit'])){
 if ($_POST['submit'] == "Add"){
//	 beauti_dump($_POST);die();

	 add_information($conn);
  $conn->close();
 }
}else {
 echo "not mach";
}
/**
 * @param $conn
 */
function add_information($conn) {
 if(isset($_POST['service'])){
  $GLOBALS['service'] = $_POST['service'];
 }
// if($_POST['other_service']){
//  array_push($GLOBALS['service'], $_POST['other_service']);
// }
 unset($_POST['service'], $_POST['date'], $_POST['submit'], $_POST['budget']);

 $information_sql = build_sql_insert("information", $_POST);
//	beauti_dump($information_sql);
 execute_sql($information_sql, $conn);

 $last_info_id = $conn->insert_id;
 add_service($conn, $GLOBALS['service'], $last_info_id);
// header( "Location: http://localhost/dealing_customer_report/views/list_information.php");
}
