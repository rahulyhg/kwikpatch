<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("Location:login.php");
} else {
    ?>
    <!DOCTYPE html>
    <html dir="ltr" lang="en">

        <head>

            <!-- Meta Tags -->
            <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
            <meta name="description" content="Kwik Patch Ltd., is a leading manufacturer of Tyre and Tube repair Patches" />
            <meta name="keywords" content="tirerepairs,gums,cements,earthmovers,conveyor,beltrepairs,tubelesstirerepairs,tube repairs" />
            <meta name="author" content="Banyan Infotech" />

            <!-- Page Title -->
            <title>Kwik Patch Ltd., is a leading manufacturer of Tyre and Tube repair Patches</title>


            <!-- Favicon and Touch Icons -->
            <link href="images/icon.png" rel="shortcut icon" type="image/png">
            <link href="images/icon.png" rel="apple-touch-icon">
            <link href="images/icon.png" rel="apple-touch-icon" sizes="72x72">
            <link href="images/icon.png" rel="apple-touch-icon" sizes="114x114">
            <link href="images/icon.png" rel="apple-touch-icon" sizes="144x144">

            <!-- Stylesheet -->
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
            <link href="css/animate.css" rel="stylesheet" type="text/css">
            <link href="css/css-plugin-collections.css" rel="stylesheet"/>
            <!-- CSS | menuzord megamenu skins -->
            <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
            <!-- CSS | Main style file -->
            <link href="css/style-main.css" rel="stylesheet" type="text/css">
            <!-- CSS | Preloader Styles -->
            <link href="css/preloader.css" rel="stylesheet" type="text/css">
            <!-- CSS | Custom Margin Padding Collection -->
            <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
            <!-- CSS | Responsive media queries -->
            <link href="css/responsive.css" rel="stylesheet" type="text/css">
            <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
            <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

            <!-- CSS | Theme Color -->
            <link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

            <!-- external javascripts -->
            <script src="js/jquery-2.2.0.min.js"></script>
            <script src="js/jquery-ui.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <!-- JS | jquery plugin collection for this theme -->
            <script src="js/jquery-plugin-collection.js"></script>
     
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>
        <body class="">
            <div id="wrapper" class="clearfix">
                <!-- preloader -->
                <div id="preloader">
                    <div id="spinner" class="spinner large-icon">
                        <img alt="" src="images/preloaders/logo.gif">
                    </div>
                    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
                </div>

                <!-- Header -->
                <?php @include('top.php'); ?>
                <!-- Start main-content -->
                <div class="main-content">

                    <!-- Section: inner-header -->
                    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
                        <div class="container pt-90 pb-50">
                            <!-- Section Content -->
                            <div class="section-content pt-100">
                                <div class="row"> 
                                    <div class="col-md-12">
                                        <h3 class="title text-white">Shop Checkout</h3>
                                        <ul class="list-inline text-white">
                                            <li>Home /</li>
                                            <li><span class="text-gray">Shop Checkout</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="container">
                            <div class="section-content">
                                <div class="row mt-30">
                                    <form  method="POST" name="theform" id="orderform" >

                                        <div class="col-md-6">
                                            <div class="billing-details">
                                                <h3 class="mb-30">Billing Details</h3>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="checkuot-form-fname">First Name</label>
                                                        <input id="fname" type="text" class="form-control" placeholder="First Name" name="fname">
                                                        <span id="error_fname" style="color: #ff0000;"></span>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="checkuot-form-lname">Last Name</label>
                                                        <input id="lname" type="text" class="form-control" placeholder="Last Name"  name="lname">
                                                        <span id="error_lname" style="color: #ff0000;"></span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="checkuot-form-cname">Company Name</label>
                                                            <input id="cname" type="text" class="form-control" placeholder="Company Name" name="cname">
                                                            <span id="error_cname" style="color: #ff0000;"></span>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="checkuot-form-address">Address</label>
                                                            <input id="address" type="text" class="form-control" placeholder="Street address" name="addressline1">
                                                            <span id="error_address"style="color: #ff0000;"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" name="addressline2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="checkuot-form-email">Email Address</label>
                                                        <input id="email" type="email" class="form-control" placeholder="Email Address" name="email">
                                                        <span id="error_email"style="color: #ff0000;"></span>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="checkuot-form-email">Phone No</label>
                                                        <input id="phone1" type="tel" class="form-control" placeholder="Phone No" name="phone1">
                                                        <span id="error_phno" style="color: #ff0000;"></span>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="checkuot-form-city">City</label>
                                                        <input id="city" type="text" class="form-control" placeholder="City" name="city">
                                                        <span id="error_city"style="color: #ff0000;"></span>

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="checkuot-form-city">State</label>
                                                        <input id="State" type="text" class="form-control" placeholder="State" name="state">
                                                        <span id="error_state"style="color: #ff0000;"></span>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="checkuot-form-zip">Zip/Postal Code</label>
                                                        <input id="zip" type="text" class="form-control" placeholder="Zip/Postal Code" name="zip">
                                                        <span id="error_zip"style="color: #ff0000;"></span>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="checkuot-form-city">Country</label>
                                                        <input id="Country" type="text" class="form-control" placeholder="Country" name="country">
                                                        <span id="error_country" style="color: #ff0000;"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="shipping-details">
                                                <h3 class="mb-30"> Ship to a different address?
                                                    <span class="checkbox pull-right flip mt-0">
                                                        <label>
                                                            <input type="checkbox" id="checkbox-ship-to-different-address" value="1" aria-label="..." name="checkbox-ship-to-different-address">
                                                        </label>
                                                    </span>
                                                </h3>
                                                <div id="checkout-shipping-address">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="checkuot-form-fname2">First Name</label>
                                                            <input id="fname2" type="text" class="form-control" placeholder="First Name" name="fname2">
                                                            <span id="error_fname2" style="color: #ff0000;"></span>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="checkuot-form-lname2">Last Name</label>
                                                            <input id="lname2" type="text" class="form-control" placeholder="Last Name" name="lname2">
                                                            <span id="error_lname2" style="color: #ff0000;"></span>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="checkuot-form-cname2">Company Name</label>
                                                                <input id="cname2" type="text" class="form-control" placeholder="Company Name" name="cname2">
                                                                <span id="error_cname2" style="color: #ff0000;"></span>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="checkuot-form-address2">Address</label>
                                                                <input id="address2" type="text" class="form-control" placeholder="Street address" name="address2line1">
                                                                <span id="error_address2"style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)"name="address2line2">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="checkuot-form-email">Email Address</label>
                                                            <input id="username2" type="email" class="form-control" placeholder="Email Address" name="email2">
                                                            <span id="error_email2"style="color: #ff0000;"></span>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="checkuot-form-email">Phone No</label>
                                                            <input id="phone2" type="tel" class="form-control" placeholder="Phone No" name="phone2">
                                                            <span id="error_phno2" style="color: #ff0000;"></span>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="checkuot-form-city2">City</label>
                                                            <input id="city2" type="text" class="form-control" placeholder="City" name="city2">
                                                            <span id="error_city2"style="color: #ff0000;"></span>

                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="checkuot-form-city">State</label>
                                                            <input id="State2" type="text" class="form-control" placeholder="State" name="state2">
                                                            <span id="error_state2"style="color: #ff0000;"></span>

                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="checkuot-form-zip">Zip/Postal Code</label>
                                                            <input id="zip2" type="text" class="form-control" placeholder="Zip/Postal Code" name="zip2">
                                                            <span id="error_zip2"style="color: #ff0000;"></span>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="checkuot-form-city">Country</label>
                                                            <input id="Country2" type="text" class="form-control" placeholder="Country" name="country2">
                                                            <span id="error_country2" style="color: #ff0000;"></span>
                                                        </div></div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Order Notes</label>
                                                    <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Your order</h3>
                                            <table class="table table-striped table-bordered tbl-shopping-cart">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Product Code</th>
                                                        <th>Product Name</th>

                                                        <th>Quantity</th>


                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <?php
                                                    @include ('include/config.php');

                                                    $id = $_SESSION['uid'];
                                                    $query = "SELECT * FROM `tbl_addtocart` WHERE 	`user_id`='$id' AND is_shifted='0'";
                                                    $result = mysqli_query($con, $query);
                                                    $sno = 0;
                                                    $no = mysqli_num_rows($result);

                                                    if ($no > 0) {
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            ?>     <tr class="cart_item">

                                                                <td> <?php $sno+=1;
                                                echo $sno;
                                                            ?></td>
                                                                <td class="product-price"><span class="amount"><?php echo $row['prd_code']; ?></span>   
                                                                <td class="product-price"><span class="amount">
            <?php echo $row['prd_name']; ?></span>                </td>

                                                                <td class="product-price"><span class="amount">
            <?php echo $row['qty']; ?></span>                </td>

                                                            </tr>


                                                        <input type="hidden" name="prd_code[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['prd_code']; ?>">        </td>
                                                        <input type="hidden" name="prd_name[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['prd_name']; ?>">        </td>
                                                        <input type="hidden" name="prd_category[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['prd_sub_categoryname']; ?>">        </td>
                                                        <input type="hidden" name="prd_main_category[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['prd_main_category']; ?>">        </td>
                                                        <input type="hidden" name="prd_qty[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['qty']; ?>">        </td>
        <?php } ?>
                                                    <tr class="cart_item">


                                                    <input type="hidden" name="total" value="<?php echo $sno; ?>">
                                                    </tr>

                                                    <?php
                                                } else {
                                                    ?> <tr><td colspan="5">No Items Available in cart;</td></tr><?php }
                                        ?>
                                                </tbody>
                                            </table>

                                        </div>
    <?php if ($no > 0) { ?>
                                            <div class="col-md-12">
                                                <div class="text-right"><span id="ajaxloading" style="display:none;" >
                                                        <img src="ajaxloading.svg" style="width:50px;"></span>
                                                    <button type="button" class="btn btn-primary Proceed_button">Submit </button> &nbsp;&nbsp;
                                                </div>
    <?php } ?>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end main-content -->

                </div>
                <!-- Footer -->
                <script>
                    $(document).on("keyup", "input#fname", function () {

                        $('#error_fname').html('');
                    });
                    $(document).on("keyup", "input#lname", function () {

                        $('#error_lname').html('');
                    });
                    $(document).on("keyup", "input#email", function () {

                        $('#error_email').html('');
                    });
                    $(document).on("keyup", "input#password", function () {

                        $('#error_password').html('');
                    });
                    $(document).on("keyup", "input#rpassword", function () {

                        $('#error_rpassword').html('');
                    });
                    $(document).on("keyup", "input#phone1", function () {

                        $('#error_phno').html('');
                    });
                    $(document).on("keyup", "input#cname", function () {

                        $('#error_cname').html('');
                    });
                    $(document).on("keyup", "input#address", function () {

                        $('#error_address').html('');
                    });
                    $(document).on("keyup", "input#city", function () {

                        $('#error_city').html('');
                    });
                    $(document).on("keyup", "input#zip", function () {

                        $('#error_zip').html('');
                    });
                    $(document).on("keyup", "input#State", function () {

                        $('#error_state').html('');
                    });
                    $(document).on("keyup", "input#Country", function () {

                        $('#error_country').html('');
                    });

                    $(document).on("keyup", "input#fname2", function () {

                        $('#error_fname2').html('');
                    });
                    $(document).on("keyup", "input#lname2", function () {

                        $('#error_lname2').html('');
                    });
                    $(document).on("keyup", "input#username2", function () {

                        $('#error_email2').html('');
                    });

                    $(document).on("keyup", "input#phone2", function () {

                        $('#error_phno2').html('');
                    });
                    $(document).on("keyup", "input#cname2", function () {

                        $('#error_cname2').html('');
                    });
                    $(document).on("keyup", "input#address2", function () {

                        $('#error_address2').html('');
                    });
                    $(document).on("keyup", "input#city2", function () {

                        $('#error_city2').html('');
                    });
                    $(document).on("keyup", "input#zip2", function () {

                        $('#error_zip2').html('');
                    });
                    $(document).on("keyup", "input#State2", function () {

                        $('#error_state2').html('');
                    });
                    $(document).on("keyup", "input#Country2", function () {

                        $('#error_country2').html('');
                    });

                    $(function () {





                        $(".Proceed_button").click(function () {

                            var str = $("#orderform").serialize();
                            //  alert(str);
                            var email = $("#email").val();

                            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                   

                            if ($('#checkbox-ship-to-different-address').prop('checked')) {
                                     if (document.theform.fname.value == 0)
                            {
                                $('#error_fname').html('Enter your First Name');

                                document.theform.fname.focus();
                                return false;
                            }

                            if (document.theform.lname.value == 0)
                            {
                                $('#error_lname').html('Enter your Last Name');

                                document.theform.lname.focus();
                                return false;
                            }


                            if (document.theform.cname.value == 0)
                            {
                                $('#error_cname').html('Enter the Company Name');

                                document.theform.cname.focus();
                                return false;
                            }

                            if (document.theform.addressline1.value == 0)
                            {
                                $('#error_address').html('Enter Your Address');

                                document.theform.addressline1.focus();
                                return false;
                            }
                            if (email == '')
                            {
                                $('#error_email').html('Enter Email address');
                                $("#email").focus();
                                return false;
                            }
                            var x = $("#email").val();
                            var atpos = x.indexOf("@");
                            var dotpos = x.lastIndexOf(".");
                            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                                $('#error_email').html('Enter vaild Email address');
                                $("#email").focus();
                                return false;
                            }





                            if (document.theform.phone1.value == 0)
                            {
                                $('#error_phno').html('Enter Your Phone No');

                                document.theform.phone1.focus();
                                return false;
                            }
                            if (document.theform.city.value == 0)
                            {
                                $('#error_city').html('Enter your City');

                                document.theform.city.focus();
                                return false;
                            }
                            if (document.theform.state.value == 0)
                            {
                                $('#error_state').html('Enter Your State');

                                document.theform.state.focus();
                                return false;
                            }

                            if (document.theform.zip.value == 0)
                            {
                                $('#error_zip').html('Enter Your zip/pin code');

                                document.theform.zip.focus();
                                return false;

                            }

                            if (document.theform.Country.value == 0)
                            {
                                $('#error_country').html('Enter Your Country');

                                document.theform.Country.focus();
                                return false;
                            }
            
            var email2 = $("#username2").val();

                                if (document.theform.fname2.value == 0)
                                {
                                    $('#error_fname2').html('Enter your First Name');

                                    document.theform.fname2.focus();
                                    return false;
                                }

                                if (document.theform.lname2.value == 0)
                                {
                                    $('#error_lname2').html('Enter your Last Name');

                                    document.theform.lname2.focus();
                                    return false;
                                }


                                if (document.theform.cname2.value == 0)
                                {
                                    $('#error_cname2').html('Enter the Company Name');

                                    document.theform.cname2.focus();
                                    return false;
                                }

                                if (document.theform.address2.value == 0)
                                {
                                    $('#error_address2').html('Enter Your Address');

                                    document.theform.address2.focus();
                                    return false;
                                }
                                if (email == '')
                                {
                                    $('#error_email2').html('Enter Email address');
                                    $("#username2").focus();
                                    return false;
                                }
                                var x = $("#username2").val();
                                var atpos = x.indexOf("@");
                                var dotpos = x.lastIndexOf(".");
                                if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                                    $('#error_email2').html('Enter vaild Email address');
                                    $("#username2").focus();
                                    return false;
                                }


                                if (document.theform.phone2.value == 0)
                                {
                                    $('#error_phno2').html('Enter Your Phone No');

                                    document.theform.phone2.focus();
                                    return false;
                                }
                                if (document.theform.city2.value == 0)
                                {
                                    $('#error_city2').html('Enter your City');

                                    document.theform.city2.focus();
                                    return false;
                                }
                                if (document.theform.State2.value == 0)
                                {
                                    $('#error_state2').html('Enter Your State');

                                    document.theform.State2.focus();
                                    return false;
                                }

                                if (document.theform.zip2.value == 0)
                                {
                                    $('#error_zip2').html('Enter Your zip/pin code');

                                    document.theform.zip2.focus();
                                    return false;

                                }

                                if (document.theform.Country2.value == 0)
                                {
                                    $('#error_country2').html('Enter Your Country');

                                    document.theform.Country2.focus();
                                    return false;
                                }
                            }
                                     if (document.theform.fname.value == 0)
                            {
                                $('#error_fname').html('Enter your First Name');

                                document.theform.fname.focus();
                                return false;
                            }

                            if (document.theform.lname.value == 0)
                            {
                                $('#error_lname').html('Enter your Last Name');

                                document.theform.lname.focus();
                                return false;
                            }


                            if (document.theform.cname.value == 0)
                            {
                                $('#error_cname').html('Enter the Company Name');

                                document.theform.cname.focus();
                                return false;
                            }

                            if (document.theform.addressline1.value == 0)
                            {
                                $('#error_address').html('Enter Your Address');

                                document.theform.addressline1.focus();
                                return false;
                            }
                            if (email == '')
                            {
                                $('#error_email').html('Enter Email address');
                                $("#email").focus();
                                return false;
                            }
                            var x = $("#email").val();
                            var atpos = x.indexOf("@");
                            var dotpos = x.lastIndexOf(".");
                            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                                $('#error_email').html('Enter vaild Email address');
                                $("#email").focus();
                                return false;
                            }





                            if (document.theform.phone1.value == 0)
                            {
                                $('#error_phno').html('Enter Your Phone No');

                                document.theform.phone1.focus();
                                return false;
                            }
                            if (document.theform.city.value == 0)
                            {
                                $('#error_city').html('Enter your City');

                                document.theform.city.focus();
                                return false;
                            }
                            if (document.theform.state.value == 0)
                            {
                                $('#error_state').html('Enter Your State');

                                document.theform.state.focus();
                                return false;
                            }

                            if (document.theform.zip.value == 0)
                            {
                                $('#error_zip').html('Enter Your zip/pin code');

                                document.theform.zip.focus();
                                return false;

                            }

                            if (document.theform.Country.value == 0)
                            {
                                $('#error_country').html('Enter Your Country');

                                document.theform.Country.focus();
                                return false;
                            }
        
        else

                            {


                                $('#ajaxloading').show();

                                $.ajax({
                                    type: "POST",
                                    url: "order-process.php",
                                    data: str,
                                    cache: true,
                                    success: function (data) {
alert(data);
                                     //   $('#ajaxloading').hide();

location.href = "ordersuccess.php?orderid="+data;
//window.location.href="new.php?orderid=".data;


                                    }
                                });
                            }
                            return false;
                        });
                    });
                </script>

                <!-- Footer Scripts -->
                <!-- JS | Custom script for all pages -->
                <script src="js/custom.js"></script>

        </body>

    </html>
<?php } ?>