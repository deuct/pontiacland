<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

try {
    $qGetLease = "SELECT lease_code, lease_no FROM leasedata";
    $qGetLease = $conn->query($qGetLease);

    if ($qGetLease->num_rows > 0) {
        $rows = array();
        while ($r = mysqli_fetch_assoc($qGetLease)) {
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
