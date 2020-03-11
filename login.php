<?php
    include_once('includes/style.php');
    ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php
    include_once('includes/header.php');
    ?>
    <div class="container clearfix" style="font-family: sans-serif !important;">

        <div style="padding-top:150px">
            <div class="col-md-9">
                <?php
                if (isset($_GET['errors'])) {
                ?>
                    <div class="alert alert-danger">
                        <?= $_GET["errors"] ?>
                    </div>
                <?php
                }
                ?>
                <div class="panel panel-default">

                   
                    <div class="panel-heading" style="color: black;"> Login Page </div>
                    <div class="panel-body">
                        <form action="login_action.php" method="post" style="padding-bottom: 50px;">
                            <label> Email</label>
                            <input type="text" name="email" class="form-control" />

                            <label> Password </label>
                            <input type="password" name="password" class="form-control" />

                            <br />
                            
                            <button type="submit" class="btn btn-success"> Login </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <footer class="ftco-footer ftco-section img" style="background-image: url(images/footer-bg.jpg);">
        <?php
        include_once('includes/footer.php');
        ?>

    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

</body>

</html>