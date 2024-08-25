<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$overageCode = $_POST["overageCode"];
$salesType = $_POST["salesType"];
$leaseNo = $_POST["leaseNo"];
$unit = $_POST["unit"];
$month = $_POST["month"];
$chargeCode = $_POST["chargeCode"];
$partialYear = $_POST["partialYear"];
$salesAmount = $_POST["salesAmount"];
$breakpointSales = $_POST["breakpointSales"];
$breakpointPercent = $_POST["breakpointPercent"];
$grossOverage = $_POST["grossOverage"];
$offset = $_POST["offset"];
$offsetApplied = $_POST["offsetApplied"];
$netOverage = $_POST["netOverage"];
$priorAdhoc = $_POST["priorAdhoc"];
$chargeSubtotal = $_POST["chargeSubtotal"];
$taxAmount = $_POST["taxAmount"];
$chargeTotal = $_POST["chargeTotal"];
$billedAmount = $_POST["billedAmount"];
$dueAmount = $_POST["dueAmount"];
$year = $_POST["year"];


try {
    $qUpdateData = "UPDATE overage 
    SET sales_type = '$salesType',
    lease_code = '$leaseNo',
    unit = '$unit',
    month = '$month',
    charge_code = '$chargeCode',
    partial_year = '$partialYear',
    sales_amount = '$salesAmount',
    breakpoint_salesamt = '$breakpointSales',
    breakpoint_percent = '$breakpointPercent',
    gross_overage = '$grossOverage',
    offset = '$offset',
    offset_applied = '$offsetApplied',
    net_overage = '$netOverage',
    prior_adhoc = '$priorAdhoc',
    charge_subtotal = '$chargeSubtotal',
    tax_amount = '$taxAmount',
    charge_total = '$chargeTotal',
    billed_amount = '$billedAmount',
    due_amount = '$dueAmount' 
    WHERE overage_code = '$overageCode'";
    $qUpdateData = $conn->query($qUpdateData);
    if (!$qUpdateData) throw new Exception("Failed update data");
    $res->status = 200;
    $res->msg = "Success update data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
