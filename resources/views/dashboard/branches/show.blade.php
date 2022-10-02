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
                    {{ $branch->name }}
                </h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="{{route('branches.index')}}" class="text-muted">الفروع</a>
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
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        {{ $branch->name }}
                    </h3>

                </div>
                <div class="card-toolbar">
                    <form class="d-inline-flex"
                           method="post"
                           action="{{route('branches.destroy',$branch->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit"
                                class="btn btn-sm btn-icon btn-light-danger mr-2 kt_sweetalert">
                            <i class="icon-xl la la-trash-alt"></i>
                        </button>
                    </form>

                    <a href="{{route('branches.edit',$branch->id)}}"
                       class="btn btn-sm btn-icon btn-light-primary">
                        <i class="icon-xl la la-pencil-alt"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">


               <p> <a href="mailto: {{ $branch->email }}"
                   class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                    <i class="flaticon2-new-email ml-2 font-size-lg"></i>
                    {{ $branch->email }}
                </a></p>

                <p><a href="tel:{{ $branch->phone }}"
                   class="text-dark-50 text-hover-primary font-weight-bold">
                    <i class="flaticon2-phone ml-2 font-size-lg"></i>
                   {{ $branch->phone }}
                </a></p>
                <p>
                    {{ $branch->address }}
                </p>
            </div>
        </div>
        <!--end::Card-->
    </x-dashboard.wrap>

    @push('scripts')

        <script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>

        <script>
            jQuery(document).ready(function () {
                //
                jQuery(".kt_sweetalert").on('click',function (e) {
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
