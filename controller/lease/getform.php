<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

$leaseCode = $_GET["leaseCode"];

try {
    $qGetLease = "SELECT lease_code, lease_no FROM leasedata WHERE lease_code = '$leaseCode'";
    $qGetLease = $conn->query($qGetLease);

    $resGetLease = $qGetLease->fetch_assoc();

    if ($qGetLease->num_rows > 0) {
        $res->status = 200;
        $res->msg = "Success get data form";
        $res->data = $resGetLease;
    } else {
        throw new Exception("Failed get data123s");
    }
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
