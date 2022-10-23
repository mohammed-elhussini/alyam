<x-site.layout>
    <div class="pageHeader py-5">
        <div class="container">
            <div class="h2 text-center">{{auth()->user()->name}}</div>
        </div>
    </div>
    <div class="container">
        <div class="well mb-4">
            <div class="tabsNav">
                <ul>
                    <li class="active">
                        <a href="#profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.812" height="29.39"
                                 viewBox="0 0 26.812 29.39">
                                <g id="Iconly_Curved_Paper" data-name="Iconly/Curved/Paper"
                                   transform="translate(-30.9 63)">
                                    <g id="Paper" transform="translate(31.65 -62.25)">
                                        <path id="Stroke_3" data-name="Stroke 3"
                                              d="M24.89,8.367,16.342.226A27.436,27.436,0,0,0,12.648,0C3.166,0,0,3.5,0,13.945,0,24.407,3.166,27.89,12.648,27.89c9.5,0,12.663-3.482,12.663-13.945A31.727,31.727,0,0,0,24.89,8.367Z"
                                              transform="translate(0)" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5"/>
                                        <path id="Stroke_5" data-name="Stroke 5"
                                              d="M0,0V4.012a5.07,5.07,0,0,0,5.071,5.07H9.52"
                                              transform="translate(15.504 0.125)" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                        <g id="Iconly_Curved_Profile" data-name="Iconly/Curved/Profile"
                                           transform="translate(8.217 9.206)">
                                            <g id="Profile" transform="translate(0 0)">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                      d="M4.439,4.734C2.045,4.734,0,4.362,0,2.87S2.032,0,4.439,0,8.878,1.364,8.878,2.856,6.846,4.734,4.439,4.734Z"
                                                      transform="translate(0 7.758)" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-miterlimit="10"
                                                      stroke-width="1.5"/>
                                                <path id="Stroke_3-2" data-name="Stroke 3"
                                                      d="M2.845,5.69a2.835,2.835,0,1,0-.02,0Z"
                                                      transform="translate(1.589 0)" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-miterlimit="10"
                                                      stroke-width="1.5"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            البيانات الشخصية
                        </a></li>
                    <li>
                        <a href="#hogozaty">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.812" height="28.791"
                                 viewBox="0 0 26.812 28.791">
                                <g id="Iconly_Curved_Calendar" data-name="Iconly/Curved/Calendar"
                                   transform="translate(-403 -6.3)">
                                    <g id="Calendar" transform="translate(403.75 7.05)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M0,12.655C0,3.163,3.164,0,12.655,0S25.312,3.163,25.312,12.655,22.147,25.31,12.655,25.31,0,22.147,0,12.655Z"
                                              transform="translate(0 1.981)" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Stroke_3" data-name="Stroke 3" d="M0,.5H24.574"
                                              transform="translate(0.376 9.426)" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Stroke_17" data-name="Stroke 17" d="M.5,0V4.451"
                                              transform="translate(17.626 0)" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Stroke_19" data-name="Stroke 19" d="M.5,0V4.451"
                                              transform="translate(6.698 0)" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Stroke_1-2" data-name="Stroke 1" d="M7.369.5H0"
                                              transform="translate(8.972 20.055)" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Stroke_2" data-name="Stroke 2" d="M4.58.5H0"
                                              transform="translate(8.971 14.581)" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"/>
                                    </g>
                                </g>
                            </svg>
                            حجوزاتي
                        </a></li>
                </ul>
            </div>
        </div>
        <section class="tabsContent mb-5">
            <div class="tabContent active" id="profile">
                <div class="well" id="darkFields">
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
                          action="/profile/update"
                          enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="pickImg">
                            <input type="file" name="avatar">
                            <img
                                src="{{auth()->user()->avatar ? asset('storage/'.auth()->user()->avatar) : asset('dashboard/assets/media/users/blank.png') }}"/>
                            @error('avatar')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="name">الاسم الاول</label>
                                <input class="form-control name"
                                       type="text"
                                       name="first_name"
                                       value="{{auth()->user()->first_name}}">
                                @error('first_name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="name">الاسم الاخير</label>
                                <input class="form-control name"
                                       type="text"
                                       name="last_name"
                                       value="{{auth()->user()->last_name}}">
                                @error('last_name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="name">الجنسية</label>
                                <input class="form-control name"
                                       type="text"
                                       name="nationality"
                                       value="{{auth()->user()->nationality}}">
                                @error('nationality')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="name">العنوان الوطني</label>
                                <input class="form-control licence"
                                       type="text"
                                       name="id_number"
                                       value="{{auth()->user()->id_number }}">
                                @error('id_number')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="name">الهاتف</label>
                                <input id="register-intl-phone"
                                       class="form-control"
                                       type="tel"
                                       name="phone"
                                       value="{{auth()->user()->phone}}">
                                @error('phone')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="name">تاريخ الميلاد</label>
                                <input class="form-control birthdate"
                                       type="date"
                                       name="birthday"
                                       value="{{auth()->user()->birthday}}">
                                @error('birthday')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="name">رخصة القيادة</label>
                                <input class="form-control licence"
                                       type="text"
                                       name="driving_license"
                                       value="{{auth()->user()->driving_license }}">
                                @error('driving_license')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="name">تاريخ الانتهاء</label>
                                <input class="form-control birthdate"
                                       type="date" onfocus="(this.type='date')"
                                       name="driving_license_exp"
                                       value="{{auth()->user()->driving_license_exp}}">
                                @error('driving_license_exp')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="name">كلمة المرور</label>
                                <input class="form-control pass"
                                       name="password"
                                       type="password">
                                @error('password')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="name">تأكيد كلمة المرور</label>
                                <input class="form-control pass"
                                       type="password"
                                       name="password_confirmation">
                                @error('password_confirmation')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tabContent" id="hogozaty">
                <div class="hagz mb-3">
                    <div class="carWell">
                        <img src="assets/img/slide.png"/>
                        <div class="title">
                            <strong>حجز رقم #456</strong>
                            <span>تويوتا كامري</span>
                            <span>A345-2021</span>
                        </div>
                    </div>
                    <div>
                        <div class="carWidget mb-3">
                            <img src="assets/img/route.png" width="32" height="32"/>
                            <div>
                                <span>موقع الاستلام</span>
                                <span>الرياض,مطار الرياض</span>
                            </div>
                        </div>
                        <div class="carWidget">
                            <img src="assets/img/birthdate.svg" width="32" height="32"/>
                            <div>
                                <span>تاريخ الاستلام</span>
                                <span>السبت,25/9/2021</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="carWidget mb-3">
                            <img src="assets/img/route.png" width="32" height="32"/>
                            <div>
                                <span>موقع الاستلام</span>
                                <span>الرياض,مطار الرياض</span>
                            </div>
                        </div>
                        <div class="carWidget">
                            <img src="assets/img/birthdate.svg" width="32" height="32"/>
                            <div>
                                <span>تاريخ الاستلام</span>
                                <span>السبت,25/9/2021</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="" class="btn btn-sm btn-primary">تنفيذ الحجز</a>
                        <a href="" class="btn btn-sm alert-danger">الغاء الحجز</a>
                    </div>
                </div>
                <div class="hagz mb-3">
                    <div class="carWell">
                        <img src="assets/img/slide.png"/>
                        <div class="title">
                            <strong>حجز رقم #456</strong>
                            <span>تويوتا كامري</span>
                            <span>A345-2021</span>
                        </div>
                    </div>
                    <div>
                        <div class="carWidget mb-3">
                            <img src="assets/img/route.png" width="32" height="32"/>
                            <div>
                                <span>موقع الاستلام</span>
                                <span>الرياض,مطار الرياض</span>
                            </div>
                        </div>
                        <div class="carWidget">
                            <img src="assets/img/birthdate.svg" width="32" height="32"/>
                            <div>
                                <span>تاريخ الاستلام</span>
                                <span>السبت,25/9/2021</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="carWidget mb-3">
                            <img src="assets/img/route.png" width="32" height="32"/>
                            <div>
                                <span>موقع الاستلام</span>
                                <span>الرياض,مطار الرياض</span>
                            </div>
                        </div>
                        <div class="carWidget">
                            <img src="assets/img/birthdate.svg" width="32" height="32"/>
                            <div>
                                <span>تاريخ الاستلام</span>
                                <span>السبت,25/9/2021</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="" class="btn btn-sm btn-primary">تنفيذ الحجز</a>
                        <a href="" class="btn btn-sm alert-danger">الغاء الحجز</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-site.layout>
