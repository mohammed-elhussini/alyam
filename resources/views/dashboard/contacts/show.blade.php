<x-dashboard.layout>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid"
         id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    رساله من
                    <span class="label label-xl label-inline font-weight-bold label-rounded label-success">
                         {{ $contact->name }}
                    </span>
                </h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="{{route('contacts.index')}}" class="text-muted">الرسائل</a>
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

                    <!--begin::User-->
                    <div class="d-flex align-items-center mb-7">

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <h4 class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                {{ $contact->name }}
                            </h4>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::User-->
                    <!--begin::Desc-->
                    <p class="mb-7">
                        {{ $contact->message }}
                    </p>
                    <!--end::Desc-->
                    <!--begin::Info-->
                    <div class="mb-7">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                            <a href="mailto:{{ $contact->email }}" class="text-muted text-hover-primary">{{ $contact->email }}</a>
                        </div>
                        <div class="d-flex justify-content-between align-items-cente my-1">
                            <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                            <a href="tel:{{ $contact->phone }}" class="text-muted text-hover-primary">{{ $contact->phone }}</a>
                        </div>

                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Body-->
                <div class="card-footer bg-gray-100">
                    <button type="submit"
                            class="btn btn-danger btn-block font-weight-bolder">
                        حذف
                    </button>
                </div>
            </div>
            <!--end::Card-->


    </x-dashboard.wrap>

    @push('scripts')
    @endpush

</x-dashboard.layout>
