<x-dashboard.layout>
    @push('styles')
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
    @endpush
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">أضف فرع</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">General</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">Empty Page</a>
                    </li>
                </ul>
                <!--end::Actions-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->
    <x-dashboard.wrap>
        <!--begin::Row-->
        <div class="row">

            <div class="col-lg-12">
                <!--begin::Advance Table Widget 3-->
                <div class="card">
                    <form>


                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">الفرع</label>
                                <input type="text" class="form-control form-control-solid" placeholder="إسم فرع">
                            </div>

                            <div class="form-group">
                                <label class="card-label font-size-lg font-weight-bolder text-dark" >عنوان الفرع</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>

                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">الهاتف</label>
                                <input type="tel" class="form-control" placeholder="الهاتف">
                            </div>

                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">البريد الالكترونى</label>
                                <input type="email" class="form-control" placeholder="البريد الالكترونى">
                            </div>
                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">الخريطة</label>
                                <div id="map"></div>
                            </div>


                        </div>

                        <!--end::Body-->

                        <div class="card-footer bg-gray-100">
                            <button type="submit"
                                    class="btn btn-primary btn-block font-weight-bolder">
                                حفظ
                            </button>
                        </div>
                    </form>
                </div>
                <!--end::Advance Table Widget 3-->
            </div>

        </div>
        <!--end::Row-->
    </x-dashboard.wrap>


    @push('scripts')

            <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script type="text/javascript" src='https://maps.google.com/maps/api/js?language=ar&libraries=places&key=AIzaSyA9_ve_oT3ynCaAF8Ji4oBuDjOhWEHE92U'></script>
       <script>
           jQuery(function () {
           function initMap() {
               // The location of Uluru
               const uluru = { lat: -25.344, lng: 131.031 };
               // The map, centered at Uluru
               const map = new google.maps.Map(document.getElementById("map"), {
                   zoom: 4,
                   center: uluru,
               });
               // The marker, positioned at Uluru
               const marker = new google.maps.Marker({
                   position: uluru,
                   map: map,
               });
           }

           window.initMap = initMap;
           });
       </script>

    @endpush

</x-dashboard.layout>
