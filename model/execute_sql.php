<?php
/**
 * @param $sql
 * @param $conn
 */
function execute_sql($sql, $conn) {
	if ($conn->query($sql) === TRUE) {
		echo "Record successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
//	$conn->close();
}
