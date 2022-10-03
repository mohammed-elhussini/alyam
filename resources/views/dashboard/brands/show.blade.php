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
                    {{ $brand->title }}
                </h5>
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
        <!--begin::Card-->
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">
                    <h3 class="card-label">
                        {{ $brand->title }}
                    </h3>
                </div>
                <div class="card-toolbar d-flex">
                    <form class="d-inline-flex"
                          method="post"
                          action="{{route('brands.destroy',$brand->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit"
                                class="btn btn-sm btn-icon btn-light-danger mr-2 kt_sweetalert">
                            <i class="icon-xl la la-trash-alt"></i>
                        </button>
                    </form>
                    <a href="{{route('brands.edit',$brand->id)}}"
                       class="btn btn-sm btn-icon btn-light-primary">
                        <i class="icon-xl la la-pencil-alt"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if($brand->thumbnail)
                    <div class="text-center">
                        <img class="img-fluid"
                             src="{{asset('storage/'.$brand->thumbnail)}}">
                    </div>
                @endif
                <div class="d-flex align-items-center bg-light-info rounded p-5 mb-3">
                    {!!  $brand->description !!}
                </div>
            </div>
        </div>
        <!--end::Card-->
    </x-dashboard.wrap>

    @push('scripts')

        <script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>

        <script>
            jQuery(document).ready(function () {
                //
                jQuery(".kt_sweetalert").on('click', function (e) {
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
