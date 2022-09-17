<x-dashboard.layout>
    @push('styles')

        <!--begin::Page Vendors Styles(used by this page)-->
        <link href="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.css')}}"
              rel="stylesheet"
              type="text/css"/>
        <!--end::Page Vendors Styles-->

    @endpush

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">الرسائل</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->

    <x-dashboard.wrap>

        <!--begin::Row-->
        <div class="row">
            @foreach($contacts as $contact)
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4 d-flex flex-column justify-content-between">

                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">

                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                    {{$contact->name}}
                                </a>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->

                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                <a href="mailto:{{$contact->email}}" class="text-muted text-hover-primary"> {{$contact->email}}</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                                <a href="tel:{{$contact->phone}}" class="text-muted text-hover-primary">{{$contact->phone}}</a>
                            </div>

                        </div>
                        <!--end::Info-->
                        <a href="{{route('contacts.show',$contact->id)}}"
                           class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">view message</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            @endforeach
        </div>
        <!--end::Row-->


        {{$contacts->links()}}


    </x-dashboard.wrap>




</x-dashboard.layout>
