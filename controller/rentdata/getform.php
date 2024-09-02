<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

$unitCode = $_GET["unit_code"];

try {
    $qGetData = "SELECT a.unit_code, a.lease_code, b.lease_no,  
    a.unit_no, a.lease_startdate, a.lease_enddate, a.lettable_area, 
    a.leased_area, a.storey_level
    FROM rentdata a
    LEFT JOIN leasedata b ON a.lease_code = b.lease_code 
    WHERE a.unit_code = '$unitCode'
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
