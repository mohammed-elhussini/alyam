<x-dashboard.layout>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid"
         id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">أضف عضو</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="{{route('users.index')}}" class="text-muted">ألأعضاء</a>
                    </li>

                </ul>
                <!--end::Actions-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->

    <x-dashboard.wrap>

        <!--begin::Card-->
        <div class="card ">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form"
                  method="post"
                  action="{{route('users.store')}}"
                  enctype="multipart/form-data">
                @csrf
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-7 my-2">
                            <!--begin::Row-->
                            <div class="row">
                                <label class="col-3"></label>
                                <div class="col-9">
                                    <h6 class="text-dark font-weight-bold mb-10">بيانات العضو:</h6>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">الصورة الشخصية</label>
                                <div class="col-9">
                                    <div class="image-input image-input-outline @error('avatar') is-invalid @enderror"
                                         id="kt_image"
                                         style="background-image: url({{asset('dashboard/assets/media/users/blank.png') }})">
                                        <div class="image-input-wrapper"
                                             style="background-image: url('{{asset('dashboard/assets/media/users/blank.png') }}')"></div>

                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change"
                                            data-toggle="tooltip"
                                            title=""
                                            data-original-title="Change avatar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file"
                                                   name="avatar"
                                                   value="{{old('avatar')}}"
                                                   accept=".png, .jpg, .jpeg"/>
                                        </label>

                                        <span
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="cancel"
                                            data-toggle="tooltip"
                                            title="Cancel avatar">
                                          <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>

                                        <span
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="remove"
                                            data-toggle="tooltip"
                                            title="Remove avatar">
                                          <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                    </div>
                                    @error('avatar')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">الاسم</label>
                                <div class="col-9">
                                    <input
                                        class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror"
                                        type="text"
                                        name="name"
                                        placeholder="اسم المستخدم"
                                        value="{{old('name')}}">
                                    @error('name')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">الاسم الاول</label>
                                <div class="col-9">
                                    <input
                                        class="form-control form-control-lg form-control-solid @error('first_name') is-invalid @enderror"
                                        type="text"
                                        name="first_name"
                                        placeholder="اسم الاول"
                                        value="{{old('first_name')}}">
                                    @error('first_name')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">الاسم الاخير</label>
                                <div class="col-9">
                                    <input
                                        class="form-control form-control-lg form-control-solid @error('last_name') is-invalid @enderror"
                                        type="text"
                                        name="last_name"
                                        placeholder="الاسم الاخير"
                                        value="{{old('last_name')}}">
                                    @error('last_name')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">الجنسية</label>
                                <div class="col-9">
                                    <input
                                        class="form-control form-control-lg form-control-solid @error('nationality') is-invalid @enderror"
                                        type="text"
                                        name="nationality"
                                        placeholder="الجنسية"
                                        value="{{old('nationality')}}">
                                    @error('nationality')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label text-left col-lg-3 col-sm-12">تاريخ الميلاد</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group date">
                                        <input type="text"
                                               class="form-control kt_datepicker @error('birthday') is-invalid @enderror"
                                               readonly="readonly"
                                               placeholder="اختار التاريخ"
                                               name="birthday"
                                               value="{{old('nationality')}}"
                                        />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                        @error('birthday')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">الجوال</label>
                                <div class="col-9">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input type="text"
                                               class="form-control form-control-lg form-control-solid @error('phone') is-invalid @enderror"
                                               name="phone"
                                               value="{{old('phone')}}"
                                               placeholder="الجوال">
                                        <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-phone"></i>
																			</span>
                                        </div>
                                        @error('phone')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">رخصة القيادة</label>
                                <div class="col-9">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input type="text"
                                               class="form-control form-control-lg form-control-solid @error('driving_license') is-invalid @enderror"
                                               name="driving_license"
                                               value="{{old('driving_license')}}"
                                               placeholder="رخصة القيادة">
                                        @error('driving_license')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label text-left col-lg-3 col-sm-12">تاريخ انتهاء رخصه
                                    القيادة</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group date">
                                        <input type="text"
                                               class="form-control kt_datepicker @error('driving_license') is-invalid @enderror"
                                               readonly="readonly"
                                               placeholder="تاريخ الانتهاء"
                                               name="driving_license_exp"
                                               value="{{old('driving_license_exp')}}"
                                               id="">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                        @error('driving_license_exp')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">رقم الهوية</label>
                                <div class="col-9">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input type="text"
                                               class="form-control form-control-lg form-control-solid @error('id_number') is-invalid @enderror"
                                               name="id_number"
                                               value="{{old('id_number')}}"
                                               placeholder="رقم الهوية">
                                        @error('id_number')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">البريد الالكترونى</label>
                                <div class="col-9">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-at"></i>
                                            </span>
                                        </div>
                                        <input type="email"
                                               class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                               value="{{old('email')}}"
                                               name="email"
                                               placeholder="البريد الالكترونى">
                                        @error('email')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">كلمة المرور</label>
                                <div class="col-9">
                                    <input
                                        class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                        type="password"
                                        name="password"
                                        value="">
                                    @error('password')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">تاكيد كلمة المرور</label>
                                <div class="col-9">
                                    <input
                                        class="form-control form-control-lg form-control-solid @error('password_confirmation') is-invalid @enderror"
                                        type="password"
                                        name="password_confirmation"
                                        value="">
                                    @error('password_confirmation')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--begin::Card body-->
                <div class="card-footer bg-gray-100">
                    <button type="submit"
                            class="btn btn-primary btn-block font-weight-bolder">
                        حفظ
                    </button>
                </div>
            </form>
        </div>
        <!--end::Card-->

    </x-dashboard.wrap>

    @push('scripts')
        <script>
            jQuery(document).ready(function () {

                var avatar = new KTImageInput('kt_image');

                avatar.on('cancel', function (imageInput) {
                    swal.fire({
                        title: 'Image successfully canceled !',
                        type: 'success',
                        buttonsStyling: false,
                        confirmButtonText: 'Awesome!',
                        confirmButtonClass: 'btn btn-primary font-weight-bold'
                    });
                });

                avatar.on('change', function (imageInput) {
                    swal.fire({
                        title: 'Image successfully changed !',
                        type: 'success',
                        buttonsStyling: false,
                        confirmButtonText: 'Awesome!',
                        confirmButtonClass: 'btn btn-primary font-weight-bold'
                    });
                });

                avatar.on('remove', function (imageInput) {
                    swal.fire({
                        title: 'Image successfully removed !',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: 'Got it!',
                        confirmButtonClass: 'btn btn-primary font-weight-bold'
                    });
                });


                var arrows;
                if (KTUtil.isRTL()) {
                    arrows = {
                        leftArrow: '<i class="la la-angle-right"></i>',
                        rightArrow: '<i class="la la-angle-left"></i>'
                    }
                } else {
                    arrows = {
                        leftArrow: '<i class="la la-angle-left"></i>',
                        rightArrow: '<i class="la la-angle-right"></i>'
                    }
                }
                // input group layout for modal demo
                $('.kt_datepicker').datepicker({
                    rtl: KTUtil.isRTL(),
                    todayHighlight: true,
                    orientation: "bottom left",
                    templates: arrows
                });
            })

        </script>
    @endpush

</x-dashboard.layout>
