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
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    {{$branch->name}}
                    -
                    تعديل فرع
                </h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="{{url('admin/branches')}}" class="text-muted">الفروع</a>
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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post"
                          action="{{route('branches.update',$branch->id)}}">
                        @csrf
                        @method('put')

                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">الفرع</label>
                                <input type="text"
                                       class="form-control form-control-solid @error('name') is-invalid @enderror "
                                       name="name"
                                       value="{{$branch->name}}"
                                       placeholder="إسم فرع">
                                @error('name')
                                <div class="form-text invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">عنوان الفرع</label>
                                <textarea class="form-control @error('address') is-invalid @enderror "
                                          name="address"
                                          rows="3">{{$branch->address}}</textarea>
                                @error('address')
                                <div class="form-text invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">الهاتف</label>
                                <input type="tel"
                                       class="form-control @error('phone') is-invalid @enderror "
                                       name="phone"
                                       value="{{$branch->phone}}"
                                       placeholder="الهاتف">
                                @error('phone')
                                <div class="form-text invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">
                                    البريد الالكترونى
                                </label>
                                <input type="email"
                                       class="form-control @error('email') is-invalid @enderror "
                                       name="email"
                                       value="{{$branch->email}}"
                                       placeholder="البريد الالكترونى">
                                @error('email')
                                <div class="form-text invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">
                                    الخريطة
                                </label>
                                <div class="form-group">
                                    <div class="form-group search-input-map">
                                        <input type="text"
                                               id="mapSearch"
                                               class="form-control"
                                               placeholder="البحث على الخريطة">
                                    </div>
                                    <div id="map" style="width: 100%;height:400px;"></div>
                                    <input type="hidden" name="lat" id="lat">
                                    <input type="hidden" name="lng" id="lng">
                                    <div class="controls">
                                        <input type="text"
                                               class="w-100"
                                               placeholder="العنوان"
                                               readonly>
                                    </div>
                                </div>

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

            <script type="text/javascript"
                    src='https://maps.google.com/maps/api/js?language=ar&libraries=places&key=AIzaSyA9_ve_oT3ynCaAF8Ji4oBuDjOhWEHE92U'></script>
            <script>
                var map;
                var marker;
                var lat = document.getElementById('lat');
                var lng = document.getElementById('lng');
                var address = document.getElementById('address')
                var geocoder = new google.maps.Geocoder();
                var infowindow = new google.maps.InfoWindow();
                var myLatlng = new google.maps.LatLng(12.037933, 28.381523);
                var icon = {
                    url: "{{asset('dashboard/assets/media/map-marker.png') }}", // url
                    scaledSize: new google.maps.Size(50, 50), // scaled size
                    origin: new google.maps.Point(0, 0), // origin
                };
                var selectedAddress = ""
                const locationButton = document.createElement("button");
                // var geoloccontrol = new klokantech.GeolocationControl(map, 15);

                const setLatLngPos = (lat, lng) => {
                    $('#lat').val(lat)
                    $('#lng').val(lng)
                    console.log($('#lat').val())
                    console.log($('#lng').val())
                }

                function initMap(latLng) {
                    var myLatlng;
                    if (lat.value === '' || lng.value === '') {
                        myLatlng = latLng;
                    } else {
                        myLatlng = new google.maps.LatLng(lat.value, lng.value)
                    }
                    // myLatlng = new google.maps.LatLng(lat.value, lng.value)
                    var mapOptions = {
                        zoom: 15,
                        center: myLatlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    map = new google.maps.Map(document.getElementById("map"), mapOptions);
                    marker = new google.maps.Marker({
                        map: map,
                        position: myLatlng,
                        draggable: true,
                        icon: icon
                    });

                    geocoder.geocode({'latLng': myLatlng}, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                address.value = '';
                                lat.value = marker.getPosition().lat();
                                lng.value = marker.getPosition().lng();
                                infowindow.setContent(results[0].formatted_address);
                                infowindow.open(map, marker);
                            }
                        }
                    });
                    google.maps.event.addListener(marker, 'dragend', function () {
                        geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                            if (status == google.maps.GeocoderStatus.OK) {
                                console.log('results')
                                if (results[0]) {
                                    selectedAddress = results[0].address_components[1].long_name;
                                    console.log(selectedAddress)
                                    $('.banner-home .item-search .input-search').val(results[0].address_components[1].long_name);
                                    address.value = results[0].formatted_address;
                                    lat.value = marker.getPosition().lat();
                                    lng.value = marker.getPosition().lng();
                                    infowindow.setContent(results[0].formatted_address);
                                    infowindow.open(map, marker);
                                }
                            }
                        });
                        setLatLngPos(marker.getPosition().lat(), marker.getPosition().lng())
                        // console.log('marker.position', marker.position)
                    });

                    google.maps.event.addListener(map, 'mousedown', function () {
                        $("#mapSearch").val("")
                    });

                    google.maps.event.addListener(map, 'mouseup', function (e) {
                        var geocoder = new google.maps.Geocoder();
                        geocoder.geocode({
                            'latLng': marker.position
                        }, function (results, status) {

                            if (status == google.maps.GeocoderStatus.OK) {
                                if (results[0]) {
                                    // $('.banner-home .item-search .input-search').val(results[0].address_components[1].long_name)
                                    selectedAddress = results[0].address_components[1].long_name
                                    address.value = results[0].formatted_address;
                                }
                            }
                        });
                    });

                    google.maps.event.addListener(map, 'mousedown', function () {
                        $("#mapSearch").val("")
                    });

                    map.addListener('center_changed', () => {
                        marker.setPosition(map.getCenter())
                        setLatLngPos(marker.getPosition().lat(), marker.getPosition().lng())
                        // console.log('marker.position', marker.getPosition().lat())
                    })
                    const locationButton = document.createElement("button");

                    locationButton.textContent = "";
                    locationButton.classList.add("custom-map-control-button");
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
                    locationButton.addEventListener("click", () => {
                        // Try HTML5 geolocation.
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(
                                (position) => {
                                    const pos = {
                                        lat: position.coords.latitude,
                                        lng: position.coords.longitude,
                                    };

                                    infowindow.setPosition(pos);
                                    infowindow.setContent("Location found.");
                                    infowindow.open(map);
                                    map.setCenter(pos);
                                    var geocoder = new google.maps.Geocoder();
                                    geocoder.geocode({
                                        'latLng': marker.position
                                    }, function (results, status) {

                                        if (status == google.maps.GeocoderStatus.OK) {
                                            if (results[0]) {
                                                address.value = results[0].formatted_address;
                                            }
                                        }
                                    });
                                },
                                () => {
                                    handleLocationError(true, infowindow, map.getCenter());
                                }
                            );
                        } else {
                            // Browser doesn't support Geolocation
                            handleLocationError(false, infowindow, map.getCenter());
                        }
                    });
                    setLatLngPos(marker.getPosition().lat(), marker.getPosition().lng())
                    // console.log('marker.position', marker.position)
                }

                function initialize() {
                    var input = document.getElementById('mapSearch');
                    var autocomplete = new google.maps.places.Autocomplete(
                        /** @type {HTMLInputElement} */(input),
                        {
                            types: [],
                        });
                    google.maps.event.addListener(autocomplete, 'place_changed', function () {
                        var place = autocomplete.getPlace();
                        if (!place.geometry) {
                            return;
                        }
                        lat.value = place.geometry.location.lat();
                        lng.value = place.geometry.location.lng();
                        // initMap();
                        var address = '';
                        if (place.address_components) {
                            selectedAddress = place.address_components[0].long_name;
                            console.log(selectedAddress)
                            // $('.banner-home .item-search .input-search').val(place.address_components[0].long_name)
                            address = [
                                (place.address_components[0] && place.address_components[0].short_name || ''),
                                (place.address_components[1] && place.address_components[1].short_name || ''),
                                (place.address_components[2] && place.address_components[2].short_name || '')
                            ].join(' ');
                        }
                        initMap();
                    });
                }

                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                    infoWindow.setPosition(pos);
                    infoWindow.setContent(
                        browserHasGeolocation
                            ? "Error: The Geolocation service failed."
                            : "Error: Your browser doesn't support geolocation."
                    );
                    infoWindow.open(map);
                }

                google.maps.event.addDomListener(window, 'load', initialize);

                if (lat.value !== '' && lng.value !== '') {
                    google.maps.event.addDomListener(window, 'load', initMap);
                }

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (p) {
                        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
                        initMap(LatLng)
                    });
                } else {
                    alert('Geo Location feature is not supported in this browser.');
                }

            </script>

    @endpush

</x-dashboard.layout>
