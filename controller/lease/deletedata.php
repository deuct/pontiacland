<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$leaseCode = $_POST["leaseCode"];

try {
    $qCheckHasUsed = "SELECT a.lease_code 
        FROM overage a
        LEFT JOIN rentdata b ON a.lease_code = b.lease_code 
        LEFT JOIN percentage_revenue c ON a.lease_code = c.lease_code
        LEFT JOIN budget_and_act d ON a.lease_code = d.lease_code
        WHERE a.lease_code = '$leaseCode'
    ";
    // print_r($qCheckHasUsed);
    $qCheckHasUsed = $conn->query($qCheckHasUsed);
    if ($qCheckHasUsed->num_rows > 0) {
        throw new Exception("Lease No already been used in overage");
    }
    $qDeleteLease = "DELETE FROM leasedata WHERE lease_code = '$leaseCode'";
    $qDeleteLease = $conn->query($qDeleteLease);

    if (!$qDeleteLease) throw new Exception("Failed delete data");

    $res->status = 200;
    $res->msg = "Success delete data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
