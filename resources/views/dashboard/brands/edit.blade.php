<x-dashboard.layout>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">تعديل ماركة - {{$brand->title}}</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="{{route('brands.index')}}" class="text-muted">الماركات</a>
                    </li>
                </ul>
                <!--end::Actions-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->
    <x-dashboard.wrap>
        <!--begin::Row-->
        <div class="row">

            <div class="col-lg-12">
                <!--begin::Advance Table Widget 3-->
                <div class="card">
                    <form method="post"
                          action="{{route('brands.update',$brand->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">الماركة</label>
                                <input type="text"
                                       class="form-control form-control-solid @error('title') is-invalid @enderror"
                                       name="title"
                                       value="{{$brand->title}}"
                                       placeholder="إسم الماركة">
                                @error('title')
                                <div class="form-text invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-100">
                                <label class="card-label font-weight-bolder text-dark">الوصف </label>
                                <textarea id="kt-ckeditor" class="form-control @error('description') is-invalid @enderror"
                                          name="description">{{ $brand->description }}</textarea>
                                @error('description')
                                <div class="form-text invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group w-100">
                                <label class="card-label font-weight-bolder text-dark d-block">الصورة البارزه</label>
                                <div class="image-input image-input-empty image-input-outline"
                                     id="kt_image_5"
                                     style="background-image: url({{asset('dashboard/assets/media/users/blank.png') }})">
                                    <div class="image-input-wrapper"
                                         style="background-image: url('{{$brand->image ? asset('storage/'.$brand->image) : asset('dashboard/assets/media/users/blank.png') }}')"></div>

                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="change"
                                        data-toggle="tooltip"
                                        title=""
                                        data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file"
                                               name="image"
                                               accept=".png, .jpg, .jpeg"/>

                                    </label>

                                    <span
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="cancel"
                                        data-toggle="tooltip"
                                        title="Cancel avatar"><i class="ki ki-bold-close icon-xs text-muted"></i></span>

                                    <span
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="remove"
                                        data-toggle="tooltip"
                                        title="Remove avatar"><i class="ki ki-bold-close icon-xs text-muted"></i></span>
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
                <!--end::Advance Table Widget 3-->
            </div>

        </div>
        <!--end::Row-->
    </x-dashboard.wrap>


    @push('scripts')

        <script src="{{asset('dashboard/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>

        <script>
            // Class definition
            var KTCkeditor = function () {
                // Private functions
                var demos = function () {
                    ClassicEditor
                        .create( document.querySelector( '#kt-ckeditor' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                }

                return {
                    // public functions
                    init: function() {
                        demos();
                    }
                };
            }();
            // Initialization
            jQuery(document).ready(function() {
                KTCkeditor.init();
            });

            // Image
            var avatar5 = new KTImageInput('kt_image_5');

            avatar5.on('cancel', function (imageInput) {
                swal.fire({
                    title: 'Image successfully changed !',
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonText: 'Awesome!',
                    confirmButtonClass: 'btn btn-primary font-weight-bold'
                });
            });

            avatar5.on('change', function (imageInput) {
                swal.fire({
                    title: 'Image successfully changed !',
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonText: 'Awesome!',
                    confirmButtonClass: 'btn btn-primary font-weight-bold'
                });
            });

            avatar5.on('remove', function (imageInput) {
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
