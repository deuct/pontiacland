<?php include_once("../components/header.php") ?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-12">
                <div class="card py-3 px-2 text-center mt-5">
                    <img src="../../assets/pontiaclogo.jpg" width="100px" class="mx-auto" />
                    <h3 class="mt-0">Welcome To <br /> Pontiac Land Finance System</h3>
                    <span class="fs-5 mb-3">Please login before continue.</span>
                    <hr />
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                            <form>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <button type="button" onclick="submitLogin()" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- <hr />
                    <span>&copy; 2024 Pontiac Land</span> -->
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var username = document.getElementById("username"),
            password = document.getElementById("password");

        function submitLogin() {
            $.ajax({
                type: "POST", //type of method
                url: "../../controller/login/login.php", //your page
                data: {
                    username: username.value,
                    password: password.value
                }, // passing the values
                success: function(res) {
                    // res = JSON.encode(res);
                    res = JSON.parse(res);
                    console.log(res);
                    console.log(res.status);
                    console.log(res.msg);
                    if (res.status === 200) {
                        alert(res.msg);
                        window.location.href = "../home/home.php";
                    } else {
                        alert(res.msg);
                    }
                    //do what you want here...
                }
            });
        }
    </script>

    <?php include_once("../components/footer.php") ?>