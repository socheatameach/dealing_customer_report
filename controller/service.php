<?php
/**
 * @param $conn
 * @param $data
 * @param $info_id
 */
function add_service($conn, $data, $info_id) {
	$service_cols = array("service_name", "info_id");
	$service_sql = build_sql_insert("service", $data, $service_cols, $info_id);
	execute_sql($service_sql, $conn);
}


/**
 * @param $conn
 * @param $info_id
 */
// function delete_service($conn, $customer_id) {
// 	$where = "customer_id = $customer_id";
// 	$service_sql = build_sql_delete_by_id("service", $where);
// 	execute_sql($service_sql, $conn);
// }
