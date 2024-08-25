<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$salesName = $_POST["salesName"];

$qCheckExist = "SELECT sales_name FROM sales WHERE sales_name = '$salesName'";
$qCheckExist = $conn->query($qCheckExist);

try {
    if ($qCheckExist->num_rows > 0) {
        throw new Exception("Data already exists");
    } else {
        $generatedId = generateID("sales", $conn);
        $qInsertSales = "INSERT INTO sales VALUES ('$generatedId', '$salesName',NOW(),'farhan',NOW(),'farhan')";
        $qInsertSales = $conn->query($qInsertSales);
        if (!$qInsertSales) throw new Exception("Failed insert data");

        $res->status = 200;
        $res->msg = "Success insert data";
    }
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
