<x-dashboard.layout>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid"
         id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">الملف الشخصى {{$user->name}}</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->
    <x-dashboard.wrap>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body pt-15">
                        <!--begin::User-->
                        <div class="text-center mb-10">
                            <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                                <div class="symbol-label"
                                     style="background-image:url('{{$user->avatar ? asset('storage/'.$user->avatar) : asset('dashboard/assets/media/users/blank.png') }}')"></div>
                                <i class="symbol-badge symbol-badge-bottom bg-success"></i>
                            </div>
                            <h4 class="font-weight-bold my-2">{{$user->name}}</h4>
                            <div class="text-muted mb-2">{{$user->first_name}} {{$user->last_name}}</div>
                            {{--                            <span class="label label-light-warning label-inline font-weight-bold label-lg">Active</span>--}}
                        </div>
                        <!--end::User-->

                        <!--begin::Nav-->
                        <p class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 btn-block active">
                            الاسم الاول
                            :
                            {{$user->first_name}}
                        </p>
                        <p class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 btn-block active">
                            الاسم الاخير
                            :
                            {{$user->last_name}}
                        </p>
                        <p class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 btn-block active">
                            الجنسية
                            :
                            {{$user->nationality}}
                        </p>
                        <p class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 btn-block active">
                            تاريخ الميلاد
                            :
                            {{$user->birthday}}
                        </p>
                        <p class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 btn-block active">
                            الجوال
                            :
                            {{$user->phone}}
                        </p>
                        <p class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 btn-block active">
                            رخصة القيادة
                            :
                            {{$user->driving_license}}
                        </p>
                        <p class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 btn-block active">
                            تاريخ انتهاء رخصه القيادة
                            :
                            {{$user->driving_license}}
                        </p>
                        <p class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 btn-block active">
                            رقم الهوية
                            :
                            {{$user->id_number}}
                        </p>
                        <p class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 btn-block active">
                            البريد الالكترونى
                            :
                            {{$user->email}}
                        </p>
                        <!--end::Nav-->
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-md-8">
                <!--begin::Card-->
                <div class="card">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">

                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <button class="btn font-weight-bold btn-primary mr-2">
                                الطلبات
                                <span class="label label-sm label-white ml-2">5</span>
                            </button>

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
                                <th>الحالة</th>
                                <th>الأكشن</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#</td>
                                <td>
                                    <div class="symbol symbol-70 symbol-sm flex-shrink-0">
                                        <img src="{{asset('dashboard/assets/media/users/blank.png') }}">
                                    </div>
                                </td>
                                <td>اسم السيارة</td>
                                <td>test</td>
                                <td>test</td>
                                <td>
                                    <a href="#"
                                       class="btn btn-sm btn-clean btn-icon mr-2"
                                       title="Edit details">
                                    <span class="svg-icon svg-icon-md">
                                       <i class="icon-xl la la-pencil-alt"></i>
                                    </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>
                                    <div class="symbol symbol-70 symbol-sm flex-shrink-0">
                                        <img src="{{asset('dashboard/assets/media/users/blank.png') }}">
                                    </div>
                                </td>
                                <td>اسم السيارة</td>
                                <td>test</td>
                                <td>test</td>
                                <td>
                                    <a href="#"
                                       class="btn btn-sm btn-clean btn-icon mr-2"
                                       title="Edit details">
                                    <span class="svg-icon svg-icon-md">
                                       <i class="icon-xl la la-pencil-alt"></i>
                                    </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>
                                    <div class="symbol symbol-70 symbol-sm flex-shrink-0">
                                        <img src="{{asset('dashboard/assets/media/users/blank.png') }}">
                                    </div>
                                </td>
                                <td>اسم السيارة</td>
                                <td>test</td>
                                <td>test</td>
                                <td>
                                    <a href="#"
                                       class="btn btn-sm btn-clean btn-icon mr-2"
                                       title="Edit details">
                                    <span class="svg-icon svg-icon-md">
                                       <i class="icon-xl la la-pencil-alt"></i>
                                    </span>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between mt-5">
            <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary font-weight-bold">تحرير</a>
            <button type="submit" id="kt_sweetalert" class="btn btn-danger font-weight-bold">حذف</button>
        </div>

    </x-dashboard.wrap>

    @push('scripts')
        <script src="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
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
