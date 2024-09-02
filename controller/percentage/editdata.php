<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$prCode = $_POST["prCode"];
$unitCode = $_POST["unitCode"];
$year = $_POST["year"];
$month = $_POST["month"];
$percentageVal = $_POST["percentageVal"];

try {
    $qCheckExist = "SELECT pr_code FROM percentage_revenue 
    WHERE unit_code = '$unitCode'
    AND year = '$year'
    AND month = '$month'
    AND pr_code <> '$prCode'    
    ";
    $qCheckExist = $conn->query($qCheckExist);
    if ($qCheckExist->num_rows > 0) {
        throw new Exception("Data already exist.");
    }

    $qUpdateData = "UPDATE percentage_revenue 
    SET unit_code = '$unitCode',
    year = '$year',
    month = '$month',
    value = '$percentageVal'
    WHERE pr_code = '$prCode'";
    $qUpdateData = $conn->query($qUpdateData);
    if (!$qUpdateData) throw new Exception("Failed update data");
    $res->status = 200;
    $res->msg = "Success update data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
