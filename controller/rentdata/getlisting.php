<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

try {
    $qGetData = "SELECT unit_code, lease_code, unit_no, lease_startdate, lease_enddate, storey_level 
    FROM rentdata
    ORDER BY created_at DESC
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
