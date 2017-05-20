<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from umega.lethemes.net/1.4.1/first-layout/summernote.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 May 2016 11:29:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Umega App - Summernote</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="plugins/themify-icons/themify-icons.css">
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
    <!-- Animo.js-->
    <link rel="stylesheet" type="text/css" href="plugins/animo.js/animate-animo.min.css">
    <!-- Bootstrap Progressbar-->
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Summernote-->
    <link rel="stylesheet" type="text/css" href="plugins/summernote/dist/summernote.css">
    <!-- Codemirror-->
    <link rel="stylesheet" type="text/css" href="plugins/codemirror/lib/codemirror.css">
    <link rel="stylesheet" type="text/css" href="plugins/codemirror/theme/monokai.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="build/css/first-layout.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-sidebar-color="sidebar-light" class="sidebar-light">
    <!-- Header start-->
    <header>
      <div class="search-bar closed">
        <form>
          <div class="input-group input-group-lg">
            <input type="text" placeholder="Search for..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ti-close"></i></button></span>
          </div>
        </form>
      </div><a href="index.php" class="brand pull-left"><i class="ti-underline"></i>
        <h2>MEGA<span>app</span></h2></a><a href="javascript:;" role="button" class="hamburger-menu pull-left"><span></span></a>
      <form class="search-form pull-left hidden-xs">
        <div class="form-group has-feedback mb-0">
          <input type="text" aria-describedby="inputSearchFor" placeholder="Search for..." style="width: 200px" class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputSearchFor" class="sr-only">(default)</span>
        </div>
      </form>
      <ul class="notification-bar list-inline pull-right">
        <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search"></i></a></li>
        <li class="visible-lg"><a href="javascript:;" role="button" class="header-icon sidebar-control"><i class="ti-pin-alt"></i></a></li>
        <li class="dropdown"><a id="dropdownMenu1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-world"></i><span class="badge bg-danger">6</span></a>
          <div aria-labelledby="dropdownMenu1" class="dropdown-menu dropdown-menu-right dm-medium fs-12 animated fadeInDown">
            <h5 class="dropdown-header">You have 6 notifications</h5>
            <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/17.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">William Carlson</h6>
                    <p class="text-muted mb-0">Commented on your post</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">5 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/19.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Barbara Ortega</h6>
                    <p class="text-muted mb-0">Sent you a new email</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">8 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Mark Barnett</h6>
                    <p class="text-muted mb-0">Sent you a new message</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11">9 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Alexander Gilbert</h6>
                    <p class="text-muted mb-0">Sent you a new email</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">15 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/12.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Amanda Collins</h6>
                    <p class="text-muted mb-0">You have 8 unread messages</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:35:35+07:00" class="fs-11">22 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/13.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Christian Lane</h6>
                    <p class="text-muted mb-0">Commented on your post</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">30 mins</time>
                  </div></a></li>
            </ul>
            <div class="dropdown-footer text-center p-10"><a href="javascript:;" class="fw-500 text-muted">See all notifications</a></div>
          </div>
        </li>
        <li><a href="javascript:;" role="button" class="right-sidebar-toggle bubble header-icon"><i class="ti-layout-sidebar-right"></i><span class="dot bg-danger"></span></a></li>
        <li><a href="login.php" role="button" class="header-icon"><i class="ti-power-off"></i></a></li>
      </ul>
    </header>
    <!-- Header end-->
    <div class="main-container">
      <!-- Main Sidebar start-->
      <aside data-mcs-theme="minimal-dark" style="background-image: url(build/images/backgrounds/11.jpg)" class="main-sidebar mCustomScrollbar">
        <div class="user">
          <div id="esp-user-profile" data-percent="65" style="height: 130px; width: 130px; line-height: 100px; padding: 15px;" class="easy-pie-chart"><img src="build/images/users/04.jpg" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
          <h4 class="fs-16 text-muted mt-15 mb-5 fw-300">Matthew Gonzalez</h4>
          <p class="mb-0 text-muted">Designer</p>
        </div>
        <ul class="list-unstyled navigation mb-0">
          <li class="sidebar-header pt-0">Main</li>
          <li><a href="index.php" class="bubble"><i class="ti-home"></i> Dashboard<span class="badge bg-danger">3</span></a></li>
          <li><a href="widgets.php"><i class="ti-panel"></i> Widgets <span class="label label-outline label-danger">New</span></a></li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed"><i class="ti-shopping-cart"></i> E-commerce</a>
            <ul id="collapse2" class="list-unstyled collapse">
              <li><a href="product-list.php">Product list</a></li>
              <li><a href="edit-product.php">Edit product</a></li>
              <li><a href="order-list.php">Order list</a></li>
              <li><a href="edit-order.php">Edit order</a></li>
              <li><a href="customer-list.php">Customer list</a></li>
              <li><a href="edit-customer.php">Edit customer</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-paint-bucket"></i> Color system</a>
            <ul id="collapse3" class="list-unstyled collapse">
              <li><a href="green-system.php">Green</a></li>
              <li><a href="blue-system.php">Blue</a></li>
              <li><a href="purple-system.php">Purple</a></li>
              <li><a href="red-system.php">Red</a></li>
              <li><a href="yellow-system.php">Yellow</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed"><i class="ti-brush-alt"></i> Skins</a>
            <ul id="collapse4" class="list-unstyled collapse">
              <li><a href="green-dashboard.php">Green</a></li>
              <li><a href="blue-dashboard.php">Blue</a></li>
              <li><a href="purple-dashboard.php">Purple</a></li>
              <li><a href="red-dashboard.php">Red</a></li>
              <li><a href="yellow-dashboard.php">Yellow</a></li>
            </ul>
          </li>
          <li class="sidebar-header">Components</li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed"><i class="ti-receipt"></i> Basic</a>
            <ul id="collapse5" class="list-unstyled collapse">
              <li><a href="buttons.php">Buttons</a></li>
              <li><a href="carousels.php">Carousels</a></li>
              <li><a href="containers.php">Containers</a></li>
              <li><a href="dialogs.php">Dialogs</a></li>
              <li><a href="basic-inputs.php">Inputs</a></li>
              <li><a href="navigations.php">Navigations</a></li>
              <li><a href="progress-bars.php">Progress bars</a></li>
              <li><a href="typography.php">Typography</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse6" aria-expanded="true" aria-controls="collapse6" class="active"><i class="ti-ruler-pencil"></i> Editors</a>
            <ul id="collapse6" class="list-unstyled collapse in">
              <li><a href="summernote.php" class="active">Summernote</a></li>
              <li><a href="bootstrap-markdown.php">Bootstrap markdown</a></li>
              <li><a href="code-prettify.php">Code prettify</a></li>
              <li><a href="ckeditor.php">CKEditor</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed"><i class="ti-location-arrow"></i> Pickers</a>
            <ul id="collapse7" class="list-unstyled collapse">
              <li><a href="color-picker.php">Color picker</a></li>
              <li><a href="datetime-picker.php">Datetime picker</a></li>
              <li><a href="clock-picker.php">Clock picker</a></li>
              <li><a href="date-range-picker.php">Date range picker</a></li>
              <li><a href="multi-select.php">Multi select</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed"><i class="ti-layers-alt"></i> Forms</a>
            <ul id="collapse8" class="list-unstyled collapse">
              <li><a href="form-layouts.php">Layouts</a></li>
              <li><a href="jquery-validation.php">Validation</a></li>
              <li><a href="jquery-steps.php">Wizard</a></li>
              <li><a href="other-plugins.php">Other plugins</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse9" aria-expanded="false" aria-controls="collapse9" class="collapsed"><i class="ti-face-smile"></i> Icons</a>
            <ul id="collapse9" class="list-unstyled collapse">
              <li><a href="glyphicons.php">Glyphicons</a></li>
              <li><a href="font-awesome.php">Font awesome</a></li>
              <li><a href="material-design.php">Material design</a></li>
              <li><a href="themify.php">Themify</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse10" aria-expanded="false" aria-controls="collapse10" class="collapsed"><i class="ti-layout-grid2"></i> Tables</a>
            <ul id="collapse10" class="list-unstyled collapse">
              <li><a href="basic-tables.php">Basic tables</a></li>
              <li><a href="data-tables.php">Data tables</a></li>
              <li><a href="pricing-tables.php">Pricing tables</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse11" aria-expanded="false" aria-controls="collapse11" class="collapsed"><i class="ti-control-forward"></i> Animations</a>
            <ul id="collapse11" class="list-unstyled collapse">
              <li><a href="basic-animations.php">Basic</a></li>
              <li><a href="loading-animations.php">Loading</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse12" aria-expanded="false" aria-controls="collapse12" class="collapsed"><i class="ti-upload"></i> File uploads</a>
            <ul id="collapse12" class="list-unstyled collapse">
              <li><a href="dropzone-js.php">Dropzone</a></li>
              <li><a href="bootstrap-file-input.php">Bootstrap file input</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse13" aria-expanded="false" aria-controls="collapse13" class="collapsed"><i class="ti-info-alt"></i> Indicators</a>
            <ul id="collapse13" class="list-unstyled collapse">
              <li><a href="toastr.php">Toastr</a></li>
              <li><a href="sweet-alert.php">Sweet alert</a></li>
            </ul>
          </li>
          <li class="sidebar-header">Data visualization</li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse14" aria-expanded="false" aria-controls="collapse14" class="collapsed"><i class="ti-bar-chart"></i> Charts</a>
            <ul id="collapse14" class="list-unstyled collapse">
              <li><a href="flot-charts.php">Flot charts</a></li>
              <li><a href="morris-charts.php">Morris charts</a></li>
              <li><a href="chart-js.php">Chart.js</a></li>
              <li><a href="other-charts.php">Other charts</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse15" aria-expanded="false" aria-controls="collapse15" class="collapsed"><i class="ti-location-pin"></i> Maps</a>
            <ul id="collapse15" class="list-unstyled collapse">
              <li><a href="vector-maps.php">Vector maps</a></li>
              <li><a href="google-maps.php">Google maps</a></li>
            </ul>
          </li>
          <li class="sidebar-header">Page kits</li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse16" aria-expanded="false" aria-controls="collapse16" class="collapsed"><i class="ti-alert"></i> Error pages</a>
            <ul id="collapse16" class="list-unstyled collapse">
              <li><a href="400.php">400</a></li>
              <li><a href="401.php">401</a></li>
              <li><a href="403.php">403</a></li>
              <li><a href="404.php">404</a></li>
              <li><a href="500.php">500</a></li>
              <li><a href="503.php">503</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse17" aria-expanded="false" aria-controls="collapse17" class="collapsed"><i class="ti-user"></i> User pages</a>
            <ul id="collapse17" class="list-unstyled collapse">
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Registration</a></li>
              <li><a href="forgot.php">Forgot password</a></li>
              <li><a href="lock-screen.php">Lock screen</a></li>
              <li><a href="profile.php">Profile</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse18" aria-expanded="false" aria-controls="collapse18" class="collapsed"><i class="ti-panel"></i> Apps</a>
            <ul id="collapse18" class="list-unstyled collapse">
              <li><a href="mailbox.php">Mailbox</a></li>
              <li><a href="calendar.php">Calendar</a></li>
              <li><a href="image-cropper.php">Image cropper</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse19" aria-expanded="false" aria-controls="collapse19" class="collapsed"><i class="ti-blackboard"></i> Extra pages</a>
            <ul id="collapse19" class="list-unstyled collapse">
              <li><a href="invoice.php">Invoice</a></li>
              <li><a href="search-results.php">Search results</a></li>
              <li><a href="blank-template.php">Blank template</a></li>
            </ul>
          </li>
          <li class="sidebar-header">Help</li>
          <li><a href="documentation.php"><i class="ti-help-alt"></i> Documentation</a></li>
          <li class="sidebar-header">Menu Levels</li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse20" aria-expanded="false" aria-controls="collapse20" class="collapsed"><i class="ti-folder"></i> Menu levels</a>
            <ul id="collapse20" class="list-unstyled collapse">
              <li><a href="#">Menu level 2.1</a></li>
              <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse20" href="#collapse22" aria-expanded="false" aria-controls="collapse22" class="collapsed">Menu level 2.2</a>
                <ul id="collapse22" class="list-unstyled collapse">
                  <li><a href="#">Menu level 3.1</a></li>
                  <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse22" href="#collapse32" aria-expanded="false" aria-controls="collapse32" class="collapsed">Menu level 3.2</a>
                    <ul id="collapse32" class="list-unstyled collapse">
                      <li><a href="#">Menu level 4.1</a></li>
                      <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse32" href="#collapse42" aria-expanded="false" aria-controls="collapse42" class="collapsed">Menu level 4.2</a>
                        <ul id="collapse42" class="list-unstyled collapse">
                          <li><a href="#">Menu level 5.1</a></li>
                          <li><a href="#">Menu level 5.2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <div class="sidebar-header">Server Status</div>
        <ul class="list-unstyled pl-25 pr-25">
          <li class="mb-20">
            <div class="block clearfix mb-10"><span class="pull-left fs-12 text-muted">CPU Used</span><span class="pull-right label label-outline label-warning">65%</span></div>
            <div class="progress progress-xs mb-0">
              <div role="progressbar" data-transitiongoal="65" class="progress-bar progress-bar-warning"></div>
            </div>
          </li>
          <li class="mb-20">
            <div class="block clearfix mb-10"><span class="pull-left fs-12 text-muted">Bandwidth</span><span class="pull-right label label-outline label-danger">80%</span></div>
            <div class="progress progress-xs mb-0">
              <div role="progressbar" data-transitiongoal="80" class="progress-bar progress-bar-danger"></div>
            </div>
          </li>
        </ul>
      </aside>
      <!-- Main Sidebar end-->
      <div class="page-container">
        <div class="page-header clearfix">
          <div class="pull-left">
            <h4 class="mt-0 mb-5">Summernote</h4>
            <ol class="breadcrumb mb-0">
              <li><a href="#">Umega</a></li>
              <li><a href="#">Editors</a></li>
              <li class="active">Summernote</li>
            </ol>
          </div>
          <div class="pull-right">
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-outline"><img src="build/images/flags/us.jpg" alt="" class="flag-icon">English</button>
              <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-outline dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
              <ul class="dropdown-menu dropdown-menu-right animated fadeInDown">
                <li><a href="#"><img src="build/images/flags/de.jpg" alt="" class="flag-icon">German</a></li>
                <li><a href="#"><img src="build/images/flags/fr.jpg" alt="" class="flag-icon">French</a></li>
                <li><a href="#"><img src="build/images/flags/es.jpg" alt="" class="flag-icon">Spanish</a></li>
                <li><a href="#"><img src="build/images/flags/it.jpg" alt="" class="flag-icon">Italian</a></li>
                <li><a href="#"><img src="build/images/flags/jp.jpg" alt="" class="flag-icon">Japanese</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="page-content container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="widget">
                <div class="widget-heading">
                  <h3 class="widget-title">Basic</h3>
                </div>
                <div class="widget-body">
                  <div id="summernote-1">
                    <h1><img alt="Saturn V carrying Apollo 11" src="../../../c.cksource.com/a/1/img/sample.jpg" class="ml-20 pull-right"> Apollo 11</h1>
                    <p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>
                    <p>Armstrong spent about 
                      <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5 kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.
                    </p>
                    <h2>Broadcasting and <em>quotes</em><a id="quotes" name="quotes"></a></h2>
                    <p>Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:</p>
                    <blockquote>
                      <p>One small step for [a] man, one giant leap for mankind.</p>
                    </blockquote>
                    <p>Apollo 11 effectively ended the <a href="http://en.wikipedia.org/wiki/Space_Race">Space Race</a> and fulfilled a national goal proposed in 1961 by the late U.S. President <a href="http://en.wikipedia.org/wiki/John_F._Kennedy">John F. Kennedy</a> in a speech before the United States Congress:</p>
                    <blockquote>
                      <p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>
                    </blockquote>
                    <h2>Technical details <a id="tech-details" name="tech-details"></a></h2>
                    <table class="table table-bordered">
                      <caption><strong>Mission crew</strong></caption>
                      <thead>
                        <tr>
                          <th scope="col">Position</th>
                          <th scope="col">Astronaut</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Commander</td>
                          <td>Neil A. Armstrong</td>
                        </tr>
                        <tr>
                          <td>Command Module Pilot</td>
                          <td>Michael Collins</td>
                        </tr>
                        <tr>
                          <td>Lunar Module Pilot</td>
                          <td>Edwin "Buzz" E. Aldrin, Jr.</td>
                        </tr>
                      </tbody>
                    </table>
                    <p>Launched by a <strong>Saturn V</strong> rocket from <a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="http://en.wikipedia.org/wiki/NASA">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
                    <ol>
                      <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
                      <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
                      <li><strong>Lunar Module</strong> for landing on the Moon.</li>
                    </ol>
                    <p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="http://en.wikipedia.org/wiki/Pacific_Ocean">Pacific Ocean</a> on July 24.</p>
                    <hr>
                    <p><small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <div class="widget-heading">
                  <h3 class="widget-title">Air Mode</h3>
                </div>
                <div class="widget-body">
                  <div id="summernote-2">
                    <h1><img alt="Saturn V carrying Apollo 11" src="../../../c.cksource.com/a/1/img/sample.jpg" class="ml-20 pull-right"> Apollo 11</h1>
                    <p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>
                    <p>Armstrong spent about 
                      <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5 kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.
                    </p>
                    <h2>Broadcasting and <em>quotes</em><a id="quotes" name="quotes"></a></h2>
                    <p>Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:</p>
                    <blockquote>
                      <p>One small step for [a] man, one giant leap for mankind.</p>
                    </blockquote>
                    <p>Apollo 11 effectively ended the <a href="http://en.wikipedia.org/wiki/Space_Race">Space Race</a> and fulfilled a national goal proposed in 1961 by the late U.S. President <a href="http://en.wikipedia.org/wiki/John_F._Kennedy">John F. Kennedy</a> in a speech before the United States Congress:</p>
                    <blockquote>
                      <p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>
                    </blockquote>
                    <h2>Technical details <a id="tech-details" name="tech-details"></a></h2>
                    <table class="table table-bordered">
                      <caption><strong>Mission crew</strong></caption>
                      <thead>
                        <tr>
                          <th scope="col">Position</th>
                          <th scope="col">Astronaut</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Commander</td>
                          <td>Neil A. Armstrong</td>
                        </tr>
                        <tr>
                          <td>Command Module Pilot</td>
                          <td>Michael Collins</td>
                        </tr>
                        <tr>
                          <td>Lunar Module Pilot</td>
                          <td>Edwin "Buzz" E. Aldrin, Jr.</td>
                        </tr>
                      </tbody>
                    </table>
                    <p>Launched by a <strong>Saturn V</strong> rocket from <a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="http://en.wikipedia.org/wiki/NASA">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
                    <ol>
                      <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
                      <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
                      <li><strong>Lunar Module</strong> for landing on the Moon.</li>
                    </ol>
                    <p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="http://en.wikipedia.org/wiki/Pacific_Ocean">Pacific Ocean</a> on July 24.</p>
                    <hr>
                    <p><small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <div class="widget-heading">
                  <h3 class="widget-title">Click To Edit</h3>
                </div>
                <div class="widget-body">
                  <div class="btn-demo">
                    <button id="edit" onclick="edit()" type="button" class="btn btn-raised btn-primary">Edit</button>
                    <button id="save" onclick="save()" type="button" class="btn btn-raised btn-success">Save</button>
                  </div>
                  <div id="summernote-3">
                    <h1><img alt="Saturn V carrying Apollo 11" src="../../../c.cksource.com/a/1/img/sample.jpg" class="ml-20 pull-right"> Apollo 11</h1>
                    <p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>
                    <p>Armstrong spent about 
                      <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5 kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.
                    </p>
                    <h2>Broadcasting and <em>quotes</em><a id="quotes" name="quotes"></a></h2>
                    <p>Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:</p>
                    <blockquote>
                      <p>One small step for [a] man, one giant leap for mankind.</p>
                    </blockquote>
                    <p>Apollo 11 effectively ended the <a href="http://en.wikipedia.org/wiki/Space_Race">Space Race</a> and fulfilled a national goal proposed in 1961 by the late U.S. President <a href="http://en.wikipedia.org/wiki/John_F._Kennedy">John F. Kennedy</a> in a speech before the United States Congress:</p>
                    <blockquote>
                      <p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>
                    </blockquote>
                    <h2>Technical details <a id="tech-details" name="tech-details"></a></h2>
                    <table class="table table-bordered">
                      <caption><strong>Mission crew</strong></caption>
                      <thead>
                        <tr>
                          <th scope="col">Position</th>
                          <th scope="col">Astronaut</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Commander</td>
                          <td>Neil A. Armstrong</td>
                        </tr>
                        <tr>
                          <td>Command Module Pilot</td>
                          <td>Michael Collins</td>
                        </tr>
                        <tr>
                          <td>Lunar Module Pilot</td>
                          <td>Edwin "Buzz" E. Aldrin, Jr.</td>
                        </tr>
                      </tbody>
                    </table>
                    <p>Launched by a <strong>Saturn V</strong> rocket from <a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="http://en.wikipedia.org/wiki/NASA">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
                    <ol>
                      <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
                      <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
                      <li><strong>Lunar Module</strong> for landing on the Moon.</li>
                    </ol>
                    <p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="http://en.wikipedia.org/wiki/Pacific_Ocean">Pacific Ocean</a> on July 24.</p>
                    <hr>
                    <p><small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right Sidebar start-->
      <aside class="right-sidebar closed">
        <ul role="tablist" class="nav nav-tabs nav-justified nav-sidebar">
          <li role="presentation" class="active"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab"><i class="ti-comment-alt"></i></a></li>
          <li role="presentation"><a href="#announcement" aria-controls="announcement" role="tab" data-toggle="tab"><i class="ti-announcement"></i></a></li>
          <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab"><i class="ti-panel"></i></a></li>
        </ul>
        <div data-mcs-theme="minimal-dark" class="tab-content nav-sidebar-content mCustomScrollbar">
          <div id="chat" role="tabpanel" class="tab-pane fade in active">
            <form>
              <div class="form-group has-feedback">
                <input type="text" aria-describedby="inputChatSearch" placeholder="Chat with..." class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputChatSearch" class="sr-only">(default)</span>
              </div>
            </form>
            <ul class="chat-list mb-0 fs-12 media-list">
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="build/images/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Jane Curtis</h6>
                    <p class="text-muted mb-0">Where are you from?</p>
                  </div>
                  <div class="media-right"><span class="badge bg-danger">2</span></div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="build/images/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Edward Garcia</h6>
                    <p class="text-muted mb-0">Nice to meet you.</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Bruce Olson</h6>
                    <p class="text-muted mb-0">What do you want to do?</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="build/images/users/03.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Martha Rodriguez</h6>
                    <p class="text-muted mb-0">I'm hungry.</p>
                  </div>
                  <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="build/images/users/05.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Hannah Williamson</h6>
                    <p class="text-muted mb-0">Do you know the address?</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="build/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Anthony Mills</h6>
                    <p class="text-muted mb-0">No problem.</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="build/images/users/07.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Ethan Stanley</h6>
                    <p class="text-muted mb-0">Hello?</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="build/images/users/08.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Jonathan Castro</h6>
                    <p class="text-muted mb-0">OK. Thanks.</p>
                  </div>
                  <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="build/images/users/09.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Denise Rose</h6>
                    <p class="text-muted mb-0">Bye bye.</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="build/images/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Eugene Meyer</h6>
                    <p class="text-muted mb-0">How are you?</p>
                  </div></a></li>
            </ul>
          </div>
          <div id="announcement" role="tabpanel" class="tab-pane fade">
            <ul class="media-list mb-0 fs-12">
              <li class="media">
                <div class="media-left"><i class="ti-bar-chart-alt media-object mo-sm img-circle bg-primary text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">Market Trend Data</h6>
                  <p class="text-muted mb-0">Mattis nam fringilla dui nostra, ad fames fusce venenatis massa.</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left"><i class="ti-package media-object mo-sm img-circle bg-success text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">Change Your Password!</h6>
                  <p class="text-muted mb-0">Varius dolor condimentum hendrerit eleifend est urna neque fames faucibus?</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left"><i class="ti-gift media-object mo-sm img-circle bg-warning text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">We Apologize</h6>
                  <p class="text-muted mb-0">Justo at mauris ridiculus conubia penatibus dis varius proin porttitor!</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left"><i class="ti-harddrives media-object mo-sm img-circle bg-info text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">Content Policy Update</h6>
                  <p class="text-muted mb-0">Quis ante imperdiet a volutpat quam tellus condimentum blandit elementum.</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left"><i class="ti-mobile media-object mo-sm img-circle bg-purple text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">Mobile Apps</h6>
                  <p class="text-muted mb-0">Ad iaculis at feugiat integer lobortis vivamus hac egestas venenatis.</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left"><i class="ti-alarm-clock media-object mo-sm img-circle bg-danger text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">New Features</h6>
                  <p class="text-muted mb-0">Primis elementum facilisi tristique faucibus feugiat enim rutrum id himenaeos.</p>
                </div>
              </li>
            </ul>
          </div>
          <div id="setting" role="tabpanel" class="tab-pane fade">
            <form class="form-horizontal fs-12">
              <div class="clearfix">
                <h6 class="pull-left">Maintenance Mode</h6>
                <div class="switch pull-right">
                  <input id="setting-1" type="checkbox" checked="">
                  <label for="setting-1" class="switch-success"></label>
                </div>
              </div>
              <p class="text-muted">Ipsum non tempor non nullam nisi congue nisi amet enim.</p>
              <div class="clearfix">
                <h6 class="pull-left">Location Services</h6>
                <div class="switch pull-right">
                  <input id="setting-2" type="checkbox" checked="">
                  <label for="setting-2" class="switch-success"></label>
                </div>
              </div>
              <p class="text-muted">Eleifend suscipit erat cursus viverra commodo nostra sit commodo mollis.</p>
              <div class="clearfix">
                <h6 class="pull-left">Display Errors</h6>
                <div class="switch pull-right">
                  <input id="setting-3" type="checkbox" checked="">
                  <label for="setting-3" class="switch-success"></label>
                </div>
              </div>
              <p class="text-muted">Amet per tortor adipiscing risus dolor orci diam curabitur senectus.</p>
              <div class="clearfix">
                <h6 class="pull-left">Use SEO URLs</h6>
                <div class="switch pull-right">
                  <input id="setting-4" type="checkbox" checked="">
                  <label for="setting-4" class="switch-success"></label>
                </div>
              </div>
              <p class="text-muted">Ullamcorper dignissim facilisis fames proin a leo diam amet urna.</p>
              <div class="clearfix">
                <h6 class="pull-left">Enable History</h6>
                <div class="switch pull-right">
                  <input id="setting-5" type="checkbox" checked="">
                  <label for="setting-5" class="switch-success"></label>
                </div>
              </div>
              <p class="text-muted">Consectetur cubilia varius vulputate fermentum non dolor cubilia torquent risus.</p>
            </form>
          </div>
        </div>
      </aside>
      <aside class="conversation closed">
        <h5 class="text-center m-0 p-20">Edward Garcia<a href="javascript:;" class="conversation-toggle pull-left"><i class="ti-arrow-left text-muted"></i></a><a href="javascript:;" class="pull-right"><i class="ti-pencil text-muted"></i></a></h5>
        <ul data-mcs-theme="minimal-dark" class="media-list chat-content fs-12 pl-20 pr-20 mCustomScrollbar">
          <li class="media">
            <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>Hello.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:45 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
          <li class="media other">
            <div class="media-body">
              <p>Hi.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:46 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>How are you?</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:47 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
          <li class="media other">
            <div class="media-body">
              <p>I'm good. How are you?</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:50 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>Good. Do you speak English?</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:55 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
          <li class="media other">
            <div class="media-body">
              <p>A little. Are you American?</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:56 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>Yes.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:00 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
          <li class="media other">
            <div class="media-body">
              <p>Where are you from?</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:01 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>I'm from California.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:03 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
          <li class="media other">
            <div class="media-body">
              <p>Nice to meet you.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:04 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>Nice to meet you too.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:05 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
        </ul>
        <form class="pl-20 pr-20">
          <div class="form-group has-feedback mb-0">
            <input type="text" aria-describedby="inputSendMessage" placeholder="Sent a message" class="form-control rounded"><span aria-hidden="true" class="ti-pencil-alt form-control-feedback"></span><span id="inputSendMessage" class="sr-only">(default)</span>
          </div>
        </form>
      </aside>
      <!-- Right Sidebar end-->
    </div>
    <!-- Demo Settings start-->
    <div class="setting closed"><a href="javascript:;" class="setting-toggle fs-16"><i class="ti-palette text-muted"></i></a>
      <h5 class="fs-16 mt-0 mb-20">Header Colors</h5>
      <ul class="list-inline">
        <li><a href="javascript:;" data-color="header-primary" class="mo-xs bg-primary inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-green" class="mo-xs bg-success inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-purple" class="mo-xs bg-purple inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-yellow" class="mo-xs bg-warning inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-red" class="mo-xs bg-danger inline-block img-circle header-color"></a></li>
      </ul>
      <h5 class="fs-16 mt-0 mb-20">Sidebar Style</h5>
      <ul class="list-inline">
        <li><a href="javascript:;" data-color="sidebar-dark" class="sidebar-color mo-xs bg-black inline-block img-circle"></a></li>
        <li><a href="javascript:;" data-color="sidebar-light" class="sidebar-color mo-xs bg-default inline-block img-circle"></a></li>
      </ul>
      <form class="form-horizontal mb-20">
        <div class="clearfix">
          <p class="form-control-static pull-left">Background Image</p>
          <div class="switch pull-right">
            <input id="sidebar-bg" type="checkbox" checked="">
            <label for="sidebar-bg" class="switch-success"></label>
          </div>
        </div>
      </form>
      <ul class="list-inline mb-0">
        <li><a href="javascript:;" data-bg="10.jpg" class="inline-block sidebar-bg"><img src="build/images/thumbnails/10.jpg" width="60" alt="" class="img-rounded"></a></li>
        <li><a href="javascript:;" data-bg="11.jpg" class="inline-block sidebar-bg"><img src="build/images/thumbnails/11.jpg" width="60" alt="" class="img-rounded"></a></li>
        <li><a href="javascript:;" data-bg="12.jpg" class="inline-block sidebar-bg"><img src="build/images/thumbnails/12.jpg" width="60" alt="" class="img-rounded"></a></li>
      </ul>
    </div>
    <!-- Demo Settings end-->
    <!-- jQuery-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Malihu Scrollbar-->
    <script type="text/javascript" src="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Animo.js-->
    <script type="text/javascript" src="plugins/animo.js/animo.min.js"></script>
    <!-- Bootstrap Progressbar-->
    <script type="text/javascript" src="plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- jQuery Easy Pie Chart-->
    <script type="text/javascript" src="plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- Summernote-->
    <script type="text/javascript" src="plugins/summernote/dist/summernote.min.js"></script>
    <!-- Codemirror-->
    <script type="text/javascript" src="plugins/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="plugins/codemirror/mode/xml/xml.js"></script>
    <script type="text/javascript" src="plugins/formatting/index.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="build/js/first-layout/app.js"></script>
    <script type="text/javascript" src="build/js/first-layout/demo.js"></script>
    <script type="text/javascript" src="build/js/page-content/editors/summernote.js"></script>
  </body>

<!-- Mirrored from umega.lethemes.net/1.4.1/first-layout/summernote.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 May 2016 11:29:42 GMT -->
</html>