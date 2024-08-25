<?php include_once("../components/header.php") ?>
<?php include_once("../components/checklogin.php") ?>

<body>
    <?php include_once("../components/navbar.php") ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card mb-2 mt-2 p-2 text-center">
                    <h3>Edit Sales Master Data</h3>
                </div>
            </div>
        </div>
        <div class="card mb-2 p-2">
            <div class="row justify-content-center main-content">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <form>
                        <div class="mb-3">
                            <label for="sales-type" class="form-label">Sales Type</label>
                            <input type="text" class="form-control" id="sales-type" readonly disabled>
                        </div>
                        <div class="mb-3">
                            <label for="sales-name" class="form-label">Sales Name</label>
                            <input type="text" class="form-control" id="sales-name">
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
        var salesName = document.getElementById("sales-name"),
            salesType = document.getElementById("sales-type");

        function getCurrentURL(param) {
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const res = urlParams.get(param);
            return res;
        }

        function submitform() {
            if (salesName.value == "") {
                alert("please fill sales name");
                return;
            }
            $.ajax({
                type: "POST", //type of method
                url: "../../controller/sales/editdata.php", //your page
                data: {
                    salesName: salesName.value,
                    salesType: getCurrentURL("salesType")
                }, // passing the values
                success: function(res) {
                    res = JSON.parse(res);
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

        function getData() {
            $.ajax({
                type: "GET", //type of method
                url: "../../controller/sales/getform.php?sales_type=" + getCurrentURL("salesType"), //your page
                dataType: 'json',
                success: function(res) {
                    // res = JSON.parse(res);
                    console.log(res);
                    if (res.status === 200) {
                        salesName.value = res.data.sales_name;
                        salesType.value = res.data.sales_type;
                    } else {
                        alert("Failed get data");
                        window.location.href = "./listing.php";
                    }
                }
            });
        }
        getData();

        function deleteData() {
            const confirmDelete = confirm("Are you sure want to delete this data ?");

            if (confirmDelete) {
                $.ajax({
                    type: "POST", //type of method
                    url: "../../controller/sales/deletedata.php", //your page
                    data: {
                        salesType: getCurrentURL("salesType")
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
    </script>
    <?php include_once("../components/footer.php") ?>