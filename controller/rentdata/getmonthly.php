<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

$unitCode = $_GET["unit_code"];

try {
    $qGetData = "SELECT year, month, net_rent, service_charge
    FROM rentdata_monthly
    WHERE unit_code = '$unitCode'
    ";
    $qGetData = $conn->query($qGetData);

    if ($qGetData->num_rows > 0) {
        $rows = array();
        while ($r = mysqli_fetch_assoc($qGetData)) {
            $rows[] = $r;
        }

        $res->status = 200;
        $res->msg = "Success get data monthly";
        $res->data = $rows;
    } else {
        throw new Exception("Failed get data");
    }
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
