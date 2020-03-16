@extends('layouts.app-admin')
@section('title','Calender')
@section('import-style')
    <!-- BEGIN PAGE STYLES -->
    <link href="../../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet"/>
    <!-- END PAGE STYLES -->
@endsection

@section('content')
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <li class="sidebar-toggler-wrapper">
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler">
                        </div>
                        <!-- END SIDEBAR TOGGLER BUTTON -->
                    </li>
                    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                    <li class="sidebar-search-wrapper">
                        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                        <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                        <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                        <form class="sidebar-search " action="extra_search.html" method="POST">
                            <a href="javascript:;" class="remove">
                                <i class="icon-close"></i>
                            </a>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
                            </div>
                        </form>
                        <!-- END RESPONSIVE QUICK SEARCH FORM -->
                    </li>
                    <li class="start ">
                        <a href="javascript:;">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">
                                    <i class="icon-bar-chart"></i>
                                    Default Dashboard</a>
                            </li>
                            <li>
                                <a href="index_2.html">
                                    <i class="icon-bulb"></i>
                                    New Dashboard #1</a>
                            </li>
                            <li>
                                <a href="index_3.html">
                                    <i class="icon-graph"></i>
                                    New Dashboard #2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-basket"></i>
                            <span class="title">eCommerce</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ecommerce_index.html">
                                    <i class="icon-home"></i>
                                    Dashboard</a>
                            </li>
                            <li>
                                <a href="ecommerce_orders.html">
                                    <i class="icon-basket"></i>
                                    Orders</a>
                            </li>
                            <li>
                                <a href="ecommerce_orders_view.html">
                                    <i class="icon-tag"></i>
                                    Order View</a>
                            </li>
                            <li>
                                <a href="ecommerce_products.html">
                                    <i class="icon-handbag"></i>
                                    Products</a>
                            </li>
                            <li>
                                <a href="ecommerce_products_edit.html">
                                    <i class="icon-pencil"></i>
                                    Product Edit</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-rocket"></i>
                            <span class="title">Page Layouts</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">
                                    Horizontal & Sidebar Menu</a>
                            </li>
                            <li>
                                <a href="index_horizontal_menu.html">
                                    Dashboard & Mega Menu</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_menu1.html">
                                    Horizontal Mega Menu 1</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_menu2.html">
                                    Horizontal Mega Menu 2</a>
                            </li>
                            <li>
                                <a href="layout_fontawesome_icons.html">
                                    <span class="badge badge-roundless badge-danger">new</span>Layout with Fontawesome Icons</a>
                            </li>
                            <li>
                                <a href="layout_glyphicons.html">
                                    Layout with Glyphicon</a>
                            </li>
                            <li>
                                <a href="layout_full_height_portlet.html">
                                    <span class="badge badge-roundless badge-success">new</span>Full Height Portlet</a>
                            </li>
                            <li>
                                <a href="layout_full_height_content.html">
                                    <span class="badge badge-roundless badge-warning">new</span>Full Height Content</a>
                            </li>
                            <li>
                                <a href="layout_search_on_header1.html">
                                    Search Box On Header 1</a>
                            </li>
                            <li>
                                <a href="layout_search_on_header2.html">
                                    Search Box On Header 2</a>
                            </li>
                            <li>
                                <a href="layout_sidebar_search_option1.html">
                                    Sidebar Search Option 1</a>
                            </li>
                            <li>
                                <a href="layout_sidebar_search_option2.html">
                                    Sidebar Search Option 2</a>
                            </li>
                            <li>
                                <a href="layout_sidebar_reversed.html">
                                    <span class="badge badge-roundless badge-warning">new</span>Right Sidebar Page</a>
                            </li>
                            <li>
                                <a href="layout_sidebar_fixed.html">
                                    Sidebar Fixed Page</a>
                            </li>
                            <li>
                                <a href="layout_sidebar_closed.html">
                                    Sidebar Closed Page</a>
                            </li>
                            <li>
                                <a href="layout_ajax.html">
                                    Content Loading via Ajax</a>
                            </li>
                            <li>
                                <a href="layout_disabled_menu.html">
                                    Disabled Menu Links</a>
                            </li>
                            <li>
                                <a href="layout_blank_page.html">
                                    Blank Page</a>
                            </li>
                            <li>
                                <a href="layout_boxed_page.html">
                                    Boxed Page</a>
                            </li>
                            <li>
                                <a href="layout_language_bar.html">
                                    Language Switch Bar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-diamond"></i>
                            <span class="title">UI Features</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ui_general.html">
                                    General Components</a>
                            </li>
                            <li>
                                <a href="ui_buttons.html">
                                    Buttons</a>
                            </li>
                            <li>
                                <a href="ui_confirmations.html">
                                    Popover Confirmations</a>
                            </li>
                            <li>
                                <a href="ui_icons.html">
                                    <span class="badge badge-roundless badge-danger">new</span>Font Icons</a>
                            </li>
                            <li>
                                <a href="ui_colors.html">
                                    Flat UI Colors</a>
                            </li>
                            <li>
                                <a href="ui_typography.html">
                                    Typography</a>
                            </li>
                            <li>
                                <a href="ui_tabs_accordions_navs.html">
                                    Tabs, Accordions & Navs</a>
                            </li>
                            <li>
                                <a href="ui_tree.html">
                                    <span class="badge badge-roundless badge-danger">new</span>Tree View</a>
                            </li>
                            <li>
                                <a href="ui_page_progress_style_1.html">
                                    <span class="badge badge-roundless badge-warning">new</span>Page Progress Bar</a>
                            </li>
                            <li>
                                <a href="ui_blockui.html">
                                    Block UI</a>
                            </li>
                            <li>
                                <a href="ui_bootstrap_growl.html">
                                    <span class="badge badge-roundless badge-warning">new</span>Bootstrap Growl Notifications</a>
                            </li>
                            <li>
                                <a href="ui_notific8.html">
                                    Notific8 Notifications</a>
                            </li>
                            <li>
                                <a href="ui_toastr.html">
                                    Toastr Notifications</a>
                            </li>
                            <li>
                                <a href="ui_alert_dialog_api.html">
                                    <span class="badge badge-roundless badge-danger">new</span>Alerts & Dialogs API</a>
                            </li>
                            <li>
                                <a href="ui_session_timeout.html">
                                    Session Timeout</a>
                            </li>
                            <li>
                                <a href="ui_idle_timeout.html">
                                    User Idle Timeout</a>
                            </li>
                            <li>
                                <a href="ui_modals.html">
                                    Modals</a>
                            </li>
                            <li>
                                <a href="ui_extended_modals.html">
                                    Extended Modals</a>
                            </li>
                            <li>
                                <a href="ui_tiles.html">
                                    Tiles</a>
                            </li>
                            <li>
                                <a href="ui_datepaginator.html">
                                    <span class="badge badge-roundless badge-success">new</span>Date Paginator</a>
                            </li>
                            <li>
                                <a href="ui_nestable.html">
                                    Nestable List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-puzzle"></i>
                            <span class="title">UI Components</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="components_pickers.html">
                                    Date & Time Pickers</a>
                            </li>
                            <li>
                                <a href="components_context_menu.html">
                                    Context Menu</a>
                            </li>
                            <li>
                                <a href="components_dropdowns.html">
                                    Custom Dropdowns</a>
                            </li>
                            <li>
                                <a href="components_form_tools.html">
                                    Form Widgets & Tools</a>
                            </li>
                            <li>
                                <a href="components_form_tools2.html">
                                    Form Widgets & Tools 2</a>
                            </li>
                            <li>
                                <a href="components_editors.html">
                                    Markdown & WYSIWYG Editors</a>
                            </li>
                            <li>
                                <a href="components_ion_sliders.html">
                                    Ion Range Sliders</a>
                            </li>
                            <li>
                                <a href="components_noui_sliders.html">
                                    NoUI Range Sliders</a>
                            </li>
                            <li>
                                <a href="components_jqueryui_sliders.html">
                                    jQuery UI Sliders</a>
                            </li>
                            <li>
                                <a href="components_knob_dials.html">
                                    Knob Circle Dials</a>
                            </li>
                        </ul>
                    </li>
                    <!-- BEGIN ANGULARJS LINK -->
                    <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="AngularJS version demo">
                        <a href="angularjs" target="_blank">
                            <i class="icon-paper-plane"></i>
                            <span class="title">
					AngularJS Version </span>
                        </a>
                    </li>
                    <!-- END ANGULARJS LINK -->
                    <li class="heading">
                        <h3 class="uppercase">Features</h3>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-settings"></i>
                            <span class="title">Form Stuff</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="form_controls_md.html">
                                    <span class="badge badge-roundless badge-danger">new</span>Material Design<br>
                                    Form Controls</a>
                            </li>
                            <li>
                                <a href="form_controls.html">
                                    Bootstrap<br>
                                    Form Controls</a>
                            </li>
                            <li>
                                <a href="form_icheck.html">
                                    iCheck Controls</a>
                            </li>
                            <li>
                                <a href="form_layouts.html">
                                    Form Layouts</a>
                            </li>
                            <li>
                                <a href="form_editable.html">
                                    <span class="badge badge-roundless badge-warning">new</span>Form X-editable</a>
                            </li>
                            <li>
                                <a href="form_wizard.html">
                                    Form Wizard</a>
                            </li>
                            <li>
                                <a href="form_validation.html">
                                    Form Validation</a>
                            </li>
                            <li>
                                <a href="form_image_crop.html">
                                    <span class="badge badge-roundless badge-danger">new</span>Image Cropping</a>
                            </li>
                            <li>
                                <a href="form_fileupload.html">
                                    Multiple File Upload</a>
                            </li>
                            <li>
                                <a href="form_dropzone.html">
                                    Dropzone File Upload</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-briefcase"></i>
                            <span class="title">Data Tables</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="table_basic.html">
                                    Basic Datatables</a>
                            </li>
                            <li>
                                <a href="table_tree.html">
                                    Tree Datatables</a>
                            </li>
                            <li>
                                <a href="table_responsive.html">
                                    Responsive Datatables</a>
                            </li>
                            <li>
                                <a href="table_managed.html">
                                    Managed Datatables</a>
                            </li>
                            <li>
                                <a href="table_editable.html">
                                    Editable Datatables</a>
                            </li>
                            <li>
                                <a href="table_advanced.html">
                                    Advanced Datatables</a>
                            </li>
                            <li>
                                <a href="table_ajax.html">
                                    Ajax Datatables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-wallet"></i>
                            <span class="title">Portlets</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="portlet_general.html">
                                    General Portlets</a>
                            </li>
                            <li>
                                <a href="portlet_general2.html">
                                    <span class="badge badge-roundless badge-danger">new</span>New Portlets #1</a>
                            </li>
                            <li>
                                <a href="portlet_general3.html">
                                    <span class="badge badge-roundless badge-danger">new</span>New Portlets #2</a>
                            </li>
                            <li>
                                <a href="portlet_ajax.html">
                                    Ajax Portlets</a>
                            </li>
                            <li>
                                <a href="portlet_draggable.html">
                                    Draggable Portlets</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Charts</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="charts_amcharts.html">
                                    amChart</a>
                            </li>
                            <li>
                                <a href="charts_flotcharts.html">
                                    Flotchart</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active open">
                        <a href="javascript:;">
                            <i class="icon-docs"></i>
                            <span class="title">Pages</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="page_timeline.html">
                                    <i class="icon-paper-plane"></i>
                                    <span class="badge badge-warning">2</span>New Timeline</a>
                            </li>
                            <li>
                                <a href="extra_profile.html">
                                    <i class="icon-user-following"></i>
                                    <span class="badge badge-success badge-roundless">new</span>New User Profile</a>
                            </li>
                            <li>
                                <a href="page_todo.html">
                                    <i class="icon-check"></i>
                                    Todo</a>
                            </li>
                            <li>
                                <a href="inbox.html">
                                    <i class="icon-envelope"></i>
                                    <span class="badge badge-danger">4</span>Inbox</a>
                            </li>
                            <li>
                                <a href="extra_faq.html">
                                    <i class="icon-question"></i>
                                    FAQ</a>
                            </li>
                            <li class="active">
                                <a href="page_calendar.html">
                                    <i class="icon-calendar"></i>
                                    <span class="badge badge-danger">14</span>Calendar</a>
                            </li>
                            <li>
                                <a href="page_coming_soon.html">
                                    <i class="icon-flag"></i>
                                    Coming Soon</a>
                            </li>
                            <li>
                                <a href="page_blog.html">
                                    <i class="icon-speech"></i>
                                    Blog</a>
                            </li>
                            <li>
                                <a href="page_blog_item.html">
                                    <i class="icon-link"></i>
                                    Blog Post</a>
                            </li>
                            <li>
                                <a href="page_news.html">
                                    <i class="icon-eye"></i>
                                    <span class="badge badge-success">9</span>News</a>
                            </li>
                            <li>
                                <a href="page_news_item.html">
                                    <i class="icon-bell"></i>
                                    News View</a>
                            </li>
                            <li>
                                <a href="page_timeline_old.html">
                                    <i class="icon-paper-plane"></i>
                                    <span class="badge badge-warning">2</span>Old Timeline</a>
                            </li>
                            <li>
                                <a href="extra_profile_old.html">
                                    <i class="icon-user"></i>
                                    Old User Profile</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-present"></i>
                            <span class="title">Extra</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="page_about.html">
                                    About Us</a>
                            </li>
                            <li>
                                <a href="page_contact.html">
                                    Contact Us</a>
                            </li>
                            <li>
                                <a href="extra_search.html">
                                    Search Results</a>
                            </li>
                            <li>
                                <a href="extra_invoice.html">
                                    Invoice</a>
                            </li>
                            <li>
                                <a href="page_portfolio.html">
                                    Portfolio</a>
                            </li>
                            <li>
                                <a href="extra_pricing_table.html">
                                    Pricing Tables</a>
                            </li>
                            <li>
                                <a href="extra_404_option1.html">
                                    404 Page Option 1</a>
                            </li>
                            <li>
                                <a href="extra_404_option2.html">
                                    404 Page Option 2</a>
                            </li>
                            <li>
                                <a href="extra_404_option3.html">
                                    404 Page Option 3</a>
                            </li>
                            <li>
                                <a href="extra_500_option1.html">
                                    500 Page Option 1</a>
                            </li>
                            <li>
                                <a href="extra_500_option2.html">
                                    500 Page Option 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-folder"></i>
                            <span class="title">Multi Level Menu</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-settings"></i> Item 1 <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-user"></i>
                                            Sample Link 1 <span class="arrow"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#"><i class="icon-power"></i> Sample Link 1</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-paper-plane"></i> Sample Link 1</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-star"></i> Sample Link 1</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-camera"></i> Sample Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-link"></i> Sample Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-pointer"></i> Sample Link 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-globe"></i> Item 2 <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#"><i class="icon-tag"></i> Sample Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-pencil"></i> Sample Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-graph"></i> Sample Link 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bar-chart"></i>
                                    Item 3 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-user"></i>
                            <span class="title">Login Options</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="login.html">
                                    Login Form 1</a>
                            </li>
                            <li>
                                <a href="login_2.html">
                                    Login Form 2</a>
                            </li>
                            <li>
                                <a href="login_3.html">
                                    Login Form 3</a>
                            </li>
                            <li>
                                <a href="login_soft.html">
                                    Login Form 4</a>
                            </li>
                            <li>
                                <a href="extra_lock.html">
                                    Lock Screen 1</a>
                            </li>
                            <li>
                                <a href="extra_lock2.html">
                                    Lock Screen 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">More</h3>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-logout"></i>
                            <span class="title">Quick Sidebar</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="quick_sidebar_push_content.html">
                                    Push Content</a>
                            </li>
                            <li>
                                <a href="quick_sidebar_over_content.html">
                                    Over Content</a>
                            </li>
                            <li>
                                <a href="quick_sidebar_over_content_transparent.html">
                                    Over Content & Transparent</a>
                            </li>
                            <li>
                                <a href="quick_sidebar_on_boxed_layout.html">
                                    Boxed Layout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-envelope-open"></i>
                            <span class="title">Email Templates</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="email_template1.html">
                                    New Email Template 1</a>
                            </li>
                            <li>
                                <a href="email_template2.html">
                                    New Email Template 2</a>
                            </li>
                            <li>
                                <a href="email_template3.html">
                                    New Email Template 3</a>
                            </li>
                            <li>
                                <a href="email_template4.html">
                                    New Email Template 4</a>
                            </li>
                            <li>
                                <a href="email_newsletter.html">
                                    Old Email Template 1</a>
                            </li>
                            <li>
                                <a href="email_system.html">
                                    Old Email Template 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="last ">
                        <a href="javascript:;">
                            <i class="icon-pointer"></i>
                            <span class="title">Maps</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="maps_google.html">
                                    Google Maps</a>
                            </li>
                            <li>
                                <a href="maps_vector.html">
                                    Vector Maps</a>
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
                <!-- BEGIN STYLE CUSTOMIZER -->
                <div class="theme-panel hidden-xs hidden-sm">
                    <div class="toggler">
                    </div>
                    <div class="toggler-close">
                    </div>
                    <div class="theme-options">
                        <div class="theme-option theme-colors clearfix">
						<span>
						THEME COLOR </span>
                            <ul>
                                <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
                                </li>
                                <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
                                </li>
                                <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
                                </li>
                                <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
                                </li>
                                <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
                                </li>
                                <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
                                </li>
                            </ul>
                        </div>
                        <div class="theme-option">
						<span>
						Layout </span>
                            <select class="layout-option form-control input-sm">
                                <option value="fluid" selected="selected">Fluid</option>
                                <option value="boxed">Boxed</option>
                            </select>
                        </div>
                        <div class="theme-option">
						<span>
						Header </span>
                            <select class="page-header-option form-control input-sm">
                                <option value="fixed" selected="selected">Fixed</option>
                                <option value="default">Default</option>
                            </select>
                        </div>
                        <div class="theme-option">
						<span>
						Top Menu Dropdown</span>
                            <select class="page-header-top-dropdown-style-option form-control input-sm">
                                <option value="light" selected="selected">Light</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
                        <div class="theme-option">
						<span>
						Sidebar Mode</span>
                            <select class="sidebar-option form-control input-sm">
                                <option value="fixed">Fixed</option>
                                <option value="default" selected="selected">Default</option>
                            </select>
                        </div>
                        <div class="theme-option">
						<span>
						Sidebar Menu </span>
                            <select class="sidebar-menu-option form-control input-sm">
                                <option value="accordion" selected="selected">Accordion</option>
                                <option value="hover">Hover</option>
                            </select>
                        </div>
                        <div class="theme-option">
						<span>
						Sidebar Style </span>
                            <select class="sidebar-style-option form-control input-sm">
                                <option value="default" selected="selected">Default</option>
                                <option value="light">Light</option>
                            </select>
                        </div>
                        <div class="theme-option">
						<span>
						Sidebar Position </span>
                            <select class="sidebar-pos-option form-control input-sm">
                                <option value="left" selected="selected">Left</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                        <div class="theme-option">
						<span>
						Footer </span>
                            <select class="page-footer-option form-control input-sm">
                                <option value="fixed">Fixed</option>
                                <option value="default" selected="selected">Default</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- END STYLE CUSTOMIZER -->
                <!-- BEGIN PAGE HEADER-->
                <h3 class="page-title">
                    Calendar <small>calendar page</small>
                </h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Calendar</a>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                Actions <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="#">Action</a>
                                </li>
                                <li>
                                    <a href="#">Another action</a>
                                </li>
                                <li>
                                    <a href="#">Something else here</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">Separated link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box green-meadow calendar">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Calendar
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <!-- BEGIN DRAGGABLE EVENTS PORTLET-->
                                        <h3 class="event-form-title">Draggable Events</h3>
                                        <div id="external-events">
                                            <form class="inline-form">
                                                <input type="text" value="" class="form-control" placeholder="Event Title..." id="event_title"/><br/>
                                                <a href="javascript:;" id="event_add" class="btn default">
                                                    Add Event </a>
                                            </form>
                                            <hr/>
                                            <div id="event_box">
                                            </div>
                                            <label for="drop-remove">
                                                <input type="checkbox" id="drop-remove"/>remove after drop </label>
                                            <hr class="visible-xs"/>
                                        </div>
                                        <!-- END DRAGGABLE EVENTS PORTLET-->
                                    </div>
                                    <div class="col-md-9 col-sm-12">
                                        <div id="calendar" class="has-toolbar">
                                        </div>
                                    </div>
                                </div>
                                <!-- END CALENDAR PORTLET-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
        <div class="page-quick-sidebar-wrapper">
            <div class="page-quick-sidebar">
                <div class="nav-justified">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#quick_sidebar_tab_1" data-toggle="tab">
                                Users <span class="badge badge-danger">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#quick_sidebar_tab_2" data-toggle="tab">
                                Alerts <span class="badge badge-success">7</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                More<i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-bell"></i> Alerts </a>
                                </li>
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-info"></i> Notifications </a>
                                </li>
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-speech"></i> Activities </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-settings"></i> Settings </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                            <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                <h3 class="list-heading">Staff</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">8</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar3.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Bob Nilson</h4>
                                            <div class="media-heading-sub">
                                                Project Manager
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar1.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nick Larson</h4>
                                            <div class="media-heading-sub">
                                                Art Director
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">3</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar4.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Hubert</h4>
                                            <div class="media-heading-sub">
                                                CTO
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar2.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Wong</h4>
                                            <div class="media-heading-sub">
                                                CEO
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="list-heading">Customers</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">2</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar6.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lara Kunis</h4>
                                            <div class="media-heading-sub">
                                                CEO, Loop Inc
                                            </div>
                                            <div class="media-heading-small">
                                                Last seen 03:10 AM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="label label-sm label-success">new</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar7.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ernie Kyllonen</h4>
                                            <div class="media-heading-sub">
                                                Project Manager,<br>
                                                SmartBizz PTL
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar8.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lisa Stone</h4>
                                            <div class="media-heading-sub">
                                                CTO, Keort Inc
                                            </div>
                                            <div class="media-heading-small">
                                                Last seen 13:10 PM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">7</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar9.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Portalatin</h4>
                                            <div class="media-heading-sub">
                                                CFO, H&D LTD
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar10.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Irina Savikova</h4>
                                            <div class="media-heading-sub">
                                                CEO, Tizda Motors Inc
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">4</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar11.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Maria Gomez</h4>
                                            <div class="media-heading-sub">
                                                Manager, Infomatic Inc
                                            </div>
                                            <div class="media-heading-small">
                                                Last seen 03:10 AM
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="page-quick-sidebar-item">
                                <div class="page-quick-sidebar-chat-user">
                                    <div class="page-quick-sidebar-nav">
                                        <a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-messages">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body">
											When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body">
											Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body">
											Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:16</span>
                                                <span class="body">
											You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body">
											No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body">
											Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body">
											Great! Thanks. Will check it right away. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body">
											Please let me know if you have any comment. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body">
											Sure. I will check and buzz you if anything needs to be corrected. </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                            <div class="page-quick-sidebar-alerts-list">
                                <h3 class="list-heading">General</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                Just now
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Finance Report for year 2013 has been released.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    20 mins
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        You have 5 pending membership that requires a quick review.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                24 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                30 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        You have 5 pending membership that requires a quick review.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                24 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
													Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                2 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            IPO Report for year 2013 has been released.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    20 mins
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="list-heading">System</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                Just now
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Finance Report for year 2013 has been released.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    20 mins
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        You have 5 pending membership that requires a quick review.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                24 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                30 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        You have 5 pending membership that requires a quick review.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                24 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
													Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                2 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            IPO Report for year 2013 has been released.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    20 mins
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                            <div class="page-quick-sidebar-settings-list">
                                <h3 class="list-heading">General Settings</h3>
                                <ul class="list-items borderless">
                                    <li>
                                        Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                </ul>
                                <h3 class="list-heading">System Settings</h3>
                                <ul class="list-items borderless">
                                    <li>
                                        Security Level
                                        <select class="form-control input-inline input-sm input-small">
                                            <option value="1">Normal</option>
                                            <option value="2" selected>Medium</option>
                                            <option value="e">High</option>
                                        </select>
                                    </li>
                                    <li>
                                        Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
                                    </li>
                                    <li>
                                        Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
                                    </li>
                                    <li>
                                        Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                </ul>
                                <div class="inner-content">
                                    <button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->

@endsection


@section('import-style')
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
    <script src="../../assets/global/plugins/respond.min.js"></script>
    <script src="../../assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
    <script src="../../assets/global/plugins/moment.min.js"></script>
    <script src="../../assets/global/plugins/fullcalendar/fullcalendar.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="../../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
    <script src="../../assets/admin/pages/scripts/calendar.js"></script>
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            QuickSidebar.init(); // init quick sidebar
            Demo.init(); // init demo features
            Calendar.init();
        });
    </script>
@endsection
