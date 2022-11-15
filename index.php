<?php
require 'function.php';
$selct = new Select();
if(isset($_SESSION["id"])){
    $user = $selct->selectUserById($_SESSION["id"]);
}
else{
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Meet pages - The simplest and fastest way to build web UI for your dashboard or app." name="description" />
    <meta content="Ace" name="author" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/css/dashboard.widgets.css" rel="stylesheet" type="text/css" media="screen" />
    <link class="main-stylesheet" href="pages/css/themes/modern.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header horizontal-menu horizontal-app-menu dashboard">
    <!-- START PAGE-CONTAINER -->
    <div class="header p-r-0 bg-primary">
      <div class="header-inner header-md-height">
        <a href="#" class="btn-link toggle-sidebar d-lg-none text-white sm-p-l-0 btn-icon-link" data-toggle="horizontal-menu">
          <i class="pg-icon">menu</i>
        </a>
        <div class="">
          <div class="brand inline no-border d-sm-inline-block">
            <img src="assets/img/logo_white.png" alt="logo" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
          </div>
          <!-- START NOTIFICATION LIST -->
          <ul class="d-lg-inline-block d-none  notification-list no-margin b-grey b-l b-r no-style p-l-30 p-r-20">
            <li class="p-r-10 inline">
              <div class="dropdown">
                <a href="javascript:;" id="notification-center" class="header-icon btn-icon-link" data-toggle="dropdown">
                  <i class="pg-icon">world</i>
                  <span class="bubble"></span>
                </a>
                <!-- START Notification Dropdown -->
                <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                  <!-- START Notification -->
                  <div class="notification-panel">
                    <!-- START Notification Body-->
                    <div class="notification-body scrollable">
                      <!-- START Notification Item-->
                      <div class="notification-item unread clearfix">
                        <!-- START Notification Item-->
                        <div class="heading open">
                          <a href="#" class="text-complete pull-left d-flex align-items-center">
                            <i class="pg-icon m-r-10">map</i>
                            <span class="bold">Carrot Design</span>
                            <span class="fs-12 m-l-10">David Nester</span>
                          </a>
                          <div class="pull-right">
                            <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                              <div><i class="pg-icon">chevron_down</i>
                              </div>
                            </div>
                            <span class=" time">few sec ago</span>
                          </div>
                          <div class="more-details">
                            <div class="more-details-inner">
                              <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
																															distinguishes between <br>
																															A leader and a follower.”</h5>
                              <p class="small hint-text">
                                Commented on john Smiths wall.
                                <br> via pages framework.
                              </p>
                            </div>
                          </div>
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item Right Side-->
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- START Notification Body-->
                      <!-- START Notification Item-->
                      <div class="notification-item  clearfix">
                        <div class="heading">
                          <a href="#" class="text-danger pull-left">
                            <i class="pg-icon m-r-10">alert_warning</i>
                            <span class="bold">98% Server Load</span>
                            <span class="fs-12 m-l-10">Take Action</span>
                          </a>
                          <span class="pull-right time">2 mins ago</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                      <!-- START Notification Item-->
                      <div class="notification-item  clearfix">
                        <div class="heading">
                          <a href="#" class="text-warning pull-left">
                            <i class="pg-icon m-r-10">alert_warning</i>
                            <span class="bold">Warning Notification</span>
                            <span class="fs-12 m-l-10">Buy Now</span>
                          </a>
                          <span class="pull-right time">yesterday</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                      <!-- START Notification Item-->
                      <div class="notification-item unread clearfix">
                        <div class="heading">
                          <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                            <img width="30" height="30" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg">
                          </div>
                          <a href="#" class="text-complete pull-left">
                            <span class="bold">Revox Design Labs</span>
                            <span class="fs-12 m-l-10">Owners</span>
                          </a>
                          <span class="pull-right time">11:00pm</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                    </div>
                    <!-- END Notification Body-->
                    <!-- START Notification Footer-->
                    <div class="notification-footer text-center">
                      <a href="#" class="">Read all notifications</a>
                      <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                        <i class="pg-refresh_new"></i>
                      </a>
                    </div>
                    <!-- START Notification Footer-->
                  </div>
                  <!-- END Notification -->
                </div>
                <!-- END Notification Dropdown -->
              </div>
            </li>
            <li class="p-r-10 inline">
              <a href="#" class="header-icon btn-icon-link">
                <i class="pg-icon">link_alt</i>
              </a>
            </li>
            <li class="p-r-10 inline">
              <a href="#" class="header-icon btn-icon-link">
                <i class="pg-icon">grid_alt</i>
              </a>
            </li>
          </ul>
          <!-- END NOTIFICATIONS LIST -->
          <a href="#" class="search-link d-lg-inline-block d-none" data-toggle="search"><i class="pg-icon">search</i>Type
				anywhere to <span class="bold">search</span></a>
        </div>
        <div class="d-flex align-items-center">
          <!-- START User Info-->
          <div class="pull-left p-r-10 fs-14 d-lg-inline-block d-none text-white">
            <span class="semi-bold"><?php echo $user['fname'];?></span>
          </div>
          <div class="dropdown pull-right d-lg-block">
            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="profile dropdown">
              <span class="thumbnail-wrapper d32 circular inline">
						<img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg"
							data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
					</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
              <a href="#" class="dropdown-item"><span>Signed in as <br /><b>David Aunsberg</b></span></a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">Your Profile</a>
              <a href="#" class="dropdown-item">Your Activity</a>
              <a href="#" class="dropdown-item">Your Archive</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">Features</a>
              <a href="#" class="dropdown-item">Help</a>
              <a href="#" class="dropdown-item">Settings</a>
              <a href="logout.php" class="dropdown-item">Logout</a>
              <div class="dropdown-divider"></div>
              <span class="dropdown-item fs-12 hint-text">Last edited by David<br />on Friday at 5:27PM</span>
            </div>
          </div>
          <!-- END User Info-->
          <a href="#" class="header-icon m-l-10 sm-no-margin sm-p-r-0 d-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
            <i class="pg-icon btn-icon-link">menu_add</i>
          </a>
        </div>
      </div>
      <div class="bg-white">
        <div class="container">
          <div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
            <a href="#" class="btn-link header-icon toggle-sidebar d-lg-none" data-toggle="horizontal-menu">
              <i class="pg-icon">close</i>
            </a>
            <ul>
              <li class=" active">
                <a href="index.html">Dashboard</a>
              </li>
              <li>
                <a href="social.html"><span class="title">Social</span></a>
              </li>
              <li>
                <a href="javascript:;"><span class="title">Calendar</span>
            <span class=" arrow"></span></a>
                <ul class="">
                  <li class="">
                    <a href="calendar.html">Basic</a>
                  </li>
                  <li class="">
                    <a href="calendar_lang.html">Languages</a>
                  </li>
                  <li class="">
                    <a href="calendar_month.html">Month</a>
                  </li>
                  <li class="">
                    <a href="calendar_lazy.html">Lazy load</a>
                  </li>
                  <li class="">
                    <a href="https://docs.pages.revox.io/apps/calendar" rel="noreferrer" target="_blank">Documentation</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:;"><span class="title">UI Elements</span>
            <span class=" arrow"></span></a>
                <ul class="">
                  <li class="">
                    <a href="color.html">Color</a>
                  </li>
                  <li class="">
                    <a href="typography.html">Typography</a>
                  </li>
                  <li class="">
                    <a href="icons.html">Icons</a>
                  </li>
                  <li class="">
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li class="">
                    <a href="notifications.html">Notifications</a>
                  </li>
                  <li class="">
                    <a href="modals.html">Modals</a>
                  </li>
                  <li class="">
                    <a href="progress.html">Progress &amp; Activity</a>
                  </li>
                  <li class="">
                    <a href="tabs_accordian.html">Tabs &amp; Accordions</a>
                  </li>
                  <li class="">
                    <a href="sliders.html">Sliders</a>
                  </li>
                  <li class="">
                    <a href="tree_view.html">Tree View</a>
                  </li>
                  <li class="">
                    <a href="nestables.html">Nestable</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:;">
                  <span class="title">Forms</span>
                  <span class=" arrow"></span>
                </a>
                <ul class="">
                  <li class="">
                    <a href="form_elements.html">Form Elements</a>
                  </li>
                  <li class="">
                    <a href="form_layouts.html">Form Layouts</a>
                  </li>
                  <li class="">
                    <a href="form_wizard.html">Form Wizard</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="builder.html">
                  <span class="title">Builder</span>
                </a>
              </li>
              <li>
                <a href="cards.html">
                  <span class="title">Cards</span>
                </a>
              </li>
              <li>
                <a href="views.html">
                  <span class="title">Views</span>
                </a>
              </li>
              <li>
                <a href="javascript:;"><span class="title">Tables</span>
            <span class=" arrow"></span></a>
                <ul class="">
                  <li class="">
                    <a href="tables.html">Basic Tables</a>
                  </li>
                  <li class="">
                    <a href="datatables.html">Data Tables</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:;"><span class="title">Maps</span>
            <span class=" arrow"></span></a>
                <ul class="">
                  <li class="">
                    <a href="google_map.html">Google Maps</a>
                  </li>
                  <li class="">
                    <a href="vector_map.html">Vector Maps</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="charts.html"><span class="title">Charts</span></a>
              </li>
              <li>
                <a href="javascript:;"><span class="title">Extra</span>
            <span class=" arrow"></span></a>
                <ul class="">
                  <li class="">
                    <a href="invoice.html">Invoice</a>
                  </li>
                  <li class="">
                    <a href="404.html">404 Page</a>
                  </li>
                  <li class="">
                    <a href="500.html">500 Page</a>
                  </li>
                  <li class="">
                    <a href="blank_template.html">Blank Page</a>
                  </li>
                  <li class="">
                    <a href="login.html">Login</a>
                  </li>
                  <li class="">
                    <a href="register.html">Register</a>
                  </li>
                  <li class="">
                    <a href="lock_screen.html">Lockscreen</a>
                  </li>
                  <li class="">
                    <a href="gallery.html">Gallery</a>
                  </li>
                  <li class="">
                    <a href="timeline.html">Timeline</a>
                  </li>
                </ul>
              </li>
            </ul>
            <a href="#" class="search-link d-flex justify-content-between align-items-center d-lg-none" data-toggle="search">Tap here to search <i class="pg-search float-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="page-container ">
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START BREADCRUMBS -->
          <div class="bg-white">
            <div class="container">
              <ol class="breadcrumb breadcrumb-alt">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
          <!-- END BREADCRUMBS -->
          <!-- START CONTAINER FLUID -->
          <div class="container sm-padding-10 p-t-20 p-l-0 p-r-0">
            <!-- START ROW -->
            <div class="row">
              <div class="col-lg-3 col-sm-6 d-flex flex-column">
                <!-- START WIDGET widget_map_sales-->
                <!-- START ITEM -->
                <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                  <div class="card-header ">
                    <h5 class="text-complete pull-left fs-12">News <i
									class="fa fa-circle text-complete fs-11"></i></h5>
                    <div class="pull-right small hint-text">
                      5,345 <i class="fa fa-comment-o"></i>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="card-description">
                    <h3>Ebola outbreak: Clinical drug trials to start next month as death toll mounts</h3>
                  </div>
                  <div class="card-footer clearfix">
                    <div class="pull-left">via <span class="text-complete">CNN</span>
                    </div>
                    <div class="pull-right hint-text">
                      Apr 23
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <!-- END ITEM -->
                <!-- END WIDGET -->
                <!-- START WIDGET widget_weekly_sales_card-->
                <div class="card no-border widget-loader-bar m-b-10">
                  <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                      <div class="col-xs-height col-top">
                        <div class="card-header  top-left top-right">
                          <div class="card-title">
                            <span class="font-montserrat fs-11 all-caps">Weekly Sales <i class="fa fa-chevron-right"></i>
				                        </span>
                          </div>
                          <div class="card-controls">
                            <ul>
                              <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row-xs-height">
                      <div class="col-xs-height col-top">
                        <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                          <h3 class="no-margin p-b-5">$24,000</h3>
                          <span class="small hint-text pull-left">71% of total goal</span>
                          <span class="pull-right small text-primary">$23,000</span>
                        </div>
                      </div>
                    </div>
                    <div class="row-xs-height">
                      <div class="col-xs-height col-bottom">
                        <div class="progress progress-small m-b-0">
                          <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                          <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                          <!-- END BOOTSTRAP PROGRESS -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
                <!-- START WIDGET widget_weekly_sales_card-->
                <div class="card no-border widget-loader-bar m-b-10">
                  <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                      <div class="col-xs-height col-top">
                        <div class="card-header  top-left top-right">
                          <div class="card-title">
                            <span class="font-montserrat fs-11 all-caps">Page Visits <i class="fa fa-chevron-right"></i>
				                        </span>
                          </div>
                          <div class="card-controls">
                            <ul>
                              <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row-xs-height">
                      <div class="col-xs-height col-top">
                        <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                          <h3 class="no-margin p-b-5">423</h3>
                          <span class="small hint-text pull-left">22% higher</span>
                          <span class="pull-right small text-danger">$23,000</span>
                        </div>
                      </div>
                    </div>
                    <div class="row-xs-height">
                      <div class="col-xs-height col-bottom">
                        <div class="progress progress-small m-b-0">
                          <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                          <div class="progress-bar progress-bar-danger" style="width:15%"></div>
                          <!-- END BOOTSTRAP PROGRESS -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
              <div class="col-lg-3 col-sm-6 d-flex flex-column">
                <!-- START ITEM -->
                <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                  <div class="card-header clearfix">
                    <h5 class="text-success pull-left fs-12">Stock Market <i
									class="fa fa-circle text-success fs-11"></i></h5>
                    <div class="pull-right small hint-text">
                      5,345 <i class="fa fa-comment-o"></i>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="card-description">
                    <h5 class='no-margin'>Apple Inc.</h5>
                    <h5 class="small hint-text no-margin">NASDAQ: AAPL - Nov 13 8:37 AM ET</h5>
                    <h3 class="m-b-0">111.25 <span class="text-success"><i class="fa fa-sort-up small text-success"></i> 0.15</span>
							</h3>
                  </div>
                  <div class="card-footer clearfix">
                    <div class="pull-left">by <span class="text-success">John Smith</span>
                    </div>
                    <div class="pull-right hint-text">
                      Apr 23
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <!-- END ITEM -->
                <!-- START ITEM -->
                <div class="card social-card share share-other full-width m-b-10 d-flex flex-1 full-height no-border sm-vh-75" data-social="item">
                  <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                  </div>
                  <div class="card-content flex-1" data-pages-bg-image="assets/img/social_new.jpg">
                    <ul class="buttons ">
                      <li>
                        <a href="#"><i class="fa fa-expand"></i>
									</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart-o"></i>
									</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-description">
                    <p><a href="#">#TBT</a> :D</p>
                  </div>
                  <div class="card-footer clearfix">
                    <div class="time">few seconds ago</div>
                    <ul class="reactions">
                      <li><a href="#">5,345 <i class="fa fa-comment-o"></i></a>
                      </li>
                      <li><a href="#">23K <i class="fa fa-heart-o"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-header clearfix">
                    <div class="user-pic">
                      <img alt="Avatar" width="33" height="33" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar_small2x.jpg">
                    </div>
                    <h5>David Nester</h5>
                    <h6>Shared a link on your wall</h6>
                  </div>
                </div>
                <!-- END ITEM -->
              </div>
              <div class="col-lg-6 m-b-10 d-flex flex-column">
                <!-- START WIDGET widget_tableRankings-->
                <div class="widget-12 card no-border widget-loader-circle no-margin col ar-1-1 sm-vh-75">
                  <div class="row">
                    <div class="col-xlg-8 ">
                      <div class="card-header pull-up top-right ">
                        <div class="card-controls">
                          <ul>
                            <li class="hidden-xlg">
                              <div class="dropdown">
                                <a data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  <i class="portlet-icon portlet-icon-settings"></i>
                                </a>
                                <ul class="dropdown-menu pull-right" role="menu">
                                  <li><a href="#">AAPL</a>
                                  </li>
                                  <li><a href="#">YHOO</a>
                                  </li>
                                  <li><a href="#">GOOG</a>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li>
                              <a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex flex-column full-height p-l-10">
                      <div class="d-flex flex-row">
                        <h2 class="">Apple Inc.</h2>
                        <h2 class="m-l-50 text-danger">
										<span class="bold">448.97</span>
										<span class="text-danger fs-12">-318.24</span>
									</h2>
                      </div>
                      <div class="full-width">
                        <ul class="list-inline m-b-0">
                          <li><a href="#" class="font-montserrat text-color">1D</a>
                          </li>
                          <li class="active"><a href="#" class="font-montserrat  bg-master-light text-color">5D</a>
                          </li>
                          <li><a href="#" class="font-montserrat text-color">1M</a>
                          </li>
                          <li><a href="#" class="font-montserrat text-color">1Y</a>
                          </li>
                        </ul>
                      </div>
                      <div class="nvd3-line line-chart text-center flex-1" data-x-grid="false">
                        <svg class="full-height"></svg>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
            </div>
            <!-- END ROW -->
            <!-- START ROW -->
            <div class="row m-b-30">
              <div class="col-lg-7">
                <!-- START ROW -->
                <div class="row">
                  <div class="col-sm-6 sm-p-b-10">
                    <!-- START WIDGET widget_pendingComments.tpl-->
                    <div class=" card   no-margin widget-loader-circle todolist-widget pending-projects-widget">
                      <div class="card-header ">
                        <div class="card-title">
                          <span class="d-flex align-items-center font-montserrat all-caps">
                  Recent projects <i class="pg-icon">chevron_right</i>
              </span>
                        </div>
                        <div class="card-controls">
                          <ul>
                            <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i
        class="card-icon card-icon-refresh"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body">
                        <h5 class="">Ongoing projects at <span class="semi-bold">pages</span></h5>
                        <ul class="nav nav-tabs nav-tabs-simple m-b-20" role="tablist" data-init-reponsive-tabs="collapse">
                          <li class="nav-item"><a href="#pending" class="active" data-toggle="tab" role="tab" aria-expanded="true">Pending</a>
                          </li>
                          <li class="nav-item"><a href="#completed" data-toggle="tab" role="tab" aria-expanded="false">Completed</a>
                          </li>
                        </ul>
                        <div class="tab-content no-padding">
                          <div class="tab-pane active" id="pending">
                            <div class="p-t-10">
                              <div class="d-flex">
                                <span class="icon-thumbnail bg-contrast-low pull-left">kp</span>
                                <div class="flex-1 full-width overflow-ellipsis">
                                  <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Revox Ltd
                                  </p>
                                  <h5 class="no-margin overflow-ellipsis ">Kepler - wordpress builder</h5>
                                </div>
                              </div>
                              <div class="m-t-15">
                                <p class="hint-text small pull-left no-margin">71% completed from total</p>
                                <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                                <div class="clearfix"></div>
                              </div>
                              <div class="progress progress-small m-b-15 m-t-10">
                                <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                <div class="progress-bar progress-bar-info" style="width:71%"></div>
                                <!-- END BOOTSTRAP PROGRESS -->
                              </div>
                            </div>
                            <div class="p-t-15">
                              <div class="d-flex">
                                <span class="icon-thumbnail bg-warning-light pull-left ">cr</span>
                                <div class="flex-1 full-width overflow-ellipsis">
                                  <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Nike Ltd
                                  </p>
                                  <h5 class="no-margin overflow-ellipsis ">Corporate rebranding</h5>
                                </div>
                              </div>
                              <div class="m-t-15">
                                <p class="hint-text small pull-left no-margin">20% completed from total</p>
                                <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                                <div class="clearfix"></div>
                              </div>
                              <div class="progress progress-small m-b-15 m-t-10">
                                <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                <div class="progress-bar progress-bar-warning" style="width:20%"></div>
                                <!-- END BOOTSTRAP PROGRESS -->
                              </div>
                            </div>
                            <a href="#" class="btn btn-block m-t-30">See all projects</a>
                          </div>
                          <div class="tab-pane" id="completed">
                            <div class="p-t-10">
                              <div class="d-flex">
                                <span class="icon-thumbnail bg-contrast-higher pull-left ">ws</span>
                                <div class="flex-1 full-width overflow-ellipsis">
                                  <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Apple Corp
                                  </p>
                                  <h5 class="no-margin overflow-ellipsis ">Marketing Campaign for revox</h5>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                              <div class="m-t-15">
                                <p class="hint-text  small pull-left no-margin">45% completed from total</p>
                                <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                                <div class="clearfix"></div>
                              </div>
                              <div class="progress progress-small m-b-15 m-t-10">
                                <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                <div class="progress-bar progress-bar-info" style="width:45%"></div>
                                <!-- END BOOTSTRAP PROGRESS -->
                              </div>
                            </div>
                            <div class="p-t-15">
                              <div class="d-flex">
                                <span class="icon-thumbnail bg-primary-light pull-left ">cr</span>
                                <div class="flex-1 full-width overflow-ellipsis">
                                  <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Yahoo Inc
                                  </p>
                                  <h5 class="no-margin overflow-ellipsis ">Corporate rebranding</h5>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                              <div class="m-t-15">
                                <p class="hint-text  small pull-left no-margin">20% completed from total</p>
                                <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                                <div class="clearfix"></div>
                              </div>
                              <div class="progress progress-small m-b-15 m-t-10">
                                <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                <div class="progress-bar progress-bar-warning" style="width:20%"></div>
                                <!-- END BOOTSTRAP PROGRESS -->
                              </div>
                            </div>
                            <a href="#" class="btn btn-block m-t-30">See all projects</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END WIDGET -->
                  </div>
                  <div class="col-sm-6 sm-m-t-10 sm-p-b-10 d-flex">
                    <!-- START WIDGET widget_pendingComments.tpl-->
                    <div class=" card no-border  no-margin widget-loader-circle todolist-widget align-self-stretch">
                      <div class="card-header">
                        <div class="card-title">TODOLIST
                        </div>
                        <div class="card-controls">
                          <ul>
                            <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i
						                        class="portlet-icon portlet-icon-refresh"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <ul class="list-unstyled p-l-20 p-r-20 p-t-10 m-b-20">
                        <li>
                          <h5 class="pull-left normal no-margin">28th September</h5>
                          <a href="#" class="text-black pull-right m-l-5" data-toggle="refresh"><i class="fa fa-angle-right"></i></a>
                          <a href="#" class="text-black pull-right m-r-5" data-toggle="refresh"><i class="fa fa-angle-left"></i></a>
                        </li>
                        <div class="clearfix"></div>
                      </ul>
                      <div class="task-list p-t-0 p-r-20 p-b-20 p-l-20 clearfix flex-1">
                        <!-- START TAKS !-->
                        <div class="task clearfix row completed">
                          <div class="task-list-title col-10 justify-content-between">
                            <a href="#" class="text-color strikethrough" data-task="name">Purchase Pages before 10am
						                    </a>
                            <i class="fs-14 pg-close hidden"></i>
                          </div>
                          <div class="form-check checkbox-circle no-margin text-center col-2 d-flex justify-content-center align-items-center">
                            <input type="checkbox" checked="checked" value="1" id="todocheckbox" data-toggler="task" class="hidden">
                            <label for="todocheckbox" class=" no-margin no-padding absolute"></label>
                          </div>
                        </div>
                        <!-- END TAKS !-->
                        <!-- START TAKS !-->
                        <div class="task clearfix row">
                          <div class="task-list-title col-10 justify-content-between">
                            <a href="#" class="text-color" data-task="name">Meeting with CFO
						                    </a>
                            <i class="fs-14 pg-close hidden"></i>
                          </div>
                          <div class="form-check checkbox-circle no-margin text-center col-2 d-flex justify-content-center align-items-center">
                            <input type="checkbox" value="1" id="todocheck2" data-toggler="task" class="hidden">
                            <label for="todocheck2" class=" no-margin no-padding absolute"></label>
                          </div>
                        </div>
                        <!-- END TAKS !-->
                        <!-- START TAKS !-->
                        <div class="task clearfix row">
                          <div class="task-list-title col-10 justify-content-between">
                            <a href="#" class="text-color" data-task="name">AGM Conference at 1pm
						                    </a>
                            <i class="fs-14 pg-close hidden"></i>
                          </div>
                          <div class="form-check checkbox-circle no-margin text-center col-2 d-flex justify-content-center align-items-center">
                            <input type="checkbox" value="1" id="todocheck3" data-toggler="task" class="hidden">
                            <label for="todocheck3" class=" no-margin no-padding absolute"></label>
                          </div>
                        </div>
                        <!-- END TAKS !-->
                        <!-- START TAKS !-->
                        <div class="task clearfix row">
                          <div class="task-list-title col-10 justify-content-between">
                            <a href="#" class="text-color" data-task="name">Revise Annual Reports
						                    </a>
                            <i class="fs-14 pg-close hidden"></i>
                          </div>
                          <div class="form-check checkbox-circle no-margin text-center col-2 d-flex justify-content-center align-items-center">
                            <input type="checkbox" value="1" id="todocheck4" data-toggler="task" class="hidden">
                            <label for="todocheck4" class=" no-margin no-padding absolute"></label>
                          </div>
                        </div>
                        <!-- END TAKS !-->
                      </div>
                      <div class="clearfix"></div>
                      <div class="bg-master-light padding-20 full-width ">
                        <div class="row">
                          <div class="col-10">
                            <p class="no-margin normal text-black">Type Event Here</p>
                            <div class="input-group transparent no-border full-width">
                              <input class="form-control transparent p-l-0" type="text" placeholder="What do you need to remeber?">
                            </div>
                          </div>
                          <div class="col-2 text-center">
                            <a href="#" class="block m-t-15"><img src="assets/img/plus.svg"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END WIDGET -->
                  </div>
                </div>
                <!-- END ROW -->
              </div>
              <div class="col-lg-5 sm-m-t-10 d-flex">
                <!-- START WIDGET widget_pendingComments.tpl-->
                <div class="widget-11-2 card no-border card-condensed no-margin widget-loader-circle d-flex flex-column align-self-stretch">
                  <div class="card-header top-right">
                    <div class="card-controls">
                      <ul>
                        <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
										class="portlet-icon portlet-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="padding-25">
                    <div class="pull-left">
                      <h2 class="text-success no-margin">webarch</h2>
                      <p class="no-margin">Today's sales</p>
                    </div>
                    <h3 class="pull-right semi-bold"><sup>
							<small class="semi-bold">$</small>
						</sup> 102,967
						</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="auto-overflow widget-11-2-table">
                    <table class="table table-condensed table-hover">
                      <tbody>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="padding-25 mt-auto">
                    <p class="small no-margin">
                      <a href="#"><i class="fa fs-16 fa-arrow-circle-o-down text-success m-r-10"></i></a>
                      <span class="hint-text ">Show more details of APPLE . INC</span>
                    </p>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
            </div>
            <!-- END ROW -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container   container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small-text no-margin pull-left sm-pull-reset">
              ©2014-2020 All Rights Reserved. Pages® and/or its subsidiaries or affiliates are registered trademark of Revox Ltd.
              <span class="hint-text m-l-15">Pages v05.23 20201105.r.190</span>
            </p>
            <p class="small no-margin pull-right sm-pull-reset">
              Hand-crafted <span class="hint-text">&amp; made with Love</span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!--START QUICKVIEW -->
    <div id="quickview" class="quickview-wrapper" data-pages="quickview">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="">
          <a href="#quickview-notes" data-target="#quickview-notes" data-toggle="tab" role="tab">Notes</a>
        </li>
        <li>
          <a href="#quickview-alerts" data-target="#quickview-alerts" data-toggle="tab" role="tab">Alerts</a>
        </li>
        <li class="">
          <a class="active" href="#quickview-chat" data-toggle="tab" role="tab">Chat</a>
        </li>
      </ul>
      <a class="btn-icon-link invert quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-icon">close</i></a>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- BEGIN Notes !-->
        <div class="tab-pane no-padding" id="quickview-notes">
          <div class="view-port clearfix quickview-notes" id="note-views">
            <!-- BEGIN Note List !-->
            <div class="view list" id="quick-note-list">
              <div class="toolbar clearfix">
                <ul class="pull-right ">
                  <li>
                    <a href="#" class="delete-note-link"><i class="pg-icon">trash_alt</i></a>
                  </li>
                  <li>
                    <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">add</i></a>
                  </li>
                </ul>
                <button aria-label="" class="btn-remove-notes btn btn-xs btn-block hide"><i class="pg-icon">close</i>Delete</button>
              </div>
              <ul>
                <!-- BEGIN Note Item !-->
                <li data-noteid="1" class="d-flex justify-space-between">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="form-check warning no-margin">
                      <input id="qncheckbox1" type="checkbox" value="1">
                      <label for="qncheckbox1"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="d-flex right justify-content-end">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/20</span>
                    <a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push">
                      <i class="pg-icon">chevron_right</i>
                    </a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2" class="d-flex justify-space-between">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="form-check warning no-margin">
                      <input id="qncheckbox2" type="checkbox" value="1">
                      <label for="qncheckbox2"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="d-flex right justify-content-end">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/20</span>
                    <a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">chevron_right</i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2" class="d-flex justify-space-between">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="form-check warning no-margin">
                      <input id="qncheckbox3" type="checkbox" value="1">
                      <label for="qncheckbox3"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="d-flex right justify-content-end">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/20</span>
                    <a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">chevron_right</i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="3" class="d-flex justify-space-between">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="form-check warning no-margin">
                      <input id="qncheckbox4" type="checkbox" value="1">
                      <label for="qncheckbox4"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="d-flex right justify-content-end">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/20</span>
                    <a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">chevron_right</i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="4" class="d-flex justify-space-between">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="form-check warning no-margin">
                      <input id="qncheckbox5" type="checkbox" value="1">
                      <label for="qncheckbox5"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="d-flex right justify-content-end">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/20</span>
                    <a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">chevron_right</i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
              </ul>
            </div>
            <!-- END Note List !-->
            <div class="view note" id="quick-note">
              <div>
                <ul class="toolbar">
                  <li><a href="#" class="close-note-link"><i class="pg-icon">chevron_left</i></a>
                  </li>
                  <li><a href="#" data-action="Bold" class="fs-12"><i class="pg-icon">format_bold</i></a>
                  </li>
                  <li><a href="#" data-action="Italic" class="fs-12"><i class="pg-icon">format_italics</i></a>
                  </li>
                  <li><a href="#" class="fs-12"><i class="pg-icon">link</i></a>
                  </li>
                </ul>
                <div class="body">
                  <div>
                    <div class="top">
                      <span>21st april 2020 2:13am</span>
                    </div>
                    <div class="content">
                      <div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Notes !-->
        <!-- BEGIN Alerts !-->
        <div class="tab-pane no-padding" id="quickview-alerts">
          <div class="view-port clearfix" id="alerts">
            <!-- BEGIN Alerts View !-->
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default navbar-sm">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="action p-l-10 link text-color" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-icon">more_horizontal</i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Notications
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="action p-r-10 pull-right link text-color">
                    <i class="pg-icon">search</i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <!-- BEGIN Alert List !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <!-- BEGIN List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Calendar
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-warning fs-10"><i class="pg-icon">circle_fill</i></span>
                        </p>
                        <p class="p-l-10 overflow-ellipsis fs-12">
                          <span class="text-color">David Nester Birthday</span>
                        </p>
                        <p class="p-r-10 ml-auto fs-12 text-right">
                          <span class="text-warning">Today <br></span>
                          <span class="text-color">All Day</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                      <!-- BEGIN List Group Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-warning fs-10"><i class="pg-icon">circle_fill</i></span>
                        </p>
                        <p class="p-l-10 overflow-ellipsis fs-12">
                          <span class="text-color">Meeting at 2:30</span>
                        </p>
                        <p class="p-r-10 ml-auto fs-12 text-right">
                          <span class="text-warning">Today</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <!-- END List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Social
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-complete fs-10"><i class="pg-icon">circle_fill</i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-color link">Jame Smith commented on your status<br></span>
                          <span class="text-color">“Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-complete fs-10"><i class="pg-icon">circle_fill</i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-color link">Jame Smith commented on your status<br></span>
                          <span class="text-color">“Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Sever Status
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-danger fs-10"><i class="pg-icon">circle_fill</i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-color link">12:13AM GTM, 10230, ID:WR174s<br></span>
                          <span class="text-color">Server Load Exceeted. Take action</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
              </div>
              <!-- END Alert List !-->
            </div>
            <!-- EEND Alerts View !-->
          </div>
        </div>
        <!-- END Alerts !-->
        <div class="tab-pane active no-padding" id="quickview-chat">
          <div class="view-port clearfix" id="chat">
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="action p-l-10 link text-color" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-icon">add</i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Chat List
                    <div class="fs-11">Show All</div>
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="action p-r-10 pull-right link text-color">
                    <i class="pg-icon">more_horizontal</i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">
                    a</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">ava flores</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">b</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">bella mccoy</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">bob stephens</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">c</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">carole roberts</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">christopher perez</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">d</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">danielle fletcher</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">david sutton</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">e</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">earl hamilton</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">elaine lawrence</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">ellen grant</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">erik taylor</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">everett wagner</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">f</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">freddie gomez</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">g</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">glen jensen</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">gwendolyn walker</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">j</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">janet romero</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">k</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">kim martinez</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">l</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">lawrence white</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">leroy bell</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">letitia carr</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">lucy castro</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">m</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">mae hayes</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">marilyn owens</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">marlene cole</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">marsha warren</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">marsha dean</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">mia diaz</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">n</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">noah elliott</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">p</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">phyllis hamilton</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">r</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">raul rodriquez</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">rhonda barnett</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">roberta king</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">s</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">scott armstrong</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">sebastian austin</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">sofia davis</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">t</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">terrance young</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">theodore woods</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">todd wood</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">tommy jenkins</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">w</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">wilma hicks</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
              </div>
            </div>
            <!-- BEGIN Conversation View  !-->
            <div class="view chat-view bg-white clearfix">
              <!-- BEGIN Header  !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <a href="javascript:;" class="link text-color action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-icon">chevron_left</i>
                  </a>
                  <div class="view-heading">
                    John Smith
                    <div class="fs-11 hint-text">Online</div>
                  </div>
                  <a href="#" class="link text-color action p-r-10 pull-right ">
                    <i class="pg-icon">more_horizontal</i>
                  </a>
                </div>
              </div>
              <!-- END Header  !-->
              <!-- BEGIN Conversation  !-->
              <div class="chat-inner" id="my-conversation">
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Hello there
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                  </div>
                  <div class="chat-bubble from-them">
                    Hey
                  </div>
                </div>
                <!-- END From Them Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Did you check out Pages framework ?
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Its an awesome chat
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                  </div>
                  <div class="chat-bubble from-them">
                    Yea
                  </div>
                </div>
                <!-- END From Them Message  !-->
              </div>
              <!-- BEGIN Conversation  !-->
              <!-- BEGIN Chat Input  !-->
              <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                <div class="row">
                  <div class="col-1 p-t-15">
                    <a href="#" class="link text-color"><i class="pg-icon">add</i></a>
                  </div>
                  <div class="col-8 no-padding">
                    <label class="d-none">Reply</label>
                    <input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
                  </div>
                  <div class="col-2 link text-color m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                    <a href="#" class="link text-color"><i class="pg-icon">camera</i></a>
                  </div>
                </div>
              </div>
              <!-- END Chat Input  !-->
            </div>
            <!-- END Conversation View  !-->
          </div>
        </div>
      </div>
    </div>
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light btn-link btn-rounded  overlay-close text-black">
            <i class="pg-icon">close</i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="d-flex align-items-center">
            <div class="form-check right m-b-0">
              <input id="checkboxn" type="checkbox" value="1">
              <label for="checkboxn">Search within page</label>
            </div>
            <p class="fs-13 hint-text m-l-10 m-b-0">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid p-t-20">
          <span class="hint-text">
                suggestions :
            </span>
          <span class="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-30">
            <p class="bold">Pages Search Results: <span class="overlay-suggestions"></span></p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="d-flex m-t-15">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                    <img width="36" height="36" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10">
                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="small-text hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="d-flex m-t-15">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10">
                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="small-text hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="d-flex m-t-15">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                    <div>M
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10">
                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="small-text hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="d-flex m-t-15">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white d-flex align-items-center">
                    <i class="pg-icon">facebook</i>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10">
                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="small-text hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="d-flex m-t-15">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white d-flex align-items-center">
                    <i class="pg-icon">twitter</i>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10">
                    <h5 class="no-margin ">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="small-text hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="d-flex m-t-15">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger d-flex align-items-center">
                    <i class="pg-icon">google_plus</i>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10">
                    <h5 class="no-margin ">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="small-text hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!--  A polyfill for browsers that don't support ligatures: remove liga.js if not needed-->
    <script src="assets/plugins/liga.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
    <script src="assets/plugins/mapplic/js/hammer.min.js"></script>
    <script src="assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
    <script src="assets/plugins/mapplic/js/mapplic.js"></script>
    <script src="assets/plugins/rickshaw/rickshaw.min.js"></script>
    <script src="assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/plugins/skycons/skycons.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/js/dashboard.js" type="text/javascript"></script>
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>