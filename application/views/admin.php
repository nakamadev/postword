<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Metronic | Data Tables - Advanced Datatables</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() . 'assets/css/simple-line-icons/simple-line-icons.min.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() . 'assets/css/bootstrap.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() . 'assets/css/uniform/css/uniform.default.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() . 'assets/js/bootstrap-switch/css/bootstrap-switch.min.css'; ?>" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/select2.css'; ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/datatables/extensions/Scroller/css/dataTables.scroller.min.css'; ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css'; ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/datatables/plugins/bootstrap/dataTables.bootstrap.css'; ?>"/>
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo base_url() . 'assets/css/components-rounded.css'; ?>" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() . 'assets/css/plugins.css'; ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() . 'assets/css/layout.css'; ?>" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="<?php echo base_url() . 'assets/css/themes/light.css'; ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() . 'assets/css/custom.css'; ?>" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo ">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="../../assets/admin/layout4/img/logo-light.png" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form class="search-form" action="extra_search.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide">
                            </li>
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-success">
                                        7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3><span class="bold">12 pending</span> notifications</h3>
                                        <a href="extra_profile.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span>
                                                        New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span>
                                                        Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span>
                                                        Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span>
                                                        Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span>
                                                        Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span>
                                                        A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span>
                                                        Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span>
                                                        System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span>
                                                        Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <li class="separator hide">
                            </li>
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile">
                                        Nick </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <img alt="" class="img-circle" src="../../assets/admin/layout4/img/avatar9.jpg"/>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="extra_profile.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="page_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
                                                3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_todo.html">
                                            <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
                                                7 </span>
                                        </a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="extra_lock.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url().'c_master/log_out';?>">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="start">
                            <a href="index.html">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="active open">
                            <a href="javascript:;">
                                <i class="icon-briefcase"></i>
                                <span class="title">Review Data</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="active">
                                    <a href="table_advanced.html">
                                        Data Artikel</a>
                                </li>
                                <li>
                                    <a href="table_advanced.html">
                                        Data Kategori</a>
                                </li>
                                <li>
                                    <a href="table_advanced.html">
                                        Data Featured Image</a>
                                </li>
                                <li>
                                    <a href="table_advanced.html">
                                        Data Admin</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    Widget settings form goes here
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn blue">Save changes</button>
                                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE HEAD -->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Review Data <small>Data-data artikel</small></h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD -->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">Data Store</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">Data-data artikel</a>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row">
                        <div class="col-md-12">                            
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue-madison">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>Data-data artikel
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="reload">
                                        </a>
                                        <a href="javascript:;" class="remove">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No.
                                                </th>
                                                <th>
                                                    Judul
                                                </th>
                                                <th>
                                                    Tgl. Post
                                                </th>
                                                <th>
                                                    Isi
                                                </th>
                                                <th>
                                                    Kategori
                                                </th>
                                                <th>
                                                    Featured Image
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($artikel as $art) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no;?>
                                                </td>
                                                <td>
                                                    <?php echo $art->judul;?>
                                                </td>
                                                <td>
                                                    <?php echo $art->tgl_post;?>
                                                </td>
                                                <td>
                                                    <?php echo substr($art->isi, 0,200).'...';?>
                                                </td>
                                                <td>
                                                    <?php echo $art->nm_cat;?>
                                                </td>
                                                <td>
                                                    <?php echo $art->nama;?>
                                                </td>
                                                <td>
                                                    None
                                                </td>
                                            </tr>
                                            <?php $no++; }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
                2015 &copy; Metronic by Irwan Rosyadi
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->

        <script src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery-migrate.min.js'; ?>" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="<?php echo base_url() . 'assets/js/jquery-ui.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/js/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery-slimscroll/jquery.slimscroll.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.blockui.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.cokie.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/css/uniform/jquery.uniform.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/js/bootstrap-switch/js/bootstrap-switch.min.js'; ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/select2.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/css/datatables/media/js/jquery.dataTables.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/css/datatables/extensions/TableTools/js/dataTables.tableTools.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/css/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/css/datatables/extensions/Scroller/js/dataTables.scroller.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/css/datatables/plugins/bootstrap/dataTables.bootstrap.js'; ?>"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url() . 'assets/js/metronic.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/js/layout.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/js/demo.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/js/table-advanced.js'; ?>"></script>
        <script>
            jQuery(document).ready(function() {
                Metronic.init(); // init metronic core components
                Layout.init(); // init current layout
                Demo.init(); // init demo features
                TableAdvanced.init();
            });
        </script>
    </body>
    <!-- END BODY -->
</html>