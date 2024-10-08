<?php include_once("../components/header.php") ?>
<?php include_once("../components/checklogin.php") ?>

<body>
    <?php include_once("../components/navbar.php") ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card mb-2 mt-2 p-2 text-center">
                    <h3>Edit Overage</h3>
                </div>
            </div>
        </div>
        <div class="card mb-2 p-2">
            <div class="row justify-content-center main-content">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <form>
                        <div class="mb-3">
                            <label for="unit" class="form-label">Unit</label>
                            <input type="text" class="form-control" id="unit">
                        </div>
                        <div class="mb-3">
                            <label for="sales-type" class="form-label">Sales Type</label>
                            <select class="form-select" aria-label="sales-type" id="sales-type">
                                <option selected>Open this select menu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="lease-no" class="form-label">Lease No</label>
                            <select class="form-select" aria-label="lease-no" id="lease-no">
                                <option selected>Open this select menu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="month" class="form-label">Month</label>
                            <select class="form-select" aria-label="month" id="month">
                                <?php $arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"] ?>
                                <?php for ($i = 1; $i <= 12; $i++) { ?>
                                    <option value=<?= $i ?>><?= $arrMonth[$i - 1] ?></option>
                                <?php } ?>
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
                        <div class="mb-3">
                            <label for="charge-code" class="form-label">Charge Code</label>
                            <input type="text" class="form-control" id="charge-code">
                        </div>
                        <div class="mb-3">
                            <label for="partial-year" class="form-label">Partial Year</label>
                            <input type="number" class="form-control" id="partial-year">
                        </div>
                        <div class="mb-3">
                            <label for="sales-amount" class="form-label">Sales Amount</label>
                            <input type="number" step="0.01" class="form-control" id="sales-amount">
                        </div>
                        <div class="mb-3">
                            <label for="breakpoint-sales" class="form-label">Break Point Sales Amt.</label>
                            <input type="number" step="0.01" class="form-control" id="breakpoint-sales">
                        </div>
                        <div class="mb-3">
                            <label for="breakpoint-percent" class="form-label">Break Point Percent</label>
                            <input type="number" step="0.01" class="form-control" id="breakpoint-percent">
                        </div>
                        <div class="mb-3">
                            <label for="gross-overage" class="form-label">Gross Overage</label>
                            <input type="number" step="0.01" class="form-control" id="gross-overage">
                        </div>
                        <div class="mb-3">
                            <label for="offset" class="form-label">Offset</label>
                            <input type="number" step="0.01" class="form-control" id="offset">
                        </div>
                        <div class="mb-3">
                            <label for="offset-applied" class="form-label">Offset Applied</label>
                            <input type="number" step="0.01" class="form-control" id="offset-applied">
                        </div>
                        <div class="mb-3">
                            <label for="net-overage" class="form-label">Net Overage</label>
                            <input type="number" step="0.01" class="form-control" id="net-overage">
                        </div>
                        <div class="mb-3">
                            <label for="prior-adhoc" class="form-label">Prior Adhoc</label>
                            <input type="number" step="0.01" class="form-control" id="prior-adhoc">
                        </div>
                        <div class="mb-3">
                            <label for="charge-subtotal" class="form-label">Charge Subtotal</label>
                            <input type="number" step="0.01" class="form-control" id="charge-subtotal">
                        </div>
                        <div class="mb-3">
                            <label for="tax-amount" class="form-label">Tax Amount</label>
                            <input type="number" step="0.01" class="form-control" id="tax-amount">
                        </div>
                        <div class="mb-3">
                            <label for="charge-total" class="form-label">Charge Total</label>
                            <input type="number" step="0.01" class="form-control" id="charge-total">
                        </div>
                        <div class="mb-3">
                            <label for="billed-amount" class="form-label">Billed Amount</label>
                            <input type="number" step="0.01" class="form-control" id="billed-amount">
                        </div>
                        <div class="mb-3">
                            <label for="due-amount" class="form-label">Due Amount</label>
                            <input type="number" step="0.01" class="form-control" id="due-amount">
                        </div>
                        <div class="text-end">
                            <button type="button" onclick="window.location.href='./listing.php'" class="btn btn-secondary">Cancel</button>
                            <button type="button" onclick="deleteData()" class="btn btn-danger">Delete</button>
                            <button type="button" onclick="submitform()" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var salesType = document.getElementById("sales-type"),
            leaseNo = document.getElementById("lease-no"),
            unit = document.getElementById("unit"),
            month = document.getElementById("month"),
            chargeCode = document.getElementById("charge-code"),
            partialYear = document.getElementById("partial-year"),
            salesAmount = document.getElementById("sales-amount"),
            breakpointSales = document.getElementById("breakpoint-sales"),
            breakpointPercent = document.getElementById("breakpoint-percent"),
            grossOverage = document.getElementById("gross-overage"),
            offset = document.getElementById("offset"),
            offsetApplied = document.getElementById("offset-applied"),
            netOverage = document.getElementById("net-overage"),
            priorAdhoc = document.getElementById("prior-adhoc"),
            chargeSubtotal = document.getElementById("charge-subtotal"),
            taxAmount = document.getElementById("tax-amount"),
            chargeTotal = document.getElementById("charge-total"),
            billedAmount = document.getElementById("billed-amount"),
            dueAmount = document.getElementById("due-amount"),
            year = document.getElementById("year");

        function getCurrentURL(param) {
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const res = urlParams.get(param);
            return res;
        }

        function submitform() {
            $.ajax({
                type: "POST", //type of method
                url: "../../controller/overage/editdata.php", //your page
                data: {
                    overageCode: getCurrentURL("overage_code"),
                    salesType: salesType.value,
                    leaseNo: leaseNo.value,
                    unit: unit.value,
                    month: month.value,
                    year: year.value,
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

        function getData() {
            $.ajax({
                type: "GET", //type of method
                url: "../../controller/overage/getform.php?overage_code=" + getCurrentURL("overage_code"), //your page
                dataType: 'json',
                success: function(res) {
                    // res = JSON.parse(res);
                    console.log(res);
                    let data = res.data;
                    if (res.status === 200) {
                        salesType.value = data.sales_type;
                        leaseNo.value = data.lease_code;
                        unit.value = data.unit;
                        month.value = data.month;
                        chargeCode.value = data.charge_code;
                        partialYear.value = data.partial_year;
                        salesAmount.value = data.sales_amount;
                        breakpointSales.value = data.breakpoint_salesamt;
                        breakpointPercent.value = data.breakpoint_percent;
                        grossOverage.value = data.gross_overage;
                        offset.value = data.offset;
                        offsetApplied.value = data.offset_applied;
                        netOverage.value = data.net_overage;
                        priorAdhoc.value = data.prior_adhoc;
                        chargeSubtotal.value = data.charge_subtotal;
                        taxAmount.value = data.tax_amount;
                        chargeTotal.value = data.charge_total;
                        billedAmount.value = data.billed_amount;
                        dueAmount.value = data.due_amount;
                        year.value = data.year;
                    } else {
                        alert("Failed get data");
                        window.location.href = "./listing.php";
                    }
                }
            });
        }

        window.onload = getSales();
        window.onload = getLease();
        window.onload = getData();

        /* Delete Data */
        function deleteData() {
            const confirmDelete = confirm("Are you sure want to delete this data ?");

            if (confirmDelete) {
                $.ajax({
                    type: "POST", //type of method
                    url: "../../controller/overage/deletedata.php", //your page
                    data: {
                        overageCode: getCurrentURL("overage_code")
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
        }
        /* /Delete Data */
    </script>
    <?php include_once("../components/footer.php") ?>