<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$unitCode = $_POST["unitCode"];

try {
    $qDeleteData = "DELETE FROM rentdata WHERE unit_code = '$unitCode'";
    $qDeleteData = $conn->query($qDeleteData);
    if (!$qDeleteData) throw new Exception("Failed delete data");

    $qDeleteData = "DELETE FROM rentdata_yearly WHERE unit_code = '$unitCode'";
    $qDeleteData = $conn->query($qDeleteData);
    if (!$qDeleteData) throw new Exception("Failed delete data");

    $qDeleteData = "DELETE FROM rentdata_monthly WHERE unit_code = '$unitCode'";
    $qDeleteData = $conn->query($qDeleteData);
    if (!$qDeleteData) throw new Exception("Failed delete data");

    $res->status = 200;
    $res->msg = "Success delete data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
