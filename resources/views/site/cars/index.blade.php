<x-site.layout>

    <div class="pageHeader py-5">
        <div class="container">
            <div class="h2 text-center mb-4">اسطولنا</div>
            <x-site.custom-search :brands="$brands" :branches="$branches"/>
        </div>
    </div>

    <div class="container" id="allCars">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="well">
                    <div class="carTypes">
                        <div class="range px-1 pb-4">
                            <div class="h6">السعر</div>
                            <div class="dual-range"
                                 data-min="{{ $cars->min('price')}}"
                                 data-max="{{ $cars->max('price')}}">
                                <span class="handle left"></span>
                                <span class="highlight"></span>
                                <span class="handle right"></span>
                            </div>
                        </div>
                        <div class="h6">الفئة</div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                                <a href="#" class="carType car1"><span>سيدان كبيره</span></a>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                                <a href="#" class="carType car2"><span>سيدان متوسطة</span></a>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                                <a href="#" class="carType car3"><span>عائلية صغير</span></a>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                                <a href="#" class="carType car4"><span>فان صغير</span></a>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                                <a href="#" class="carType car5"><span>فخمة صغير</span></a>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                                <a href="#" class="carType car6"><span>فخمة متوسطة</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <div class="cars pb-4">
                    <div class="row">

                        @foreach($cars as $car)





                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <x-site.car-card :car="$car"/>
                        </div>
                        @endforeach
                    </div>

                    {{$cars->links()}}
                </div>
            </div>
        </div>
    </div>

</x-site.layout>
