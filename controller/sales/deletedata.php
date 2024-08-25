<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$salesType = $_POST["salesType"];

try {
    $qCheckHasUsed = "SELECT overage_code FROM overage WHERE sales_type = '$salesType'";
    $qCheckHasUsed = $conn->query($qCheckHasUsed);
    if ($qCheckHasUsed->num_rows > 0) {
        throw new Exception("Sales already been used in overage");
    }
    $qDeleteSales = "DELETE FROM sales WHERE sales_type = '$salesType'";
    $qDeleteSales = $conn->query($qDeleteSales);

    if (!$qDeleteSales) throw new Exception("Failed delete data");

    $res->status = 200;
    $res->msg = "Success delete data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
