<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$leaseCode = $_POST["leaseCode"];
$year = $_POST["year"];
$budgetType = $_POST["budgetType"];

try {
    $qDeleteData = "DELETE FROM budget WHERE lease_code = '$leaseCode' AND year = '$year' AND budget_type='$budgetType'";
    $qDeleteData = $conn->query($qDeleteData);
    if (!$qDeleteData) throw new Exception("Failed delete data");

    $res->status = 200;
    $res->msg = "Success delete data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
