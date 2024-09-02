<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$leaseNo = $_POST["leaseNo"];
$year = $_POST["year"];
$dateValue = $_POST["dateValue"];

try {
    $qCheckExist = "SELECT budget_code FROM budget WHERE lease_code = '$leaseNo' AND year = '$year'";
    $qCheckExist = $conn->query($qCheckExist);

    if ($qCheckExist->num_rows > 0) {
        throw new Exception("Data already exist");
    }

    for ($i = 0; $i < count($dateValue); $i++) {
        $month = $i + 1;
        $qInsertData = "INSERT INTO budget (
            lease_code,
            month,
            year,
            budget_value,
            created_at,
            created_by,
            modified_at,
            modified_by
        ) VALUES (
            '$leaseNo',
            $month,
            $year,
            $dateValue[$i],
            NOW(),
            'farhan',
            NOW(),
            'farhan'
        )";
        $qInsertData = $conn->query($qInsertData);
        if (!$qInsertData) throw new Exception("Failed insert data");
    }

    $res->status = 200;
    $res->msg = "Success insert data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
