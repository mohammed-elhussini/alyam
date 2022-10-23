<x-site.layout>

    <div class="pageHeader py-5">
        <div class="container">
            <div class="h1 text-center mb-4">{{$brand->title}}</div>
            {!! $brand->description !!}
        </div>
    </div>

    <div class="container" id="allCars">

        <div class="cars pb-4">
            <div class="row">
                @foreach($cars as $car)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <x-site.car-card :car="$car"/>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

</x-site.layout>
