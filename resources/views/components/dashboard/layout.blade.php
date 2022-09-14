<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>Metronic Live preview | Keenthemes</title>
    <meta name="description"
          content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets."/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="canonical" href="https://keenthemes.com/metronic"/>
    <!--begin::Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('dashboard/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('dashboard/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('dashboard/assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{asset('dashboard/assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('dashboard/assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('dashboard/assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('dashboard/assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css"/>






    @stack('styles')

    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{asset('dashboard/assets/media/logos/favicon.ico')}}"/>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body"
      class="subheader-enabled  aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <!--begin::Logo-->
    <a href="/">
        <img alt="Logo" src="{{asset('dashboard/assets/media/logos/logo-light.png')}}"/>
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left"
                id="kt_aside_mobile_toggle">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->

        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-2"
                id="kt_header_mobile_topbar_toggle">
     <span class="svg-icon svg-icon-xl">
      <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
      <svg xmlns="http://www.w3.org/2000/svg"
           xmlns:xlink="http://www.w3.org/1999/xlink"
           width="24px" height="24px"
           viewBox="0 0 24 24" version="1.1">
       <g stroke="none" stroke-width="1"
          fill="none"
          fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path
            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path
            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
            fill="#000000" fill-rule="nonzero"/>
       </g>
      </svg>
         <!--end::Svg Icon-->
     </span>
        </button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

        @include('dashboard.partials._aside')

        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">

                    <!--begin::Topbar-->
                    <div class="topbar ml-auto">
                        <!--begin::User-->
                        <div class="topbar-item">
                            <div
                                class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                id="kt_quick_user_toggle">
                                <span
                                    class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">أهلا,</span>
                                <span
                                    class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">الحسينى</span>
                                <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
           <span class="symbol-label font-size-h5 font-weight-bold">E</span>
          </span>
                            </div>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                {{$slot}}

            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1 ml-auto">
                        <span class="text-muted font-weight-bold mr-2">2020©</span>
                        <a href="" target="_blank"
                           class="text-dark-75 text-hover-primary">جميع الحقوق محفوظه لـ الحسينى</a>
                    </div>
                    <!--end::Copyright-->

                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">
            User Profile
            <a href="#"
               class="btn btn-xs btn-icon btn-light btn-hover-primary"
               id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label"
                     style="background-image:url('{{asset('dashboard/assets/media/users/300_21.jpg')}}')"></div>
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
                <div class="text-muted mt-1">Application Developer</div>
                <div class="navi mt-2">
                    <a href="#" class="navi-item">
        <span class="navi-link p-0 pb-2">
         <span class="navi-icon mr-1">
          <span class="svg-icon svg-icon-lg svg-icon-primary">
           <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
             <rect x="0" y="0" width="24" height="24"/>
             <path
                 d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                 fill="#000000"/>
             <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
            </g>
           </svg>
              <!--end::Svg Icon-->
          </span>
         </span>
         <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
        </span>
                    </a>
                    <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                </div>
            </div>
        </div>
        <!--end::Header-->


        <!--begin::Separator-->
        <div class="separator separator-dashed my-7"></div>
        <!--end::Separator-->

    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->


<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
   <span class="svg-icon">
    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
         viewBox="0 0 24 24" version="1.1">
     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <polygon points="0 0 24 0 24 24 0 24"/>
      <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
      <path
          d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
          fill="#000000" fill-rule="nonzero"/>
     </g>
    </svg>
       <!--end::Svg Icon-->
   </span>
</div>


<script src="{{asset('dashboard/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{asset('dashboard/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Theme Bundle-->




@stack('scripts')


</body>
<!--end::Body-->
</html>