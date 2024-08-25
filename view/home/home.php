<?php include_once("../components/header.php") ?>
<?php include_once("../components/checklogin.php") ?>

<body>
    <?php include_once("../components/navbar.php") ?>

    <div class="container main-content">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="text-center card mb-2 mt-2 p-2">
                    <h3>Welcome To <br /> Finance Report System Pontiac Land</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex">
                <div class="card w-50 me-2">
                    <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                </div>
                <div class="card w-50">
                    <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script type="text/javascript">
        /*  */
        var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = ["red", "green", "blue", "orange", "brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "World Wine Production 2018"
                }
            }
        });

        /* 
            buat report ACT, budget 
        */
        const xValues2 = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

        new Chart("myChart2", {
            type: "line",
            data: {
                labels: xValues2,
                datasets: [{
                    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    borderColor: "red",
                    fill: false
                }, {
                    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                    borderColor: "green",
                    fill: false
                }, {
                    data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                    borderColor: "blue",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "World Wine Production 2018"
                }
            }
        });
    </script>

    <?php include_once("../components/footer.php") ?>