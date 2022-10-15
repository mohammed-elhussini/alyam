<x-dashboard.layout>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid"
         id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">الرئسية</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <x-dashboard.wrap>

        <!--begin::Row-->
        <div class="row">

            <div class="col-lg-6 col-xxl-4">
                <!--begin::Stats Widget 11-->
                <div class="card card-custom wave wave-animate-slow  wave-primary gutter-b">
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                            <span class="symbol symbol-50 symbol-light-success mr-2">
                              <span class="symbol-label"><i class="icon-xl la la-car-alt"></i></span>
                            </span>
                            <div class="d-flex flex-column text-right">
                                <span class="text-dark-75 font-weight-bolder font-size-h3">{{$cars}}</span>
                                <span class="text-muted font-weight-bold mt-2">عدد السيارات</span>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Stats Widget 11-->

            </div>

            <div class="col-lg-6 col-xxl-4">
                <!--begin::Stats Widget 11-->
                <div class="card card-custom wave wave-animate-slow  wave-primary gutter-b">
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                            <span class="symbol symbol-50 symbol-light-success mr-2">
                              <span class="symbol-label"><i class="icon-xl la la-envelope-open"></i></span>
                            </span>
                            <div class="d-flex flex-column text-right">
                                <span class="text-dark-75 font-weight-bolder font-size-h3">{{$contacts}}</span>
                                <span class="text-muted font-weight-bold mt-2">عدد الرسائل</span>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Stats Widget 11-->

            </div>

            <div class="col-lg-6 col-xxl-4">
                <!--begin::Stats Widget 12-->
                <div class="card card-custom wave wave-animate-slow wave-success gutter-b">
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                           <span class="symbol symbol-50 symbol-light-primary mr-2">
                               <span class="symbol-label"><i class="icon-xl la la-users"></i></span>
                            </span>
                            <div class="d-flex flex-column text-right">
                                <span class="text-dark-75 font-weight-bolder font-size-h3">{{$users}}</span>
                                <span class="text-muted font-weight-bold mt-2">عدد المستخدمين</span>
                            </div>
                        </div>

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Stats Widget 12-->
            </div>

            <div class="col-lg-6 col-xxl-4">
                <!--begin::Stats Widget 11-->
                <div class="card card-custom wave wave-animate-slow  wave-primary gutter-b">
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                            <span class="symbol symbol-50 symbol-light-success mr-2">
                              <span class="symbol-label"><i class="icon-xl la la-list-alt"></i></span>
                            </span>
                            <div class="d-flex flex-column text-right">
                                <span class="text-dark-75 font-weight-bolder font-size-h3">Null</span>
                                <span class="text-muted font-weight-bold mt-2">الطلبات</span>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Stats Widget 11-->

            </div>

        </div>
        <!--end::Row-->

    </x-dashboard.wrap>

    <!--end::Entry-->
    @push('scripts')
        <script src="{{asset('dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/pages/widgets.js')}}"></script>
    @endpush
</x-dashboard.layout>
