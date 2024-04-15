<head>
   <base />
   <title>Kasplo</title>
   <meta charset="utf-8" />
   <meta name="description" content="" />
   <meta name="keywords" content="" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta property="og:locale" content="en_US" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="" />
   <meta property="og:url" content="" />
   <meta property="og:site_name" content="" />
   <link rel="canonical" href="" />
   <link rel="shortcut icon" href="{{ asset('') }}" />
   <style>
         .filter-imp label {
         font-size: 12px;
         font-weight: 400;
         }
         .filter-imp .form-label {
         margin-bottom: 0px !important;
         }
      </style>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
   <!--begin::Fonts(mandatory for all pages)-->
   <link href=" {{ mix('css/app.css') }}" rel="stylesheet" type="text/css"/>
   <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
      />
   <script>
      // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
   </script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body
   id="kt_app_body"
   data-kt-app-layout="dark-sidebar"
   data-kt-app-header-fixed="true"
   data-kt-app-sidebar-enabled="true"
   data-kt-app-sidebar-fixed="true"
   data-kt-app-sidebar-hoverable="true"
   data-kt-app-sidebar-push-header="true"
   data-kt-app-sidebar-push-toolbar="true"
   data-kt-app-sidebar-push-footer="true"
   data-kt-app-toolbar-enabled="true"
   class="app-default"
   >
   <!--begin::Theme mode setup on page load-->
   <script>
      var defaultThemeMode = "light";
      var themeMode;
      if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
          themeMode =
            document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
          if (localStorage.getItem("data-bs-theme") !== null) {
            themeMode = localStorage.getItem("data-bs-theme");
          } else {
            themeMode = defaultThemeMode;
          }
        }
        if (themeMode === "system") {
          themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
      }
   </script>
   <!--end::Theme mode setup on page load-->
   <!--begin::App-->
   <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
   <!--begin::Page-->
   <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
   <!--begin::Header-->
   <div id="kt_app_header" class="app-header">
      <!--begin::Header container-->
      <div
         class="app-container container-fluid d-flex align-items-stretch justify-content-between"
         id="kt_app_header_container"
         >
         <!--begin::sidebar mobile toggle-->
         <div
            class="d-flex align-items-center d-lg-none ms-n3 me-2"
            title="Show sidebar menu"
            >
            <div
               class="btn btn-icon btn-active-color-primary w-35px h-35px"
               id="kt_app_sidebar_mobile_toggle"
               >
               <i class="ki-duotone ki-abstract-14 fs-1">
               <span class="path1"></span>
               <span class="path2"></span>
               </i>
            </div>
         </div>
         <!--end::sidebar mobile toggle-->
         <!--begin::Mobile logo-->
         <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="/dashboard" class="d-lg-none">
            <img
               alt="Logo"
               src="{{ asset('images/logo/Kasplo_logo_White.svg') }}"
               class="theme-light-show h-30px"
               />
            <img
               alt="Logo"
               src="https://d38gj9m88htzb.cloudfront.net/kasplo_website/assets/img/brand/Kasplo_logo_White.svg"
               class="theme-dark-show h-30px"
               />
            </a>
         </div>
         <!--end::Mobile logo-->
         <!--begin::Header wrapper-->
         <div
            class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
            id="kt_app_header_wrapper"
            >
            <!--begin::Menu wrapper-->
            <div
               class="app-header-menu app-header-mobile-drawer align-items-stretch"
               data-kt-drawer="true"
               data-kt-drawer-name="app-header-menu"
               data-kt-drawer-activate="{default: true, lg: false}"
               data-kt-drawer-overlay="true"
               data-kt-drawer-width="225px"
               data-kt-drawer-direction="end"
               data-kt-drawer-toggle="#kt_app_header_menu_toggle"
               data-kt-swapper="true"
               data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
               data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
               >
               <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
               <div class="app-navbar-item ms-1 ms-lg-3">
                  <!--begin::Menu toggle-->
                  <a
                     href="#"
                     class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                     data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                     data-kt-menu-attach="parent"
                     data-kt-menu-placement="bottom-end"
                     >
                  <i class="ki-duotone ki-night-day theme-light-show fs-1">
                  <span class="path1"></span>
                  <span class="path2"></span>
                  <span class="path3"></span>
                  <span class="path4"></span>
                  <span class="path5"></span>
                  <span class="path6"></span>
                  <span class="path7"></span>
                  <span class="path8"></span>
                  <span class="path9"></span>
                  <span class="path10"></span>
                  </i>
                  <i class="ki-duotone ki-moon theme-dark-show fs-1">
                  <span class="path1"></span>
                  <span class="path2"></span>
                  </i>
                  </a>
                  <!--begin::Menu toggle-->
                  <!--begin::Menu-->
                  <div
                     class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                     data-kt-menu="true"
                     data-kt-element="theme-mode-menu"
                     >
                     <!--begin::Menu item-->
                     <div class="menu-item px-3 my-0">
                        <a
                           href="#"
                           class="menu-link px-3 py-2"
                           data-kt-element="mode"
                           data-kt-value="light"
                           >
                        <span class="menu-icon" data-kt-element="icon">
                        <i class="ki-duotone ki-night-day fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
                        <span class="path9"></span>
                        <span class="path10"></span>
                        </i>
                        </span>
                        <span class="menu-title">Light</span>
                        </a>
                     </div>
                     <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3 my-0">
                        <a
                           href="#"
                           class="menu-link px-3 py-2"
                           data-kt-element="mode"
                           data-kt-value="dark"
                           >
                        <span class="menu-icon" data-kt-element="icon">
                        <i class="ki-duotone ki-moon fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        </i>
                        </span>
                        <span class="menu-title">Dark</span>
                        </a>
                     </div>
                     <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3 my-0">
                        <a
                           href="#"
                           class="menu-link px-3 py-2"
                           data-kt-element="mode"
                           data-kt-value="system"
                           >
                        <span class="menu-icon" data-kt-element="icon">
                        <i class="ki-duotone ki-screen fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        </i>
                        </span>
                        <span class="menu-title">System</span>
                        </a>
                     </div>
                     <!--end::Menu item-->
                  </div>
                  <!--end::Menu-->
               </div>
               <!--end::Theme mode-->
               <!--begin::User menu-->
               <div
                  class="app-navbar-item ms-2 ms-1 ms-lg-3"
                  id="kt_header_user_menu_toggle"
                  >
                  <!--begin::Menu wrapper-->
                  <div
                     class="cursor-pointer symbol symbol-35px symbol-md-40px"
                     data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                     data-kt-menu-attach="parent"
                     data-kt-menu-placement="bottom-end"
                     >
                     <img src="{{ asset('images/avatars/300-3.jpg') }}" alt="user" />
                  </div>
                  <!--begin::User account menu-->
                  <div
                     class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                     data-kt-menu="true"
                     >
                     <!--begin::Menu item-->
                     <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                           <!--begin::Avatar-->
                           <div class="symbol symbol-50px me-5">
                              <img alt="Logo" src="{{ asset('images/avatars/300-3.jpg') }}" />
                           </div>
                           <!--end::Avatar-->
                           <!--begin::Username-->
                           <div class="d-flex flex-column">
                              @auth
                              <div class="fw-bold d-flex align-items-center fs-5">
                                 {{ auth()->user()->name }}
                              </div>
                              <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
                              @else
                              <!-- Display something when the user is not logged in -->
                              <div class="fw-bold d-flex align-items-center fs-5">
                                 please login
                              </div>
                              <a href="#" class="fw-semibold text-muted text-hover-primary fs-7"></a>
                              @endauth
                           </div>
                           <!--end::Username-->
                        </div>
                     </div>
                     <div class="menu-item px-5">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="menu-link px-5">
                        <i class="fas fa-sign-out-alt" style="color: red; margin-right: 5px;"></i> Sign Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                     </div>
                  </div>
               </div>
               <div
                  class="app-navbar-item d-lg-none ms-2 me-n2"
                  title="Show header menu"
                  >
                  <div
                     class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                     id="kt_app_header_menu_toggle"
                     >
                     <i class="ki-duotone ki-element-4 fs-1">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     </i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
   <div
      id="kt_app_sidebar"
      class="app-sidebar flex-column"
      data-kt-drawer="true"
      data-kt-drawer-name="app-sidebar"
      data-kt-drawer-activate="{default: true, lg: false}"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="225px"
      data-kt-drawer-direction="start"
      data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
      >
      <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
         <a href="/accounts">
         <img
            alt="Logo"
            src="https://d38gj9m88htzb.cloudfront.net/kasplo_website/assets/img/brand/Kasplo_logo_White.svg"
            class="h-30px app-sidebar-logo-default"
            />
         </a>
         <div
            id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-sm h-30px w-30px rotate"
            data-kt-toggle="true"
            data-kt-toggle-state="active"
            data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize"
            >
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
            <span class="path1"></span>
            <span class="path2"></span>
            </i>
         </div>
      </div>
      <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
         <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <div
               id="kt_app_sidebar_menu_scroll"
               class="hover-scroll-y my-5 mx-3"
               data-kt-scroll="true"
               data-kt-scroll-activate="true"
               data-kt-scroll-height="auto"
               data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
               data-kt-scroll-wrappers="#kt_app_sidebar_menu"
               data-kt-scroll-offset="5px"
               data-kt-scroll-save-state="true"
               >
               <div
                  class="menu menu-column menu-rounded menu-sub-indention fw-semibold"
                  id="#kt_app_sidebar_menu"
                  data-kt-menu="true"
                  data-kt-menu-expand="false"
                  >
                  <div class="menu-item">
                     <a class="menu-link" href="/dashboard">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-category fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     <span class="path3"></span>
                     <span class="path4"></span>
                     </i>
                     </span>
                     <span class="menu-title">Dashboard</span>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link" href="/accounts">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-educare fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     <span class="path3"></span>
                     <span class="path4"></span>
                     </i>
                     </span>
                     <span class="menu-title">Accounts</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--begin::Main-->