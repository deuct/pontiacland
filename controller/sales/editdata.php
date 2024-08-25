<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$salesName = $_POST["salesName"];
$salesType = $_POST["salesType"];


try {
    $qUpdateSales = "UPDATE sales SET sales_name = '$salesName' WHERE sales_type = '$salesType'";
    $qUpdateSales = $conn->query($qUpdateSales);
    if (!$qUpdateSales) throw new Exception("Failed update data");
    $res->status = 200;
    $res->msg = "Success update data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
