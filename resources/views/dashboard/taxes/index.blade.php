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
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">الضرائب</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->

    <x-dashboard.wrap>

        <!--begin::Card-->
        <div class="card">
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم الضريبة</th>
                        <th>قيمة الضريبة</th>
                        <th>نوع الضريبة</th>
                        <th>الشكل النهائي</th>
                        <th>الاكشن</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($taxes as $tax)
                        <tr>
                            <td>{{$tax->id}}</td>
                            <td>{{$tax->name}}</td>
                            <td>{{$tax->value}}</td>
                            <td>{{$tax->type ? 'نسبة مئوية' : 'مبلغ ثابت'}}</td>
                            <td>{{$tax->value}} {{$tax->type ? 'نسبة مئوية' : 'مبلغ ثابت'}}</td>
                            <td>
                                <a href="{{route('taxes.show',$tax->id)}}"
                                   class="btn btn-sm btn-clean btn-icon mr-2"
                                   title="Edit details">
                                    <span class="svg-icon svg-icon-md">
                                       <i class="icon-xl la la-eye"></i>
                                    </span>
                                </a>

                                <a href="{{route('taxes.edit',$tax->id)}}"
                                   class="btn btn-sm btn-clean btn-icon mr-2"
                                   title="Edit details">
                                    <span class="svg-icon svg-icon-md">
                                       <i class="icon-xl la la-pencil-alt"></i>
                                    </span>
                                </a>


                                <form class="d-inline-flex" method="post"
                                      action="{{route('taxes.destroy',$tax->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                            id="kt_sweetalert"
                                            class="btn btn-sm btn-clean btn-icon kt_sweetalert"
                                            title="Delete">
                                <span class="svg-icon svg-icon-md">
                                    <i class="icon-xl la la-trash-alt"></i>
                                </span>
                                    </button>
                                </form>


                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->

    </x-dashboard.wrap>


    @push('scripts')
        <script src="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/pages/crud/datatables/basic/scrollable.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>

        <script>
            jQuery(document).ready(function () {
                //
                $('#kt_datatable').DataTable({
                    pagingType: 'full_numbers',
                    scrollY: 500,
                    scrollX: true,
                    paging: true,
                    // lengthMenu: [
                    //     [10, 25, 50, -1],
                    //     [10, 25, 50, 'All'],
                    // ],
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/ar.json',
                    },
                });
                //
                $(".kt_sweetalert").click(function (e) {
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
