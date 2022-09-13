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

        <!--begin::Card-->
        <div class="card ">

            <!--begin::Card body-->
            <div class="card-body">
                <form class="form" id="kt_form">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-7 my-2">
                            <!--begin::Row-->
                            <div class="row">
                                <label class="col-3"></label>
                                <div class="col-9">
                                    <h6 class="text-dark font-weight-bold mb-10">Customer Info:</h6>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-right text-left">Avatar</label>
                                <div class="col-9">
                                    <div class="image-input image-input-empty image-input-outline"
                                         id="kt_user_edit_avatar"
                                         style="background-image: url({{asset('dashboard/assets/media/users/blank.png')}})">
                                        <div class="image-input-wrapper"></div>
                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change" data-toggle="tooltip" title=""
                                            data-original-title="Change avatar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="profile_avatar_remove">
                                        </label>
                                        <span
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="cancel" data-toggle="tooltip" title=""
                                            data-original-title="Cancel avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
                                        <span
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="remove" data-toggle="tooltip" title=""
                                            data-original-title="Remove avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-right text-left">First Name</label>
                                <div class="col-9">
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                           value="Anna">
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-right text-left">Last Name</label>
                                <div class="col-9">
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                           value="Krox">
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-right text-left">Company Name</label>
                                <div class="col-9">
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                           value="Loop Inc.">
                                    <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-right text-left">Contact Phone</label>
                                <div class="col-9">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-phone"></i>
																			</span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                               value="+45678967456" placeholder="Phone">
                                    </div>
                                    <span
                                        class="form-text text-muted">We'll never share your email with anyone else.</span>
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-right text-left">Email Address</label>
                                <div class="col-9">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-at"></i>
																			</span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                               value="anna.krox@loop.com" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <!--end::Group-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-form-label col-3 text-lg-right text-left">Company Site</label>
                                <div class="col-9">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                               placeholder="Username" value="loop">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Group-->
                        </div>
                    </div>
                    <!--end::Row-->
                </form>
            </div>
            <!--begin::Card body-->

            <div class="card-footer bg-gray-100">
                <button type="submit"
                        class="btn btn-primary btn-block font-weight-bolder">
                    حفظ
                </button>
            </div>

        </div>
        <!--end::Card-->

    </x-dashboard.wrap>

    @push('scripts')

        <script src="{{asset('dashboard/assets/js/pages/custom/user/edit-user.js')}}"></script>

    @endpush

</x-dashboard.layout>
