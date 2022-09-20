<x-dashboard.layout>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid"
         id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">أضف مدير</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">الإدارة</a>
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

            <form method="post"
                  action="{{route('managers.store')}}"
                  enctype="multipart/form-data">
                @csrf
                <!--begin::Card body-->
                <div class="card-body">

                    <!--begin::Row-->
                    <div class="row justify-content-center">
                        <div class="col-xl-7 my-2">
                            <h4 class="card-label font-size-lg font-weight-bolder text-dark mb-10">
                                بيانات المدير :
                            </h4>
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
                                <label class="col-form-label col-3 text-lg-left text-left">الأسم المستخدم</label>
                                <div class="col-9">
                                    <input class="form-control form-control-lg form-control-solid @error('username') is-invalid @enderror"
                                           type="text"
                                           name="username"
                                           placeholder="الأسم المستخدم"
                                           value="{{old('username')}}">
                                    @error('username')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">الأسم الاول</label>
                                <div class="col-9">
                                    <input class="form-control form-control-lg form-control-solid @error('first_name') is-invalid @enderror"
                                           type="text"
                                           name="first_name"
                                           placeholder="الأسم الاول"
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
                                    <input class="form-control form-control-lg form-control-solid @error('last_name') is-invalid @enderror"
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
                                <label class="col-form-label col-3 text-lg-left text-left">الجوال</label>
                                <div class="col-9">
                                    <div class="input-group input-group-lg input-group-solid @error('phone') is-invalid @enderror">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                               name="phone"
                                               placeholder="الجوال"
                                               value="{{old('phone')}}">
                                    </div>
                                    @error('phone')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">البريد الالكترونى</label>
                                <div class="col-9">
                                    <div class="input-group input-group-lg input-group-solid @error('email') is-invalid @enderror">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-at"></i></span>
                                        </div>
                                        <input type="email"
                                               class="form-control form-control-lg form-control-solid"
                                               value="{{old('email')}}"
                                               name="email"
                                               placeholder="البريد الالكترونى">
                                    </div>
                                    @error('email')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-left text-left">كلمة المرور</label>
                                <div class="col-9">
                                    <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
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
                                    <input class="form-control form-control-lg form-control-solid @error('password_confirmation') is-invalid @enderror"
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
            });
        </script>

    @endpush

</x-dashboard.layout>
