<?php
include_once("../../../config/dbconnection.php");
include_once("../../global/global.php");

$res = new stdClass();

$year = $_POST["year"];
$month = $_POST["month"];
$unitCode = $_POST["unitCode"];

try {
    $qGetData = "SELECT net_rent FROM rentdata_monthly 
    WHERE unit_code = '$unitCode' AND year = '$year' AND month = '$month'
    ";
    $qGetData = $conn->query($qGetData);
    if ($qGetData->num_rows > 0) {
        $rows = array();
        while ($r = mysqli_fetch_assoc($qGetData)) {
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