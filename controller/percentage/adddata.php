<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$unitCode = $_POST["unitCode"];
$year = $_POST["year"];
$month = $_POST["month"];
$percentageVal = $_POST["percentageVal"];

try {
    /* Insert RentData */
    $qCheckExist = "SELECT pr_code 
    FROM percentage_revenue 
    WHERE unit_code = '$unitCode' 
        AND year = '$year' 
        AND month = '$month'
    ";
    $qCheckExist = $conn->query($qCheckExist);
    if ($qCheckExist->num_rows > 0) {
        throw new Exception("Data already exist");
    }

    $generatedId = generateID("percentage_revenue", $conn);
    $qInsertData = "INSERT INTO percentage_revenue (
        pr_code,
        unit_code,
        year,
        month,
        value,
        created_at,
        created_by,
        modified_at,
        modified_by
    ) VALUES (
        '$generatedId',
        '$unitCode',
        '$year',
        '$month',
        '$percentageVal',
        NOW(),
        'farhan',
        NOW(),
        'farhan'
    )
    ";
    $qInsertData = $conn->query($qInsertData);
    if (!$qInsertData) throw new Exception("Failed insert data");
    /* /Insert RentData */

    $res->status = 200;
    $res->msg = "Success insert data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
