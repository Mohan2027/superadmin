<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Kasplo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('svg/kasplo-favicon.svg') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <script>
      // Frame-busting to prevent the site from being loaded within a frame without permission (click-jacking)
      if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
    
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="app-blank app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
      var defaultThemeMode = "light";
      var themeMode;
      if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
          themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
          if (localStorage.getItem("data-bs-theme") !== null) {
            themeMode = localStorage.getItem("data-bs-theme");
          } else {
            themeMode = defaultThemeMode;
          }
        }
        if (themeMode === "system") {
          themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
      }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
      <!--begin::Authentication - Sign-in -->
      <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center" style="background: url('{{ asset('images/misc/auth-bg.png') }}')">
          <!--begin::Content-->
          <div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
            <!--begin::Logo-->
            <a href="index.html" class="mb-0 mb-lg-20">
            <img alt="Kasplo Logo" src="{{ asset('images/logo/Kasplo_logo_White.svg') }}" class="h-40px h-lg-50px" />

            </a>
            <!--end::Logo-->
            <!--begin::Image-->
            <img alt="Auth Screens" class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20" src="{{ asset('images/misc/auth-screens.png') }}" />

            <!--begin::Title-->
            <h1 class="d-none d-lg-block text-white fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
            <!--end::Title-->
            <!--begin::Text-->
            <div class="d-none d-lg-block text-white fs-base text-center">
              In this kind of post,
              <a href="#" class="opacity-75-hover text-warning fw-semibold me-1">the blogger</a>
              introduces a person they’ve interviewed <br />and provides some background information about
              <a href="#" class="opacity-75-hover text-warning fw-semibold me-1">the interviewee</a>and their <br />work following this is a transcript of the interview.
            </div>
            <!--end::Text-->
          </div>
          <!--end::Content-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
          <!--begin::Form-->
          <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10">
    

  <!-- Display login errors -->
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
@endif





              <!--begin::Form-->
              <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="/dashboard" action="{{ route('auth.postLogin') }}" method="POST">
                <!--begin::Heading-->
                <div class="text-center mb-11">
                  <!--begin::Title-->
                  <h1 class="text-gray-900 fw-bolder mb-3">Sign In</h1>
                </div>

                <!--end::Separator-->
                <!--begin::Input group=-->
                <div class="fv-row mb-8">
                  <!--begin::Email-->
                  <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                  <!--end::Email-->
                </div>
                <!--end::Input group=-->
                <div class="fv-row mb-3">
                  <!--begin::Password-->
                  <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
                  <!--end::Password-->
                </div>
                <!--end::Input group=-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                  <div></div>
                  <!--begin::Link-->
                  <a href="authentication/layouts/corporate/reset-password.html" class="link-primary">Forgot Password ?</a>
                  <!--end::Link-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                  <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Sign In</span>
                    <!--end::Indicator label-->
                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">Please wait...<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    <!--end::Indicator progress-->
                  </button>
                </div>
                <!--end::Submit button-->
                <!--begin::Sign up-->

                <!--end::Sign up-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Form-->
          <!--begin::Footer-->

          <!--end::Footer-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
      var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ mix('js/app.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('js/sign-in/general.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
