<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$leaseNo = $_POST["leaseNo"];
$unit = $_POST["unit"];
$storey = $_POST["storey"];
$startdate = $_POST["startdate"];
$enddate = $_POST["enddate"];
$lettableArea = $_POST["lettableArea"];
$leasedArea = $_POST["leasedArea"];
$arrNrscYearly = json_decode($_POST["arrNrscYearly"]);
$arrNrscMonthly = json_decode($_POST["arrNrscMonthly"]);

try {
    /* Insert RentData */
    $qCheckExist = "SELECT unit_code 
    FROM rentdata 
    WHERE lease_code = '$leaseNo' 
        AND lease_startdate = '$startdate' 
        AND lease_enddate = '$enddate'
        AND lettable_area = '$lettableArea'
        AND leased_area = '$leasedArea'
        AND storey_level = '$storey'
    ";
    $qCheckExist = $conn->query($qCheckExist);
    if ($qCheckExist->num_rows > 0) {
        throw new Exception("Data already exist");
    }

    $generatedId = generateID("rentdata", $conn);
    $qInsertData = "INSERT INTO rentdata (
        unit_code,
        lease_code,
        unit_no,
        lease_startdate,
        lease_enddate,
        lettable_area,
        leased_area,
        storey_level,
        created_at,
        created_by,
        modified_at,
        modified_by
    ) VALUES (
        '$generatedId',
        '$leaseNo',
        '$unit',
        '$startdate',
        '$enddate',
        '$lettableArea',
        '$leasedArea',
        '$storey',
        NOW(),
        'farhan',
        NOW(),
        'farhan'
    )
    ";
    $qInsertData = $conn->query($qInsertData);
    if (!$qInsertData) throw new Exception("Failed insert data");

    /* /Insert RentData */

    /* Insert Rentdata Yearly */
    $qDelYearly = "DELETE FROM rentdata_yearly WHERE unit_code = '$generatedId'";
    $qDelYearly = $conn->query($qDelYearly);

    for ($i = 0; $i < count($arrNrscYearly); $i++) {
        $data = $arrNrscYearly[$i];
        $year = $data->year;
        $netRent = $data->nr;
        $serviceCharge = $data->sc;
        $qInsertYearly = "INSERT INTO rentdata_yearly(
            unit_code,
            year,
            net_rent,
            service_charge,
            created_at,
            created_by,
            modified_at,
            modified_by
        )
        VALUES (
            '$generatedId',
            '$year',
            '$netRent',
            '$serviceCharge',
            NOW(),
            'farhan',
            NOW(),
            'farhan'
        )
        ";
        $qInsertYearly = $conn->query($qInsertYearly);
    }
    /* /Insert Rentdata Yearly */

    /* Insert Rentdata Monthly */
    $qDelMonthly = "DELETE FROM rentdata_monthly WHERE unit_code = '$generatedId'";
    $qDelMonthly = $conn->query($qDelMonthly);

    for ($i = 0; $i < count($arrNrscMonthly); $i++) {
        $data = $arrNrscMonthly[$i];
        $year = $data->year;
        $month = $data->month;
        $netRent = $data->nr;
        $serviceCharge = $data->sc;
        $qInsertMonthly = "INSERT INTO rentdata_monthly(
            unit_code,
            year,
            month,
            net_rent,
            service_charge,
            created_at,
            created_by,
            modified_at,
            modified_by
        )
        VALUES (
            '$generatedId',
            '$year',
            '$month',
            '$netRent',
            '$serviceCharge',
            NOW(),
            'farhan',
            NOW(),
            'farhan'
        )
        ";
        $qInsertMonthly = $conn->query($qInsertMonthly);
    }
    /* /Insert Rentdata Monthly */

    $res->status = 200;
    $res->msg = "Success insert data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
