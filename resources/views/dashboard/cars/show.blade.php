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
                    {{$car->name}}
                </h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="{{route('cars.index')}}" class="text-muted">السيارات</a>
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
                        {{$car->name}}
                    </h3>

                </div>
                <div class="card-toolbar d-flex">
                    <form class="d-inline-flex"
                          method="post"
                          action="{{route('cars.destroy',$car->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit"
                                class="btn btn-sm btn-icon btn-light-danger mr-2 kt_sweetalert">
                            <i class="icon-xl la la-trash-alt"></i>
                        </button>
                    </form>


                    <a href="{{route('cars.edit',$car->id)}}"
                       class="btn btn-sm btn-icon btn-light-primary">
                        <i class="icon-xl la la-pencil-alt"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="text-center">
                    <img class="img-fluid"
                         src="{{$car->picture ? asset('storage/'.$car->picture) : asset('dashboard/assets/media/users/blank.png')}}">
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="overlay">
                            <div class="card-body p-0">
                                <div class="overlay-wrapper">
                                    <img
                                        src="https://www.hawtcelebs.com/wp-content/uploads/2022/10/amelia-gething-for-folie-october-2022-2.jpg"
                                        alt="" class="w-100 rounded"/>
                                </div>
                                <div class="overlay-layer">
                                    <span class="btn font-weight-bold btn-primary btn-shadow">الاسم</span>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex align-items-center bg-light-info rounded p-5 mb-3">
                    {{$car->except}}
                </div>
                {{$car->description}}

                <h4 class="text-center">الصفات</h4>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>السعر</td>
                        <td>
                            {{$car->price}}
                        </td>
                    </tr>
                    <tr>
                        <td>الضريبة</td>
                        <td>
                            {{$car->tax->name}}
                        </td>
                    </tr>
                    <tr>
                        <td>الماركه</td>
                        <td>
                            {{$car->brand->title}}
                        </td>
                    </tr>

                    <tr>
                        <td>موديل</td>
                        <td>
                            {{$car->model}}
                        </td>
                    </tr>
                    <tr>
                        <td>سنه التصنيع</td>
                        <td>
                            {{$car->manufacture}}
                        </td>
                    </tr>
                    </tbody>
                </table>




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
