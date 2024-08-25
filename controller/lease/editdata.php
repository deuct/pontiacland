<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$leaseNo = $_POST["leaseNo"];
$leaseCode = $_POST["leaseCode"];


try {
    $qUpdateLease = "UPDATE leasedata SET lease_no = '$leaseNo' WHERE lease_code = '$leaseCode'";
    $qUpdateLease = $conn->query($qUpdateLease);
    if (!$qUpdateLease) throw new Exception("Failed update data");
    $res->status = 200;
    $res->msg = "Success update data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
