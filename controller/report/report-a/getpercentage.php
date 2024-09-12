<?php
include_once("../../../config/dbconnection.php");
include_once("../../global/global.php");

$res = new stdClass();

$year = $_POST["year"];
$month = $_POST["month"];
$unitCode = $_POST["unitCode"];

try {
    $qGetPercentage = "
        SELECT value
        FROM percentage_revenue
        WHERE unit_code = '$unitCode' AND year = '$year' AND month='$month';
    ";
    $qGetPercentage = $conn->query($qGetPercentage);
    if ($qGetPercentage->num_rows > 0) {
        $rows = array();
        while ($r = mysqli_fetch_assoc($qGetPercentage)) {
            $rows[] = $r;
        }

        $res->status = 200;
        $res->msg = "Success get data list";
        $res->data = $rows;
    } else {
        throw new Exception("Failed get data");
    }
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);