<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$overageCode = $_POST["overageCode"];

try {
    $qDeleteData = "DELETE FROM overage WHERE overage_code = '$overageCode'";
    $qDeleteData = $conn->query($qDeleteData);
    if (!$qDeleteData) throw new Exception("Failed delete data");

    $res->status = 200;
    $res->msg = "Success delete data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
