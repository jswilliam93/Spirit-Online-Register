<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.png" type="image/png">
    <title>Ebnograph</title>
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/theme.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/ui.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <script src="<?=base_url();?>assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
  <!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
  <!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
  <!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
  <!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
  <!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
  <!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
  <!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
  <!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

  <!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
  <!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->
  
  <!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
  <!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
  <!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
  <!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
  <!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
  <!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
  <!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
  <!-- BEGIN BODY -->
  <body class="fixed-topbar sidebar-collapsed theme-sdtd color-blue">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar">
        <div class="logopanel">
          <h1>
            Ebnograph 
          </h1>
        </div>
        <div class="sidebar-inner">
          <!-- <div class="sidebar-top">
            <form action="search-result.html" method="post" class="searchform" id="search-results">
              <input type="text" class="form-control" name="keyword" placeholder="Search...">
            </form>
          </div> -->
          <ul class="nav nav-sidebar">
            <li class="nav-parent nav-active active">
              <a href="<?php echo base_url();?>Jobs/"><i class="icon-list"></i><span data-translate="">Jobs</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url();?>Jobs/">Due Jobs</a></li>
                <li><a href="<?php echo base_url();?>Jobs/done">Done Jobs</a></li>
                <li><a href="<?php echo base_url();?>Jobs/onHold">Hold Jobs</a></li>
                <?php  if($me[0]->position == "Manager" || $me[0]->position == "Secretariat") echo '<li><a href="'.base_url().'Jobs/add_job">Add Job</a></li>'?>
              </ul>
            </li>
           <li class="nav-parent">
              <?php  if($me[0]->position == "Manager") echo  '<a href="#"><i class="fa fa-user"></i><span data-translate="">Employees</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">'?>
                 <?php if($me[0]->position == "Manager") echo '<li><a href="'.base_url().'Users/add_employee">Add Employee</a></li>'?>
              </ul>
            </li>
            <!--  <li class="nav-parent">
              <a href="<?php echo base_url();?>Requests"><i class="fa fa-list"></i><span data-translate="Mailbox">Requests</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url();?>Requests">Pending</a></li>
                <li><a href="<?php echo base_url();?>Requests/add_request">Place Request</a></li>
                <li><a href="<?php echo base_url();?>Requests/get_all_schedule">Scheduled</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href="<?php echo base_url();?>Expenses"><i class="fa fa-dollar"></i><span data-translate="Mailbox">Expenses</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url();?>Expenses">Add Expense</a></li>
                <li><a href="<?php echo base_url();?>Expenses">Anual Charts</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href="<?php echo base_url();?>Expenses"><i class="fa fa-file"></i><span data-translate="Mailbox">Purchase Orders</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url();?>Expenses"></a></li>
                <li><a href="<?php echo base_url();?>Expenses"></a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href="<?php echo base_url();?>Expenses"><i class="fa fa-file-text"></i><span data-translate="Mailbox">Work Orders</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url();?>Expenses"></a></li>
                <li><a href="<?php echo base_url();?>Expenses"></a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href="<?php echo base_url();?>Expenses"><i class="fa fa-paperclip"></i><span data-translate="Mailbox">Invoices</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url();?>Expenses"></a></li>
                <li><a href="<?php echo base_url();?>Expenses"></a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href="<?php echo base_url();?>Expenses"><i class="fa fa-check"></i><span data-translate="Mailbox">Reports</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url();?>Expenses"></a></li>
                <li><a href="<?php echo base_url();?>Expenses"></a></li>
              </ul>
            </li> -->
            <!-- <li class="nav-parent">
              <a href=""><i class="icon-screen-desktop"></i><span data-translate="ui elements">UI Elements</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="ui-buttons.html"  data-translate="buttons"> Buttons</a></li>
                <li><a href="ui-components.html" data-translate="components"> Components</a></li>
                <li><a href="ui-tabs.html" data-translate="tabs"> Tabs</a></li>
                <li><a href="ui-animations.html" data-translate="animations css3"> Animations CSS3</a></li>
                <li><a href="ui-icons.html" data-translate="icons"> Icons</a></li>
                <li><a href="ui-portlets.html" data-translate="portlets"> Portlets</a></li>
                <li><a href="ui-nestable-list.html"  data-translate="nestable list"> Nestable List</a></li>
                <li><a href="ui-tree-view.html" data-translate="tree view"> Tree View</a></li>
                <li><a href="ui-modals.html" data-translate="modals"> Modals</a></li>
                <li><a href="ui-notifications.html" data-translate="notifications"> Notifications</a></li>
                <li><a href="ui-typography.html" data-translate="typography"> Typography</a></li>
                <li><a href="ui-helper.html" data-translate="helper"> Helper Classes</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-layers"></i><span data-translate="layouts">Layouts</span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="layouts-api.html" data-translate=""> Layout API</a></li>
                <li><a href="layout-topbar-mega-menu.html" data-translate=""> Topbar Menu</a></li>
                <li><a href="layout-topbar-mega-menu.html" data-translate=""> Topbar Mega Menu</a></li>
                <li><a href="layout-topbar-mega-menu-dark.html" data-translate=""> Topbar Mega Dark</a></li>
                <li><a href="layout-sidebar-top.html" data-translate=""> Sidebar on Top</a></li>
                <li><a href="layout-sidebar-hover.html" data-translate=""> Sidebar on Hover</a></li>
                <li><a href="layout-submenu-hover.html" data-translate=""> Sidebar Submenu Hover</a></li>
                <li><a href="layout-sidebar-condensed.html" data-translate=""> Sidebar Condensed</a></li>
                <li><a href="layout-sidebar-light.html" data-translate=""> Sidebar Light</a></li>
                <li><a href="layout-right-sidebar.html" data-translate=""> Right Sidebar</a></li>
                <li><a href="layout-boxed.html" data-translate=""> Boxed Layout</a></li>
                <li><a href="layout-collapsed-sidebar.html" data-translate=""> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-note"></i><span data-translate="forms">Forms </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="forms.html"> Forms Elements</a></li>
                <li><a href="forms-validation.html"> Forms Validation</a></li>
                <li><a href="forms-plugins.html"> Advanced Plugins</a></li>
                <li><a href="forms-wizard.html"> <span class="pull-right badge badge-danger">low</span> <span data-translate="form-wizard">Form Wizard</span></a></li>
                <li><a href="forms-sliders.html" data-translate="sliders"> Sliders</a></li>
                <li><a href="forms-editors.html" data-translate="text editors"> Text Editors</a></li>
                <li><a href="forms-input-masks.html" data-translate="input masks"> Input Masks</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="fa fa-table"></i><span data-translate="medias manager">Tables</span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="tables.html" data-translate="tables styling"> Tables Styling</a></li>
                <li><a href="tables-dynamic.html" data-translate="tables dynamic"> Tables Dynamic</a></li>
                <li><a href="tables-filter.html" data-translate="tables filter"> Tables Filter</a></li>
                <li><a href="tables-editable.html" data-translate="tables editable"> Tables Editable</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-bar-chart"></i><span data-translate="charts">Charts </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="charts.html" data-translate="image croping"> Charts</a></li>
                <li><a href="charts-finance.html" data-translate="gallery sortable"> Financial Charts</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-picture"></i><span data-translate="medias manager">Medias</span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="medias-image-croping.html" data-translate="image croping"> Images Croping</a></li>
                <li><a href="medias-gallery-sortable.html" data-translate="gallery sortable"> Gallery Sortable</a></li>
                <li><a href="medias-hover-effects.html" data-translate="hover effects"> <span class="pull-right badge badge-primary">12</span> Hover Effects</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-docs"></i><span data-translate="pages">Pages </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="page-timeline.html"> Timeline</a></li>
                <li><a href="page-404.html"> Error 404</a></li>
                <li><a href="page-500.html"> Error 500</a></li>
                <li class="active"><a href="page-blank.html"> Blank Page</a></li>
                <li><a href="page-contact.html"> Contact</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-user"></i><span data-translate="pages">User </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="user-profil.html"> <span class="pull-right badge badge-danger">Hot</span> Profil</a></li>
                <li><a href="user-lockscreen.html"> Lockscreen</a></li>
                <li><a href="user-login-v1.html"> Login / Register</a></li>
                <li><a href="user-login-v2.html"> Login / Register v2</a></li>
                <li><a href="user-session-timeout.html"> Session Timeout</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-basket"></i><span data-translate="pages">eCommerce </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="ecommerce-cart.html"> Shopping Cart</a></li>
                <li><a href="ecommerce-invoice.html"> Invoice</a></li>
                <li><a href="ecommerce-pricing-table.html"><span class="pull-right badge badge-success">5</span> Pricing Table</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-cup"></i><span>Extra </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="extra-fullcalendar.html"><span class="pull-right badge badge-primary">New</span> Fullcalendar</a></li>
                <li><a href="extra-widgets.html"> Widgets</a></li>
                <li><a href="page-coming-soon.html"> Coming Soon</a></li>
                <li><a href="extra-sliders.html"> Sliders</a></li>
                <li><a href="maps-google.html"> Google Maps</a></li>
                <li><a href="maps-vector.html"> Vector Maps</a></li>
              </ul>
            </li> -->
          </ul>
          <!-- SIDEBAR WIDGET FOLDERS -->
          <!-- <div class="sidebar-widgets">
            <p class="menu-title widget-title">Folders <span class="pull-right"><a href="#" class="new-folder"> <i class="icon-plus"></i></a></span></p>
            <ul class="folders">
              <li>
                <a href="#"><i class="icon-doc c-primary"></i>My documents</a> 
              </li>
              <li>
                <a href="#"><i class="icon-picture"></i>My images</a> 
              </li>
              <li><a href="#"><i class="icon-lock"></i>Secure data</a> 
              </li>
              <li class="add-folder">
                <input type="text" placeholder="Folder's name..." class="form-control input-sm">
              </li>
            </ul>
          </div> -->
          <div class="sidebar-footer clearfix">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
            <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
            <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="<?php echo base_url();?>Register/lock" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
            <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="<?php echo base_url();?>Register/logout" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
            <i class="icon-power"></i></a>
          </div>
        </div>
      </div>