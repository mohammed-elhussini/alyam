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
                    {{ $tax->name }}

                </h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="{{route('taxes.index')}}" class="text-muted">الضرائب</a>
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
                            {{ $tax->name }}
                        </h4>
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::User-->
                <!--begin::Desc-->
                <p class="mb-7">
                    {{$tax->value}} {{$tax->type ? 'نسبة مئوية' : 'مبلغ ثابت'}}
                </p>
                <!--end::Desc-->

            </div>
            <!--end::Body-->
            <div class="card-footer d-flex bg-gray-100">
                <a href="{{route('taxes.edit',$tax->id)}}"
                   class="btn btn-primary m-md-1 d-block w-md-50 font-weight-bolder">
                    تعديل
                </a>
                <form class=" m-md-1 d-block w-md-50 "
                      method="post"
                      action="{{route('taxes.destroy',$tax->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit"
                            id="kt_sweetalert"
                            class="btn btn-danger w-100 font-weight-bolder">
                        حذف
                    </button>
                </form>
            </div>
        </div>
        <!--end::Card-->


    </x-dashboard.wrap>

    @push('scripts')

        <script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>

        <script>
            jQuery(document).ready(function () {
                //
                $("#kt_sweetalert").click(function (e) {
                    var form = $(this).closest("form");
                    var name = $(this).data("name");
                    event.preventDefault();
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!",
                        customClass: {
                            confirmButton: "btn btn-danger",
                            cancelButton: "btn btn-light-primary"
                        }
                    }).then(function (result) {
                        if (result.value) {
                            Swal.fire(
                                "Deleted!",
                                "Your file has been deleted.",
                                "success"
                            )
                            form.submit()
                        }
                    });
                });
            });
        </script>
    @endpush

</x-dashboard.layout>
