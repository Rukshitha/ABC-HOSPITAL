<?php
include_once('includes/style.php');
?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php
    include_once('includes/header.php');
    ?>

    <div class="container clearfix" style="font-family: sans-serif !important;">

        <div style="padding-top:150px">


            <form action="register_action.php" method="post" enctype="multipart/form-data">
                <div class="msg"></div>
                <div>
                    <h2 style="margin-left: 6%;">Pre-Registration</h2>
                </div>
                <div class="row rowGap">
                    <div class="col-xs-12 col-md-6">
                        <br>
                        <label class="control-label labelFont" for="date_of_birth">Title <span>*</span></label>
                        <select name="title" class="combobox input-small-combo form-control">
                            <option value="0">Please select the title</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Prof">Prof</option>
                            <option value="Rev">Rev</option>
                            <option value="Dr">Dr</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont">Initials:<span class="star">*</span></label>
                        <input name="initials" type="text" class="form-control" />
                    </div>
                </div>
                <div class="row rowGap">
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">First name:<span class="star">*</span></label>
                        <input name="fname" type="text" class="form-control" data-fv-trigger="blur" value="" maxlength="100" onkeypress="return isTextKey(event)">
                    </div>
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">Last name:<span class="star">*</span></label>
                        <input name="lname" type="text" class="form-control" data-fv-trigger="blur" value="" maxlength="100" onkeypress="return isTextKey(event)">
                    </div>
                </div>
                <div class="row rowGap">
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">Date of birth:<span class="star">*</span></label>
                        <input name="dob" type="date" class="form-control" data-fv-trigger="blur" value="" maxlength="10">
                    </div>
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">Age <span class="star">*</span></label>
                        <input name="age" type="text" class="form-control" value="" maxlength="2" onkeypress="return isNumberKey(event)">
                    </div>
                </div>

                <div class="row rowGap">
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">Gender <span class="star">*</span></label>
                        <div class="col-xs-12 col-md-6">
                            <input type="radio" name="gender" value="Male" style="margin-top: 10px;"> Male
                            <input type="radio" name="gender" value="Female" style="margin-top: 10px;"> Female
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">Civil Status <span class="star">*</span></label>
                        <div class="col-xs-12 col-md-6">
                            <input type="radio" name="status" value="Single" style="margin-top: 10px;"> Single
                            <input type="radio" name="status" value="Married" style="margin-top: 10px;">
                            Married
                        </div>
                    </div>
                </div>

                <div class="row rowGap">
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont">Mobile phone:<span class="star">*</span></label>
                        <input type="text" class="form-control" name="mbphone" data-fv-trigger="blur" value="" maxlength="10" onkeypress="return isNumberKey(event)" />
                    </div>
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">Land phone:</label>
                        <input id="ldphone" name="ldphone" type="text" class="form-control" data-fv-trigger="blur" value="" maxlength="10" onkeypress="return isNumberKey(event)">
                    </div>
                </div>

                <div class="row rowGap">
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">Email:<span class="star">*</span>
                        </label>
                        <input name="email" type="email" class="form-control" data-fv-trigger="blur" value="" maxlength="100">
                    </div>
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">NIC/Passport:<span class="star">*</span>
                            <span style="font-size: 12px"></span></label>
                        <input name="nic" type="text" class="form-control" data-fv-trigger="blur" value="" maxlength="10">
                    </div>
                </div>

                <!--<div class="row rowGap">
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" >Height (cm):</label>
                        <input  name="height" type="text" class="form-control"   maxlength="5" />
                    </div>
                    <div class="col-xs-12 col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">Weight (kg):</label>
                        <input name="weight" type="text" class="form-control" data-fv-trigger="blur" value="" maxlength="5" onkeypress="return isNumberKey(event)">
                    </div>
                </div>-->
                <div class="row rowGap">
                    <div class="col-md-6"> <br>
                        <label> Upload Your photo </label>
                        <input type="file" name="photo" class="form-control" />
                    </div>
                </div>

                <div class="row rowGap">
                    <div class="col-md-6"> <br>
                        <label class="control-label labelFont" for="date_of_birth">Password:</label>
                        <input name="password" type="password" class="form-control" data-fv-trigger="blur" value="" onkeypress="return isNumberKey(event)">
                    </div>

                </div>


                <div class="row rowGap">
                    <div class="col-md-12" align="justify-content-center"> <br>
                        <input type="hidden" name="csrf" />
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br>
                        <br>
                    </div>
                </div>
        </div>
    </div>
    </form>
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