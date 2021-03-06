<?php
session_start();
 if(empty($_GET['orderid']))
{
    header("Location:page-404.php");
}
else {
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
                                        <h2 style="text-decoration: underline">Your order has been received</h2>
                                        <h3>  Thank you for your Purchase</h3>
                                        <?php
                                         $rand=$_GET['orderid'];
                                          $orderno = "kwikpatch" . "$rand";
                                        ?>
                                        Your order No is:&nbsp;&nbsp;&nbsp;<strong><a href="new.php?orderno=<?php echo $orderno?>"><?php echo $orderno; ?></a></strong><br/>
        
You will receive an order conﬁrmation emall with detalls of your order and a link to track its progress.


                                        </form>
                                        </div>

                               
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end main-content -->

                </div>
                <!-- Footer -->
           
                <!-- Footer Scripts -->
                <!-- JS | Custom script for all pages -->
                <script src="js/custom.js"></script>

        </body>

    </html>
<?php } ?>