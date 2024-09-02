<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

$prCode = $_GET["pr_code"];

try {
    $qGetData = "SELECT a.pr_code, a.unit_code, c.lease_no, b.lease_startdate, b.lease_enddate,
    a.year, a.month, a.value
    FROM percentage_revenue a
    LEFT JOIN rentdata b ON a.unit_code = b.unit_code
    LEFT JOIN leasedata c ON b.lease_code = c.lease_code
    WHERE a.pr_code = '$prCode'
    ";
    $qGetData = $conn->query($qGetData);
    $resGetData = $qGetData->fetch_assoc();

    if ($qGetData->num_rows > 0) {
        $res->status = 200;
        $res->msg = "Success get data form";
        $res->data = $resGetData;
    } else {
        throw new Exception("Failed get data");
    }
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
