<?php include_once("../components/header.php") ?>
<?php include_once("../components/checklogin.php") ?>

<body>
    <?php include_once("../components/navbar.php") ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card mb-2 mt-2 p-2 text-center">
                    <h3>Add Lease Data</h3>
                </div>
            </div>
        </div>
        <div class="card mb-2 p-2">
            <div class="row justify-content-center main-content">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <form>
                        <div class="mb-3">
                            <label for="lease-no" class="form-label">Lease No</label>
                            <input type="text" class="form-control" id="lease-no">
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
        var leaseNo = document.getElementById("lease-no");

        function submitform() {
            if (leaseNo.value == "") {
                alert("please fill lease no.");
                return;
            }
            $.ajax({
                type: "POST", //type of method
                url: "../../controller/lease/adddata.php", //your page
                data: {
                    leaseNo: leaseNo.value
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
    </script>
    <?php include_once("../components/footer.php") ?>