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
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">الأعضاء</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

                <!--end::Actions-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->

    <x-dashboard.wrap>

        <!--begin::Card-->
        <div class="card">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{route('users.create')}}"
                       class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<circle fill="#000000" cx="9" cy="15" r="6"/>
														<path
                                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                            fill="#000000" opacity="0.3"/>
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>مستخدم جديد</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-separate"
                       id="kt_datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الصوره</th>
                        <th>الأسم المستخدم</th>
                        <th>الجوال</th>
                        <th>الأكشن</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>
                                <div class="symbol symbol-70 symbol-sm flex-shrink-0">
                                    <img class=""
                                         src="{{$user->avatar ? asset('storage/'.$user->avatar) : asset('dashboard/assets/media/users/blank.png') }}">
                                </div>
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                <a href="{{route('users.show',$user->id)}}"
                                   class="btn btn-sm btn-clean btn-icon mr-2"
                                   title="Edit details">
                                    <span class="svg-icon svg-icon-md">
                                       <i class="icon-xl la la-eye"></i>
                                    </span>
                                </a>

                                <a href="{{route('users.edit',$user->id)}}"
                                   class="btn btn-sm btn-clean btn-icon mr-2"
                                   title="Edit details">
                                    <span class="svg-icon svg-icon-md">
                                       <i class="icon-xl la la-pencil-alt"></i>
                                    </span>
                                </a>

                                <form class="d-inline-flex"
                                      method="post"
                                      action="{{route('users.destroy',$user->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
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
