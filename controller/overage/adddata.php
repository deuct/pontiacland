<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

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
    $qCheckExist = "SELECT overage_code FROM overage WHERE lease_code = '$leaseNo' AND month= '$month' AND year='$year'";
    $qCheckExist = $conn->query($qCheckExist);

    if ($qCheckExist->num_rows > 0) {
        throw new Exception("Data already exist");
    }

    $generatedId = generateID("overage", $conn);
    $qInsertData = "INSERT INTO overage (
        overage_code,
        unit,
        sales_type,
        lease_code,
        month,
        year,
        charge_code,
        partial_year,
        sales_amount,
        breakpoint_salesamt,
        breakpoint_percent,
        gross_overage,
        offset,
        offset_applied,
        net_overage,
        prior_adhoc,
        charge_subtotal,
        tax_amount,
        charge_total,
        billed_amount,
        due_amount,
        created_at,
        created_by,
        modified_at,
        modified_by
    ) VALUES (
        '$generatedId',
        '$unit',
        '$salesType',
        '$leaseNo',
        '$month',
        '$year',
        '$chargeCode',
        '$partialYear',
        '$salesAmount',
        '$breakpointSales',
        '$breakpointPercent',
        '$grossOverage',
        '$offset',
        '$offsetApplied',
        '$netOverage',
        '$priorAdhoc',
        '$chargeSubtotal',
        '$taxAmount',
        '$chargeTotal',
        '$billedAmount',
        '$dueAmount',
        NOW(),
        'farhan',
        NOW(),
        'farhan'
    )";
    $qInsertData = $conn->query($qInsertData);
    if (!$qInsertData) throw new Exception("Failed insert data");

    $res->status = 200;
    $res->msg = "Success insert data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
