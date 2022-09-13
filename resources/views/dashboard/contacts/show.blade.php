<x-dashboard.layout>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid"
         id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">رساله من الاسم</h5>
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
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Body-->
                <div class="card-body pt-4 d-flex flex-column justify-content-between">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header font-weight-bold py-4">
                                        <span class="font-size-lg">Choose Label:</span>
                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                    </li>
                                    <li class="navi-separator mb-3 opacity-70"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Customer</span>
																				</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Partner</span>
																				</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Suplier</span>
																				</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Member</span>
																				</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Staff</span>
																				</span>
                                        </a>
                                    </li>
                                    <li class="navi-separator mt-3 opacity-70"></li>
                                    <li class="navi-footer py-4">
                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::User-->
                    <div class="d-flex align-items-center mb-7">

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Luca Doncic</a>
                            <span class="text-muted font-weight-bold">Head of Development</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::User-->
                    <!--begin::Desc-->
                    <p class="mb-7">I distinguish three
                        <a href="#" class="text-primary pr-1">#XRS-54PQ</a>objectives First objectives and nice cooked rice</p>
                    <!--end::Desc-->
                    <!--begin::Info-->
                    <div class="mb-7">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                            <a href="#" class="text-muted text-hover-primary">luca@festudios.com</a>
                        </div>
                        <div class="d-flex justify-content-between align-items-cente my-1">
                            <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                            <a href="#" class="text-muted text-hover-primary">44(76)34254578</a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                            <span class="text-muted font-weight-bold">Barcelona</span>
                        </div>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->


    </x-dashboard.wrap>

    @push('scripts')



    @endpush

</x-dashboard.layout>
