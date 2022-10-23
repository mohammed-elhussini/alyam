<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="{{asset('site/assets/img/favicon.png')}}" type="image/png">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('site/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/assets/fonts/fonts.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{asset('site/assets/css/style.css')}}">
    <script src="{{asset('site/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('site/assets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('site/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!--only for page like this-->
    <script src="{{asset('site/assets/js/range.js')}}"></script>
    <!--only for page like this-->
    <!--only for map locations-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0ZqKp9G_Bi9ytfGh-Al2Bxx2e8wLQK7A"></script>
    <script src="{{asset('site/assets/js/map_branches.js')}}"></script>
    <!--only for map locations-->
</head>
<body {{Route::current()->getName() == 'home' ? 'class=noBackground' : ''}} >


<x-site.flash-message/>

<header id="header" {{Route::current()->getName() != 'home' ? 'class=white' : ''}} >
    <div class="container">
        <div class="d-flex flex-wrap align-items-center">
            <a class="logo ms-5"
               href="#">
                <img src="{{asset('site/assets/img/dart-logo.png')}}"/>
            </a>
            <div class="headerContent">
                <div class="menu ms-auto">
                    <ul>
                        <li><a href="#">الرئيسية</a></li>
                        <li><a href="#">حجز سيارة</a></li>
                        <li><a href="#">الفروع</a></li>
                        <li><a href="#">اسطولنا</a></li>
                        <li><a href="#">من نحن</a></li>
                        <li><a href="{{route('contact')}}">اتصل بنا</a></li>
                        @guest
                        <li><a href="{{route('login')}}">العضوية</a></li>
                        @endguest
                    </ul>
                </div>

                @auth()
                <div class="dropdown me-2" id="user">
                    <button class="btn btn-secondary dropdown-toggle btn-sm"
                            type="button"
                            id="userDown"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                        <img src="{{auth()->user()->avatar ? asset('storage/'.auth()->user()->avatar) : asset('dashboard/assets/media/users/blank.png') }}" />
                    </button>
                    <ul class="dropdown-menu"
                        aria-labelledby="userDown">
                        <li>
                            <a class="dropdown-item"
                               href="{{route('profile')}}">
                               {{auth()->user()->name}}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="#">
                                حجوزاتى
                            </a>
                        </li>
                        <li>
                            <form class="dropdown-item"
                                  method="post"
                                  action="/logout">
                                @csrf
                                <button class="btn btn-sm btn-danger"
                                        type="submit">
                                    تسجيل خروج
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                <a href="{{route('login')}}"
                   class="btn btn-primary btn-sm">
                    تسجيل الدخول
                </a>
                @endauth
            </div>
            <button type="button"
                    class="btn btn-primary btn-sm me-auto"
                    id="openMenu"><i class="fa-solid fa-bars fa-lg"></i>
            </button>
        </div>
    </div>
</header>

{{$slot}}

<footer id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12"
                 id="footerInfo">
                <img src="{{asset('site/assets/img/logo-white.png')}}"/>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                    يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                    التطبيق.
                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص</p>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <ul class="footerMenu">
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                    <li><a href="#">حجز سيارة</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyRights">
        <div class="container">
            <p class="m-0">جميع الحقوق محفوظة لموقع اليم العربي لتأجير السيارات</p>
        </div>
    </div>
</footer>
<script src="{{asset('site/assets/js/main.js')}}"></script>
</body>
</html>
