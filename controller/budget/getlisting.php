<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

try {
    $qGetData = "SELECT DISTINCT a.lease_code, b.lease_no, a.year
    FROM budget a
    LEFT JOIN leasedata b ON a.lease_code = b.lease_code
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
