<x-dashboard.layout>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
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
                        <a href="" class="text-muted">General</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">Empty Page</a>
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
<form>


                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="form-group w-100">
                            <label class="card-label font-size-lg font-weight-bolder text-dark">العنوان</label>
                            <input type="text" class="form-control form-control-solid" placeholder="إسم السيارة">
                        </div>
                        <div class="form-group w-100">
                            <label class="card-label font-weight-bolder text-dark">الوصف</label>
                            <div id="kt-ckeditor-1-toolbar"></div>
                            <div id="kt-ckeditor-1" class="form-control"></div>
                        </div>
                        <div class="form-group w-100">
                            <label class="card-label font-weight-bolder text-dark">الضريبة</label>

                            <select class="form-control select2"
                                    data-placeholder="اختار الضريبة المناسبة"
                                    id="kt_select2_1"
                                    name="param">
                                <option value=""></option>
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </select>

                        </div>
                        <div class="form-group w-100">
                            <label class="card-label font-weight-bolder text-dark">الفئة</label>

                            <select class="form-control select2"
                                    data-placeholder="الفئة السيارة"
                                    id="kt_select2_1"
                                    name="param">
                                <option value=""></option>
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </select>

                        </div>
                        <div class="form-group w-100">
                            <label class="card-label font-weight-bolder text-dark">سعر السيارة</label>
                            <input id="kt_touchspin_1"
                                   type="number"
                                   class="form-control"
                                   name="demo0"
                                   placeholder="السعر"/>
                        </div>
                        <div class="form-group w-100">
                        <div id="kt_repeater_3">
                            <div class="form-group">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">الصور</label>
                                <div data-repeater-list="">
                                    <div data-repeater-item class="form-group row justify-content-between">

                                        <div class="col-lg-10">

                                            <div class="image-input image-input-empty image-input-outline mb-3"
                                                 id="kt_image_5"
                                                 style="background-image: url({{asset('/dashboard/assets/media/users/blank.png')}})">
                                                <div class="image-input-wrapper"></div>

                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change"
                                                    data-toggle="tooltip"
                                                    title=""
                                                    data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file"
                                                           name="profile_avatar"
                                                           accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden"
                                                           name="profile_avatar_remove"/>
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

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="اسم وصف الصورة">
                                            </div>

                                            <div class="radio-inline">
                                                <label class="radio radio-primary">
                                                    <input type="radio" name="radios11"/>
                                                    <span></span>
                                                    الأيقونة
                                                </label>
                                                <label class="radio radio-primary">
                                                    <input type="radio" name="radios12"/>
                                                    <span></span>
                                                    أساسية
                                                </label>
                                                <label class="radio radio-primary">
                                                    <input type="radio" name="radios13"/>
                                                    <span></span>
                                                    الأيقونة ومختفية
                                                </label>
                                            </div>

                                        </div>

                                        <div class="col-lg-auto">
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
                <!--end::Advance Table Widget 3-->
            </div>

        </div>
        <!--end::Row-->
    </x-dashboard.wrap>


    @push('scripts')

        <script src="{{asset('dashboard/assets/plugins/custom/ckeditor/ckeditor-document.bundle.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/pages/crud/forms/editors/ckeditor-document.js')}}"></script>

        <script>

            // Class definition ckeditor
            var KTCkeditorDocument = function () {
                // Private functions
                var demos = function () {
                    DecoupledEditor
                        .create(document.querySelector('#kt-ckeditor-1'))
                        .then(editor => {
                            const toolbarContainer = document.querySelector('#kt-ckeditor-1-toolbar');

                            toolbarContainer.appendChild(editor.ui.view.toolbar.element);
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
                KTCkeditorDocument.init();
            });

            // Class definition select2
            var KTSelect2 = function () {
                // Private functions
                var demos = function () {
                    // basic
                    $('#kt_select2_1').select2({
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
