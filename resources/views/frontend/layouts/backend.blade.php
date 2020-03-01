<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Accounts | Daffodil Polytechnic Institute</title>
      <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
      <meta name="author" content="pixelcave">
      <meta name="robots" content="noindex, nofollow">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <link href="{{ asset('/js/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
      <!-- Icons -->
      <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
      <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

      <!-- Fonts and Styles -->
      @yield('css_before')
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
      <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">

      @yield('css_after')

      <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
   </head>

   <body>

      <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
       <!--   <aside id="side-overlay">
            <div class="content-header content-header-fullrow">
               <div class="content-header-section align-parent">
                  <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                     <i class="fa fa-times text-danger"></i>
                  </button>

                  <div class="content-header-item">
                     <a class="img-link mr-5" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                     </a>
                     <a class="align-middle link-effect text-primary-dark font-w600" href="javascript:void(0)">Accounts</a>
                  </div>
               </div>
            </div>

            <div class="content-side">
               <p>
                  Content..
               </p>
            </div>
         </aside> -->

         <aside id="side-overlay" data-simplebar="init">
            <div class="simplebar-track vertical" style="visibility: visible;">
               <div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 69px;">
               </div>
            </div>
            <div class="simplebar-track horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar"></div>
            </div>

            <div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
               <div class="content-header content-header-fullrow">
                  <div class="content-header-section align-parent">
                     <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-times text-danger"></i>
                     </button>

                     <div class="content-header-item">
                         <a class="img-link mr-5" href="be_pages_generic_profile.html">
                             <img class="img-avatar img-avatar32" src="../media/avatars/avatar15.jpg" alt="">
                         </a>
                         <a class="align-middle link-effect text-primary-dark font-w600" href="/">John Smith</a>
                     </div>
                  </div>
               </div>

               <!-- Side Content -->
               <div class="content-side">
                  <!-- Profile -->
                  <div class="block pull-r-l">
                     <div class="block-header bg-body-light">
                        <h3 class="block-title">
                           <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                        </h3>

                        <div class="block-options">
                           <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                        </div>
                     </div>

                     <div class="block-content">
                        <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                           <div class="form-group mb-15">
                              <label for="side-overlay-profile-name">Name</label>
                              <div class="input-group">
                                 <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                 <div class="input-group-append">
                                    <span class="input-group-text">
                                       <i class="fa fa-user"></i>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mb-15">
                              <label for="side-overlay-profile-email">Email</label>
                              <div class="input-group">
                                 <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">

                                 <div class="input-group-append">
                                    <span class="input-group-text">
                                       <i class="fa fa-envelope"></i>
                                    </span>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group mb-15">
                              <label for="side-overlay-profile-password">New Password</label>
                              <div class="input-group">
                                 <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                 <div class="input-group-append">
                                    <span class="input-group-text">
                                       <i class="fa fa-asterisk"></i>
                                    </span>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group mb-15">
                              <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                              <div class="input-group">
                                  <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                  <div class="input-group-append">
                                      <span class="input-group-text">
                                          <i class="fa fa-asterisk"></i>
                                      </span>
                                  </div>
                              </div>
                           </div>

                           <div class="form-group row">
                              <div class="col-6">
                                 <button type="submit" class="btn btn-block btn-alt-primary">
                                    <i class="fa fa-refresh mr-5"></i> Update
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>

                  <!-- END Profile -->

                    <!-- Settings -->
                    <!-- <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row gutters-tiny">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked="">
                                        <label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                        <label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked="">
                                        <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                        <label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked="">
                                        <label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                        <label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- END Settings -->
                </div>
                <!-- END Side Content -->
            </div>
         </div>
         </aside>

         <nav id="sidebar">
            <div class="sidebar-content">
               <div class="content-header content-header-fullrow px-15">
                  <div class="content-header-section sidebar-mini-visible-b">
                     <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                     </span>
                  </div>

                  <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                     <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                     </button>

                     <div class="content-header-item">
                        <a class="font-w700" href="/dashboard">
                           <img style="width: 80%;" src="../media/photos/DPI-logo.png">
                        </a>
                     </div>
                  </div>
               </div>

               <div class="content-side content-side-full content-side-user px-10 align-parent" style="margin-top: 33px;">
                  <div class="sidebar-mini-visible-b align-v animated fadeIn">
                     <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                  </div>

                  <div class="sidebar-mini-hidden-b text-center">
                     <a class="img-link" href="javascript:void(0)">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                     </a>

                     <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                           <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="javascript:void(0)">Accounts Officer</a>
                        </li>

                        <li class="list-inline-item">
                           <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                              <i class="si si-drop"></i>
                           </a>
                        </li>

                        <li class="list-inline-item">
                           <a class="link-effect text-dual-primary-dark" href="javascript:void(0)">
                              <i class="si si-logout"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>

               <div class="content-side content-side-full">
                  <ul class="nav-main">
                     <li>
                        <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                           <i class="fa fa-dashboard"></i><span class="sidebar-mini-hide">Dashboard</span>
                        </a>
                     </li>

                     <li>
                        <a href="/student">
                           <i class="si si-user fa-3x"></i><span class="sidebar-mini-hide">Students</span>
                        </a>
                     </li>



                      <li class="nav-main-heading">
                          <span class="sidebar-mini-visible">PE</span><span class="sidebar-mini-hidden">Payment Information</span>
                      </li>
                     <li>
                        <a href="{{route('payment.index')}}">
                           <i class="si si-bar-chart fa-3x"></i><span class="sidebar-mini-hide">All</span>
                        </a>
                     </li>

                      <li>
                          <a href="{{url('payment/payment-single')}}">
                              <i class="si si-bar-chart fa-3x"></i><span class="sidebar-mini-hide">Single Student</span>
                          </a>
                      </li>

                      <li>
                          <a href="{{url('payment/payment-technology')}}">
                              <i class="si si-bar-chart fa-3x"></i><span class="sidebar-mini-hide">Technology</span>
                          </a>
                      </li>



                     <li>
                        <a href="/admissions">
                           <i class="si si-users"></i><span class="sidebar-mini-hide">Admission </span>
                        </a>
                     </li>

                      <li class="nav-main-heading">
                          <span class="sidebar-mini-visible">Reports</span><span class="sidebar-mini-hidden">Payment Report</span>
                      </li>
                      <li>
                          <a href="{{route('payment-report.index')}}">
                              <i class="si si-users"></i><span class="sidebar-mini-hide">Student</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{route('payment-report.index')}}">
                              <i class="si si-users"></i><span class="sidebar-mini-hide">Technology</span>
                          </a>
                      </li>

                     <li class="nav-main-heading">
                        <span class="sidebar-mini-visible">VR</span><span class="sidebar-mini-hidden">Other information</span>
                     </li>

                      <li>
                          <a href="{{route('head.index')}}">
                              <i class="si si-layers"></i><span class="sidebar-mini-hide">Heads</span>
                          </a>
                      </li>

                      <li>
                          <a href="{{route('schema-master.index')}}">
                              <i class="si si-users"></i><span class="sidebar-mini-hide">Schema Master</span>
                          </a>
                      </li>

                      <li>
                          <a href="{{route('schema-detail.index')}}">
                              <i class="fa fa-money"></i><span class="sidebar-mini-hide">Schema Detail</span>
                          </a>
                      </li>

                     <li>
                        <a href="/technology">
                           <i class="si si-users"></i><span class="sidebar-mini-hide">Technology </span>
                        </a>
                     </li>

                     <li>
                        <a href="/semesters">
                           <i class="si si-users"></i><span class="sidebar-mini-hide">Semester </span>
                        </a>
                     </li>

                     <li>
                        <a href="/sessions">
                           <i class="si si-users"></i><span class="sidebar-mini-hide">Session </span>
                        </a>
                     </li>

                     <li class="nav-main-heading">
                        <span class="sidebar-mini-visible">MR</span><span class="sidebar-mini-hidden">Authentication</span>
                     </li>

                     <li>
                        <a href="/">
                           <i class="si si-globe"></i><span class="sidebar-mini-hide">Users</span>
                        </a>
                     </li>

                     <li>
                        <a href="/">
                           <i class="si si-globe"></i><span class="sidebar-mini-hide">Roles</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>

         <!-- Header -->
         <header id="page-header">
            <div class="content-header">
               <div class="content-header-section">
                  <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                     <i class="fa fa-navicon"></i>
                  </button>

                  <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                     <i class="fa fa-search"></i>
                  </button>

                  <div class="btn-group" role="group">
                     <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-wrench"></i>
                     </button>

                     <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                        <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
                        <h6 class="dropdown-header">Color Themes</h6>
                        <div class="row no-gutters text-center mb-5">

                           <div class="col-2 mb-5">
                              <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                 <i class="fa fa-2x fa-circle"></i>
                              </a>
                           </div>

                           <div class="col-2 mb-5">
                              <a class="text-elegance" data-toggle="theme" data-theme="/css/themes/elegance.css" href="javascript:void(0)">
                                 <i class="fa fa-2x fa-circle"></i>
                              </a>
                           </div>

                           <div class="col-2 mb-5">
                              <a class="text-pulse" data-toggle="theme" data-theme="/css/themes/pulse.css" href="javascript:void(0)">
                                 <i class="fa fa-2x fa-circle"></i>
                              </a>
                           </div>

                           <div class="col-2 mb-5">
                              <a class="text-flat" data-toggle="theme" data-theme="/css/themes/flat.css" href="javascript:void(0)">
                                 <i class="fa fa-2x fa-circle"></i>
                              </a>
                           </div>

                           <div class="col-2 mb-5">
                              <a class="text-corporate" data-toggle="theme" data-theme="/css/themes/corporate.css" href="javascript:void(0)">
                                 <i class="fa fa-2x fa-circle"></i>
                              </a>
                           </div>

                           <div class="col-2 mb-5">
                              <a class="text-earth" data-toggle="theme" data-theme="/css/themes/earth.css" href="javascript:void(0)">
                                 <i class="fa fa-2x fa-circle"></i>
                              </a>
                           </div>
                        </div>

                        <h6 class="dropdown-header">Header</h6>
                        <div class="row gutters-tiny text-center mb-5">
                           <div class="col-6">
                              <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                           </div>

                           <div class="col-6">
                              <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                           </div>
                        </div>


                        <h6 class="dropdown-header">Sidebar</h6>
                        <div class="row gutters-tiny text-center mb-5">
                           <div class="col-6">
                              <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_off">Light</button>
                           </div>

                           <div class="col-6">
                              <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_on">Dark</button>
                           </div>
                        </div>


                        <div class="d-none d-xl-block">
                           <h6 class="dropdown-header">Main Content</h6>
                           <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="content-header-section">
                  <div class="btn-group" role="group">
                     <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">Accounts</span>
                        <i class="fa fa-angle-down ml-5"></i>
                     </button>

                     <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                        <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                        <a class="dropdown-item" href="javascript:void(0)">
                           <i class="si si-user mr-5"></i> Profile
                        </a>

                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                           <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                           <span class="badge badge-primary">3</span>
                        </a>

                        <a class="dropdown-item" href="javascript:void(0)">
                           <i class="si si-note mr-5"></i> Invoices
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                           <i class="si si-wrench mr-5"></i> Settings
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                           <i class="si si-logout mr-5"></i> Sign Out
                        </a>
                     </div>
                  </div>

                  <div class="btn-group" role="group">
                     <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-flag"></i>
                        <span class="badge badge-primary badge-pill">5</span>
                     </button>

                     <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                        <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                        <ul class="list-unstyled my-20">
                           <li>
                              <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                 <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-check text-success"></i>
                                 </div>

                                 <div class="media-body pr-10">
                                    <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                    <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                 </div>
                              </a>
                           </li>

                           <li>
                              <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                 <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                 </div>

                                 <div class="media-body pr-10">
                                    <p class="mb-0">Please check your payment info since we can’t validate them!</p>
                                    <div class="text-muted font-size-sm font-italic">50 min ago</div>
                                 </div>
                              </a>
                           </li>

                           <li>
                              <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                 <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-times text-danger"></i>
                                 </div>

                                 <div class="media-body pr-10">
                                    <p class="mb-0">Web server stopped responding and it was automatically restarted!</p>
                                    <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                                 </div>
                              </a>
                           </li>

                           <li>
                              <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                 <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                 </div>

                                 <div class="media-body pr-10">
                                    <p class="mb-0">Please consider upgrading your plan. You are running out of space.</p>
                                    <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                                 </div>
                              </a>
                           </li>

                           <li>
                              <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                 <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-plus text-primary"></i>
                                 </div>

                                 <div class="media-body pr-10">
                                    <p class="mb-0">New purchases! +$250</p>
                                    <div class="text-muted font-size-sm font-italic">1 day ago</div>
                                 </div>
                              </a>
                           </li>
                        </ul>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                           <i class="fa fa-flag mr-5"></i> View All
                        </a>
                     </div>
                  </div>

                  <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                     <i class="fa fa-tasks"></i>
                  </button>
               </div>
            </div>


            <div id="page-header-search" class="overlay-header">
               <div class="content-header content-header-fullrow">
                  <form action="/dashboard" method="POST">
                     @csrf
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                              <i class="fa fa-times"></i>
                           </button>
                        </div>

                        <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        <div class="input-group-append">
                           <button type="submit" class="btn btn-secondary">
                              <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>

            <div id="page-header-loader" class="overlay-header bg-primary">
               <div class="content-header content-header-fullrow text-center">
                  <div class="content-header-item">
                     <i class="fa fa-sun-o fa-spin text-white"></i>
                  </div>
               </div>
            </div>
         </header>


         <main id="main-container">
            @yield('content')
         </main>


         <footer id="page-footer" class="opacity-0">
            <div class="content py-20 font-size-xs clearfix">
               <div class="float-right">
                  Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://bsdi-bd.org/" target="_blank">BSDI WEB TEAM</a>
               </div>
               <div class="float-left">
                  <a class="font-w600" href="#" target="_blank">DPI Accounts</a> &copy; <span class="js-year-copy"></span>
               </div>
            </div>
         </footer>
      </div>


      <!-- Codebase Core JS -->
      <script src="../js/codebase.core.min-3.2.js"></script>
      <script src="{{ mix('js/codebase.app.js') }}"></script>

      <!-- <script type="text/javascript" src="{{ asset('/js/codebase.core.min-3.2.js') }}"></script> -->
      <!-- <link href="" rel="stylesheet"> -->



      <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

      <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

      <script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/pages/be_tables_datatables.min.js"></script>

      <script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

      <script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>

      <script src="../js/plugins/chartjs/Chart.bundle.min.js"></script>
      <script src="../js/plugins/slick/slick.min.js"></script>

      <script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/flot/jquery.flot.min.js"></script>

      <script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/flot/jquery.flot.pie.min.js"></script>

      <script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/flot/jquery.flot.stack.min.js"></script>

      <script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
      <script type="text/javascript" src="js/pages/be_comp_charts.min.js"></script>
      <script src="../js/pages/be_pages_dashboard.min.js"></script>

      <script src="js/plugins/select2/js/select2.min.js"></script>

      <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>

      <script src="js/plugins/select2/js/select2.full.min.js"></script>
      <script>jQuery(function(){ Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>

      <!-- Laravel Scaffolding JS -->
      <script src="{{ mix('js/laravel.app.js') }}"></script>
      @yield('js_after')
   </body>
</html>
