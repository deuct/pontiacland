<?php include_once("../components/header.php") ?>
<?php include_once("../components/checklogin.php") ?>

<body>
    <?php include_once("../components/navbar.php") ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card mb-2 mt-2 p-2 text-center">
                    <h3>Budget Per Year</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center main-content">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card mb-2 p-2">
                    <div class="row ">
                        <div class="col d-flex flex-row">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            <div class="ms-auto d-inline-block"><button type="button" class="btn btn-primary" onclick="window.location.href='./add.php'">Add Data</button></div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Lease No</th>
                                        <th scope="col">Year</th>
                                        <th scope="col">Budget Type</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="list-body">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            var listBody = document.getElementById("list-body");

            function getData() {
                $.ajax({
                    type: "GET", //type of method
                    url: "../../controller/budget/getlisting.php", //your page
                    dataType: 'json',
                    success: function(res) {
                        console.log(res);
                        if (res.status === 200) {
                            let data = res.data;
                            for (let i = 0; i < data.length; i++) {
                                let budgetType = data[i].budget_type === "nr" ? "Net Rent" : "Service Charge";
                                let trEl = document.createElement("tr");
                                trEl.innerHTML = `
                                    <td>` + (i + 1) + `</td>
                                    <td>` + data[i].lease_no + `</td>
                                    <td>` + data[i].year + `</td>
                                    <td>` + budgetType + `</td>
                                    <td class="d-flex">
                                        <button type="button" class="btn btn-sm btn-primary me-2" onclick="window.location.href='./edit.php?lease_code=` + data[i].lease_code + `&year=` + data[i].year + `&budgetType=`+data[i].budget_type+`'">Edit</button>
                                    </td>
                                `;
                                listBody.appendChild(trEl);
                            }
                        }

                        //do what you want here...
                    }
                });
            }

            window.onload = getData();
        </script>

        <?php include_once("../components/footer.php") ?>