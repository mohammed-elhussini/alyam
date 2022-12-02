<x-dashboard.layout>
    @push('styles')
        <style>

        </style>
    @endpush
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
                               name="model"
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

                            @for($year=$lastYear; $year>=$firstYear; $year--) {
                            <option value="{{$year}}">
                                {{$year}}
                            </option>
                            @endfor
                        </select>
                        @error('manufacture')
                        <div class="form-text invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-group w-100">
                        <label class="card-label font-weight-bolder text-dark">الماركة</label>
                        <select class="form-control select2 @error('brand_id') is-invalid @enderror"
                                data-placeholder="ماركة السيارة"
                                name="brand_id">
                            <option value=""></option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->title}}</option>
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
                                name="tax_id">
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
                                           name="picture"
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

                        <div class="form-group">
                            <label for="card-label font-weight-bolder text-dark">الصور</label>
                            <div class="repeater-list">
                                <div class="repeater-list-item">
                                    <input type="file"
                                           name="photos[]"
                                           multiple
                                           accept=".png, .jpg, .jpeg"/>
                                    <input type="text"
                                           name="title[]"
                                           multiple
                                           class="form-control"
                                           placeholder="اسم وصف الصورة">
                                </div>
                                <div class="repeater-create btn font-weight-bold btn-primary">
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

            //Class definition
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

            //Initialization
            jQuery(document).ready(function () {
                KTCkeditor.init();
            });


            //Image
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


            // select2
            var KTSelect2 = function () {
                // Private functions
                var demos = function () {
                    // basic
                    $('.select2').select2({
                        placeholder: "Select a state",
                        allowClear: true
                    });

                }
                // Initialization
                jQuery(document).ready(function () {
                    KTSelect2.init();
                });

                // Public functions
                return {
                    init: function () {
                        demos();
                    }
                };
            }();


            // add item repeater
            let i = 1;
            jQuery('.repeater-create').on('click', function () {
                i = i + 1;
                let repeatIteam =
                    '<div class="repeater-list-item">' +
                    '<input type="file" name="photo[]" multiple="multiple" accept=".png, .jpg, .jpeg"/>' +
                    '<input type="text" name="title[]"  class="form-control" placeholder="اسم وصف الصورة">' +
                    '<div class="repeater-delete btn btn-danger font-weight-bold btn-icon"><i class="la la-remove"></i></div>' +
                    '</div>';

                jQuery(repeatIteam).insertBefore(this);

            });
            // delete item repeater
            jQuery(document).on('click', '.repeater-delete', function () {
                jQuery(this).parents('.repeater-list-item').remove();
            });



            // Upload Avatar
            function uploadAvatar(input, place) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();
                    reader.onload = function (e) {
                        let preview = place;
                        let newSrc = e.target.result;
                        jQuery(preview).find('img').attr('src', newSrc);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            jQuery('.uploadAvatar input').change(function () {
                uploadAvatar(this, jQuery(this).parent().prev('.profileAvatarPreview'));
            });
        </script>

    @endpush


</x-dashboard.layout>
