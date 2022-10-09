<x-dashboard.layout>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid"
         id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">أضف سيارة</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="{{route('cars.index')}}" class="text-muted">السيارات</a>
                    </li>

                </ul>
                <!--end::Actions-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->
    <x-dashboard.wrap>

        <div class="card">
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
                  action="{{route('cars.store')}}"
                  enctype="multipart/form-data"
            >
                @csrf
                <!--begin::Body-->
                <div class="card-body">
                    <div class="form-group w-100">
                        <label class="card-label font-size-lg font-weight-bolder text-dark">العنوان</label>
                        <input type="text"
                               class="form-control form-control-solid @error('name') is-invalid @enderror"
                               value="{{old('name')}}"
                               name="name"
                               placeholder="إسم السيارة">
                        @error('name')
                        <div class="form-text invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group w-100">
                        <label class="card-label font-weight-bolder text-dark">الوصف المختصر</label>
                        <textarea name="except"
                                  class="form-control @error('except') is-invalid @enderror">{{old('except')}}</textarea>
                        @error('except')
                        <div class="form-text invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group w-100">
                        <label class="card-label font-weight-bolder text-dark">الوصف</label>
                        <textarea name="description"
                                  class="@error('description') is-invalid @enderror"
                                  id="kt-ckeditor">{{old('description')}}</textarea>
                        @error('description')
                        <div class="form-text invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group w-100">
                        <label class="card-label font-size-lg font-weight-bolder text-dark">الموديل</label>
                        <input type="text"
                               class="form-control form-control-solid @error('model') is-invalid @enderror"
                               value="{{old('model')}}"
                               placeholder="SKU">
                        @error('model')
                        <div class="form-text invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group w-100">
                        <label class="card-label font-weight-bolder text-dark">سنة التصنيع</label>
                        @php
                            $firstYear = (int)date('Y') - 84;
                            $lastYear =  now()->year;
                        @endphp
                        <select class="form-control select2  @error('manufacture') is-invalid @enderror"
                                data-placeholder="سنة التصنيع"
                                name="manufacture">
                            <option value=""></option>
                            @php
                                for($i=$firstYear ;$i<=$lastYear;$i++) {
                            @endphp
                            <option value="@php echo $i @endphp">
                                @php echo $i @endphp
                            </option>
                            @php } @endphp
                        </select>
                        @error('manufacture')
                        <div class="form-text invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-group w-100">
                        <label class="card-label font-weight-bolder text-dark">الماركة</label>
                        <select class="form-control select2 @error('brand_id') is-invalid @enderror"
                                data-placeholder="ماركة السيارة"
                                name="brand_id ">
                            <option value=""></option>
                            @foreach($brabds as $brabd)
                            <option value="{{$brabd->id}}">{{$brabd->title}}</option>
                            @endforeach
                        </select>
                        @error('brand_id')
                        <div class="form-text invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-group w-100">
                        <label class="card-label font-weight-bolder text-dark">سعر السيارة</label>
                        <input type="number"
                               class="form-control @error('price') is-invalid @enderror"
                               name="price"
                               placeholder="السعر"/>
                        @error('price')
                        <div class="form-text invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group w-100">
                        <label class="card-label font-weight-bolder text-dark">الضريبة</label>

                        <select class="form-control select2 @error('tax_id') is-invalid @enderror"
                                data-placeholder="اختار الضريبة المناسبة"
                                name="tax_id ">
                            <option value=""></option>
                            @foreach($taxes as $tax)
                            <option value="{{$tax->id}}">{{$tax->name}}</option>
                            @endforeach
                        </select>
                        @error('tax_id')
                        <div class="form-text invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-left text-left">الصورة الشخصية</label>
                        <div class="col-9">
                            <div class="image-input image-input-outline @error('picture') is-invalid @enderror"
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
                                           value="{{old('picture')}}"
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
                            @error('picture')
                            <div class="form-text invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group w-100">
                        <div id="kt_repeater_3">
                            <div class="form-group">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">الصور</label>
                                <div data-repeater-list="">
                                    <div data-repeater-item class="form-group row justify-content-between">
                                        <div class="col-lg-10">
                                            <input type="file"
                                                   name=""
                                                   accept=".png, .jpg, .jpeg"/>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="اسم وصف الصورة">
                                            </div>

                                        </div>

                                        <div class="col-lg-2">
                                            <a href="javascript:void(0)"
                                               data-repeater-delete=""
                                               class="btn font-weight-bold btn-danger btn-icon">
                                                <i class="la la-remove"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">

                                <div data-repeater-create=""
                                     class="btn font-weight-bold btn-primary">
                                    <i class="la la-plus"></i>
                                    إضافة
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::Body-->

                <div class="card-footer bg-gray-100">
                    <button type="submit"
                            class="btn btn-primary btn-block font-weight-bolder">
                        حفظ
                    </button>
                </div>
            </form>
        </div>

    </x-dashboard.wrap>

    @push('scripts')

        <script src="{{asset('dashboard/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
        {{--        <script src="{{asset('dashboard/assets/js/pages/crud/forms/editors/ckeditor-classic.js')}}"></script>--}}

        <script>
            // Class definition

            var KTCkeditor = function () {
                // Private functions
                var demos = function () {
                    ClassicEditor
                        .create(document.querySelector('#kt-ckeditor'))
                        .then(editor => {
                            console.log(editor);
                        })
                        .catch(error => {
                            console.error(error);
                        });
                }

                return {
                    // public functions
                    init: function () {
                        demos();
                    }
                };
            }();

            // Initialization
            jQuery(document).ready(function () {
                KTCkeditor.init();
            });

            // Initialization Repeater
            jQuery(document).ready(function () {
                KTSelect2.init();
            });

            // Class definition
            var KTFormRepeater = function () {

                // Private functions
                var demo3 = function () {
                    $('#kt_repeater_3').repeater({
                        initEmpty: false,

                        defaultValues: {
                            'text-input': 'foo'
                        },

                        show: function () {
                            $(this).slideDown();
                        },

                        hide: function (deleteElement) {
                            if (confirm('Are you sure you want to delete this element?')) {
                                $(this).slideUp(deleteElement);
                            }
                        }
                    });
                }

                return {
                    // public functions
                    init: function () {
                        demo3();
                    }
                };
            }();

            jQuery(document).ready(function () {
                KTFormRepeater.init();
            });


            // Image
            var avatar = new KTImageInput('kt_image');

            avatar.on('cancel', function (imageInput) {
                swal.fire({
                    title: 'Image successfully changed !',
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


            //  select2
            var KTSelect2 = function () {
                // Private functions
                var demos = function () {
                    // basic
                    $('.select2').select2({
                        placeholder: "Select a state",
                        allowClear: true
                    });

                }

                // Public functions
                return {
                    init: function () {
                        demos();
                    }
                };
            }();

        </script>

    @endpush


</x-dashboard.layout>
