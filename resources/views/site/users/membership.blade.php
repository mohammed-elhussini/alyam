<x-site.layout>
    <div class="container py-4">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="text-center p-2 mb-3">
                    <a href="{{route('home')}}"><img src="{{asset('site/assets/img/dart-logo.png')}}"
                                                     class="img-fluid"/></a>
                </div>
                <div class="well mb-4">
                    <div class="tabsNav">
                        <ul>
                            <li class="active"><a href="#login">تسجيل الدخول</a></li>
                            <li><a href="#register">تسجيل جديد</a></li>
                        </ul>
                    </div>
                </div>
                <section class="tabsContent">
                    <div class="tabContent active" id="login">
                        <div class="text-center mb-4">
                            <div class="h5 mb-1 mainColor">مرحبا بك عملينا العزيز</div>
                            <p class="m-0">يمكنك تسجيل الدخول ومتابعة حجزك</p>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="well">
                            <form method="post"
                                  action="/users/login">
                                @csrf
                                <input id="login-intl-phone"
                                       class="form-control"
                                       type="email"
                                       placeholder="الجوال"
                                       name="email">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                                <div class="mt-3">
                                    <input class="form-control pass"
                                           type="password"
                                           placeholder="كلمة المرور"
                                           name="password">
                                    @error('password')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mt-3 d-flex justify-content-end">
                                    <a href="">هل نسيت كلمة المرور؟</a>
                                </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tabContent" id="register">
                        <div class="text-center mb-4">
                            <p class="m-0">يمكنك التسجيل بسهوله عن طريق ملئ البيانات التالية</p>
                        </div>
                        <div class="well">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post"
                                  action="/users/create"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control name"
                                               type="text"
                                               placeholder="الاسم المستخدم"
                                               name="name">
                                        @error('name')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control name"
                                               type="text"
                                               placeholder="الاسم الاول"
                                               name="first_name">
                                        @error('first_name')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control name"
                                               type="text"
                                               placeholder="الاسم الاخير"
                                               name="last_name">
                                        @error('last_name')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control name"
                                               type="text"
                                               placeholder="الجنسية"
                                               name="nationality">
                                        @error('nationality')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control date birthdate"
                                               type="date"
                                               placeholder="تاريخ الميلاد"
                                               name="birthday">
                                        @error('birthday')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input id="register-intl-phone"
                                               class="form-control"
                                               type="tel"
                                               placeholder="الجوال"
                                               name="phone">
                                        @error('phone')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control licence"
                                               type="text"
                                               placeholder="رخصية القيادة"
                                               name="driving_license">
                                        @error('driving_license')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control date birthdate"
                                               type="date"
                                               placeholder="تاريخ الانتهاء"
                                               name="driving_license_exp">
                                        @error('driving_license_exp')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control identy"
                                               type="text"
                                               placeholder="رقم الهوية"
                                               name="id_number">
                                        @error('id_number')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control identy"
                                               type="email"
                                               placeholder="البريد الالكترونى"
                                               name="email">
                                        @error('email')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                        <div class="fileUpload">
                                            <input type="file"
                                                   class="form-control"
                                                   id="fileUpload"
                                                   placeholder="صورة الهوية"
                                                   name="avatar"/>
                                            @error('avatar')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control pass"
                                               type="password"
                                               placeholder="كلمة المرور"
                                               name="password">
                                        @error('password')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control pass"
                                               type="password"
                                               placeholder="تأكيد كلمة المرور"
                                               name="password_confirmation">
                                        @error('password_confirmation')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">تسجيل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="carWithBg mt-5 mt-lg-0 p-5 ps-0 pb-3 vertical">
                    <div class="title h1 mr-0 mt-3">قيادة أمنه خدمة متميزه</div>
                    <div class="car"><img src="{{asset('site/assets/img/car.png')}}" class="img-fluid"/></div>
                </div>
            </div>
        </div>
    </div>
</x-site.layout>
