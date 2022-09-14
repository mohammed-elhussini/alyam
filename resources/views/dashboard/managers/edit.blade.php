<x-dashboard.layout>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid"
         id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">تعديل مدير - {{$manager->username}}</h5>
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
            <form method="post"
                  action="/admin/managers/{{$manager->id}}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Card body-->
                <div class="card-body">

                        <!--begin::Row-->
                        <div class="row justify-content-center">
                            <div class="col-xl-7 my-2">
                                <h4 class="card-label font-size-lg font-weight-bolder text-dark mb-10">بيانات المدير
                                    :</h4>
                                <!--end::Row-->
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-left text-left">الصورة الشخصية</label>
                                    <div class="col-9">
                                        <div class="image-input image-input-outline"
                                             id="kt_image"
                                             style="background-image: url({{asset('dashboard/assets/media/users/blank.png') }})">
                                            <div class="image-input-wrapper"
                                                 style="background-image: url({{$manager->avatar}})"></div>

                                            <label
                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                data-action="change"
                                                data-toggle="tooltip"
                                                title=""
                                                data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file"
                                                       name="avatar-file"
                                                       accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar"/>
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
                                    </div>

                                </div>
                                <!--end::Group-->
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-left text-left">الأسم المستخدم</label>
                                    <div class="col-9">
                                        <input class="form-control form-control-lg form-control-solid"
                                               type="text"
                                               name="username"

                                               value="{{$manager->username}}">
                                    </div>
                                </div>
                                <!--end::Group-->
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-left text-left">الأسم الاول</label>
                                    <div class="col-9">
                                        <input class="form-control form-control-lg form-control-solid"
                                               type="text"
                                               name="first_name"
                                               value="{{$manager->first_name}}">
                                    </div>
                                </div>
                                <!--end::Group-->
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-left text-left">الاسم الاخير</label>
                                    <div class="col-9">
                                        <input class="form-control form-control-lg form-control-solid"
                                               type="text"
                                               name="last_name"
                                               value="{{$manager->last_name}}">
                                    </div>
                                </div>
                                <!--end::Group-->
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-left text-left">الجوال</label>
                                    <div class="col-9">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   value="{{$manager->phone}}"
                                                   name="phone"
                                                   placeholder="الجوال">
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
                                                <span class="input-group-text"><i class="la la-at"></i></span>
                                            </div>
                                            <input type="email"
                                                   class="form-control form-control-lg form-control-solid"
                                                   value="{{$manager->email}}"
                                                   name="email"
                                                   placeholder="البريد الالكترونى">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-left text-left">كلمة المرور</label>
                                    <div class="col-9">
                                        <input class="form-control form-control-lg form-control-solid"
                                               type="password"
                                               name="password"
                                               value="">
                                    </div>
                                </div>
                                <!--end::Group-->
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-left text-left">تاكيد كلمة المرور</label>
                                    <div class="col-9">
                                        <input class="form-control form-control-lg form-control-solid"
                                               type="password"
                                               name="password_confirmation"
                                               value="">
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
        </script>

    @endpush

</x-dashboard.layout>
