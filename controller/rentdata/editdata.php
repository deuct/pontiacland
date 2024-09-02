<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$unitCode = $_POST["unitCode"];
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
    /* Update RentData */
    $qCheckExist = "SELECT unit_code 
    FROM rentdata 
    WHERE unit_code = '$unitCode'
    ";
    $qCheckExist = $conn->query($qCheckExist);

    $qUpdateData = "UPDATE rentdata 
        SET lease_code = '$leaseNo',
        unit_no = '$unit',
        lease_startdate = '$startdate',
        lease_enddate = '$enddate',
        lettable_area = '$lettableArea',
        leased_area = '$leasedArea',
        storey_level = '$storey',
        modified_at = NOW(),
        modified_by = 'farhan'
        WHERE unit_code = '$unitCode'
    ";
    $qUpdateData = $conn->query($qUpdateData);
    if (!$qUpdateData) throw new Exception("Failed insert data");

    /* /Update RentData */

    /* Update Rentdata Yearly */
    $qDelYearly = "DELETE FROM rentdata_yearly WHERE unit_code = '$unitCode'";
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
            '$unitCode',
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
    /* /Update Rentdata Yearly */

    /* Update Rentdata Monthly */
    $qDelMonthly = "DELETE FROM rentdata_monthly WHERE unit_code = '$unitCode'";
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
            '$unitCode',
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
    /* /Update Rentdata Monthly */

    $res->status = 200;
    $res->msg = "Success update data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
