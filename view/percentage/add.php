<?php include_once("../components/header.php") ?>
<?php include_once("../components/checklogin.php") ?>

<body>
    <?php include_once("../components/navbar.php") ?>

    <?php $arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"] ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card mb-2 mt-2 p-2 text-center">
                    <h3>Add Percentage</h3>
                </div>
            </div>
        </div>
        <div class="card mb-2 p-2">
            <div class="row justify-content-center main-content">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <form>
                        <div class="mb-3">
                            <label for="unit-code" class="form-label">Unit Code</label>
                            <select class="form-select" aria-label="unit-code" id="unit-code">
                                <option selected>Open this select menu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="lease-no" class="form-label">Lease No</label>
                            <input type="text" class="form-control" id="lease-no" readonly disabled>
                        </div>
                        <div class="mb-3">
                            <label for="startdate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startdate" readonly disabled>
                        </div>
                        <div class="mb-3">
                            <label for="enddate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="enddate" readonly disabled>
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
                            <label for="month" class="form-label">Month</label>
                            <select class="form-select" aria-label="month" id="month">
                                <?php $arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"] ?>
                                <?php for ($i = 1; $i <= 12; $i++) { ?>
                                    <option value=<?= $i ?>><?= $arrMonth[$i - 1] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="percentage-val" class="form-label">Percentage Value</label>
                            <input type="number" class="form-control" id="percentage-val">
                        </div>
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
        var unitCode = document.getElementById("unit-code"),
            leaseNo = document.getElementById("lease-no"),
            startdate = document.getElementById("startdate"),
            enddate = document.getElementById("enddate"),
            year = document.getElementById("year"),
            month = document.getElementById("month"),
            percentageVal = document.getElementById("percentage-val");

        function submitform() {
            $.ajax({
                type: "POST", //type of method
                url: "../../controller/percentage/adddata.php", //your page
                data: {
                    unitCode: unitCode.value,
                    year: year.value,
                    month: month.value,
                    percentageVal: percentageVal.value
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

        /* Function */
        function getRent() {
            $.ajax({
                type: "GET", //type of method
                url: "../../controller/percentage/getlistrentdata.php", //your page
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    if (res.status === 200) {
                        let data = res.data;
                        for (let i = 0; i < data.length; i++) {
                            let optEl = document.createElement("option");
                            optEl.value = data[i].unit_code;
                            optEl.innerHTML = data[i].unit_code;
                            unitCode.appendChild(optEl);
                        }
                    }
                    //do what you want here...
                }
            });
        }

        window.onload = getRent();

        unitCode.addEventListener("change", (e) => {
            getRentData(e.target.value);
        })

        function getRentData(unitCode) {
            $.ajax({
                type: "GET", //type of method
                url: "../../controller/percentage/getrentdata.php?unit_code=" + unitCode, //your page
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    if (res.status === 200) {
                        let data = res.data;
                        leaseNo.value = data.lease_no;
                        startdate.value = data.lease_startdate;
                        enddate.value = data.lease_enddate;
                    }
                    //do what you want here...
                }
            });
        }
        /* Function */
    </script>
    <?php include_once("../components/footer.php") ?>