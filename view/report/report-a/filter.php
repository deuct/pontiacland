<?php include_once("../../components/header.php") ?>
<?php include_once("../../components/checklogin.php") ?>

<body>
    <?php include_once("../../components/navbar.php") ?>

    <?php $arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"] ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card mb-2 mt-2 p-2 text-center">
                    <h3>Report B</h3>
                </div>
            </div>
        </div>
        <div class="card mb-2 p-2">
            <div class="row justify-content-center main-content">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <form>
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
        var year = document.getElementById("year"),
            month = document.getElementById("month");

        function submitform() {
            newwindow = window.open('./view.php?year=' + year.value + '&month=' + month.value, 'Report B', 'height=100%,width=100%');
            if (window.focus) {
                newwindow.focus()
            }
            return false;
        }

        /* Function */
        /* Function */
    </script>
    <?php include_once("../../components/footer.php") ?>