<?php include_once("../components/header.php") ?>
<?php include_once("../components/checklogin.php") ?>

<body>
    <?php include_once("../components/navbar.php") ?>

    <?php $arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"] ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card mb-2 mt-2 p-2 text-center">
                    <h3>Add Budget</h3>
                </div>
            </div>
        </div>
        <div class="card mb-2 p-2">
            <div class="row justify-content-center main-content">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <form>
                        <div class="mb-3">
                            <label for="lease-no" class="form-label">Lease No</label>
                            <select class="form-select" aria-label="lease-no" id="lease-no">
                                <option selected>Open this select menu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <select class="form-select" aria-label="year" id="year">
                                <?php for ($i = 2015; $i <= 2099; $i++) { ?>
                                    <option value=<?= $i ?>><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <span>Budget Per Month</span>
                        <hr />
                        <?php for ($i = 1; $i <= 12; $i++) { ?>
                            <div class="mb-3">
                                <label for="date-<?= $i ?>" class="form-label"><?= $arrMonth[($i - 1)] ?></label>
                                <input type="text" class="form-control" id="date-<?= $i ?>">
                            </div>
                        <?php } ?>
                        <div class="text-end">
                            <button type="button" onclick="window.location.href='./listing.php'" class="btn btn-secondary">Cancel</button>
                            <button type="button" onclick="submitform()" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var salesType = document.getElementById("sales-type");

        function submitform() {
            // if (salesName.value == "") {
            //     alert("please fill sales name");
            //     return;
            // }
            $.ajax({
                type: "POST", //type of method
                url: "../../controller/overage/adddata.php", //your page
                data: {
                    salesType: salesType.value,
                    leaseNo: leaseNo.value,
                    unit: unit.value,
                    month: month.value,
                    chargeCode: chargeCode.value,
                    partialYear: partialYear.value,
                    salesAmount: salesAmount.value,
                    breakpointSales: breakpointSales.value,
                    breakpointPercent: breakpointPercent.value,
                    grossOverage: grossOverage.value,
                    offset: offset.value,
                    offsetApplied: offsetApplied.value,
                    netOverage: netOverage.value,
                    priorAdhoc: priorAdhoc.value,
                    chargeSubtotal: chargeSubtotal.value,
                    taxAmount: taxAmount.value,
                    chargeTotal: chargeTotal.value,
                    billedAmount: billedAmount.value,
                    dueAmount: dueAmount.value,
                    year: year.value,
                }, // passing the values
                success: function(res) {
                    res = JSON.parse(res);
                    console.log(res);
                    if (res.status === 200) {
                        alert(res.msg);
                        window.location.href = "./listing.php";
                    } else {
                        alert(res.msg);
                    }
                    //do what you want here...
                }
            });
        }

        function getSales() {
            $.ajax({
                type: "GET", //type of method
                url: "../../controller/sales/getlistsales.php", //your page
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    if (res.status === 200) {
                        let data = res.data;
                        for (let i = 0; i < data.length; i++) {
                            let optEl = document.createElement("option");
                            optEl.value = data[i].sales_type;
                            optEl.innerHTML = data[i].sales_name;
                            salesType.appendChild(optEl);
                        }
                    }

                    //do what you want here...
                }
            });
        }

        function getLease() {
            $.ajax({
                type: "GET", //type of method
                url: "../../controller/lease/getlistlease.php", //your page
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    if (res.status === 200) {
                        let data = res.data;
                        for (let i = 0; i < data.length; i++) {
                            let optEl = document.createElement("option");
                            optEl.value = data[i].lease_code;
                            optEl.innerHTML = data[i].lease_no;
                            leaseNo.appendChild(optEl);
                        }
                    }

                    //do what you want here...
                }
            });
        }

        window.onload = getSales();
        window.onload = getLease();
    </script>
    <?php include_once("../components/footer.php") ?>