<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$leaseNo = $_POST["leaseNo"];

$qCheckExist = "SELECT lease_no FROM leasedata WHERE lease_no = '$leaseNo'";
$qCheckExist = $conn->query($qCheckExist);

try {
    if ($qCheckExist->num_rows > 0) {
        throw new Exception("Data already exists");
    } else {
        $generatedId = generateID("leasedata", $conn);
        $qInsertLease = "INSERT INTO leasedata VALUES ('$generatedId','$leaseNo',NOW(),'farhan',NOW(),'farhan')";
        $qInsertLease = $conn->query($qInsertLease);
        if (!$qInsertLease) throw new Exception("Failed insert data");

        $res->status = 200;
        $res->msg = "Success insert data";
    }
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
